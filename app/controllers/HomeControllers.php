<?php

class HomeControllers extends BaseController {
    protected $layout = "layouts.main";
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $videos = Cache::remember('videos', 60, function()
        {
            return Videos::All();
        });


        $images = Cache::remember('images', 60, function()
        {
            return Images::All();
        });

        //$cacheimg = Cache::get('images');
        $this->layout->content = View::make('home.dashboard')->with(array('images'=>$images,'videos'=>$videos));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('home.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

        $item=Images::find($id);
        $user=User::find($item->user_id);

        $this->layout->content=View::make('home.show')
            ->with([ 'show_item'=>$item, 'username'=>$user]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('home.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
