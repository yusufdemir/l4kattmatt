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
        $Media = Cache::remember('Media', 60, function()
        {
            return Media::All();
        });

        //$cacheimg = Cache::get('images');
        $this->layout->content = View::make('home.dashboard')->with('medias',$Media);
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
	public function show($slug)
	{

	    //Cache Video Sites
        /*
        $showMedia=  Cache::remember($slug, 100, function() use ($slug)
        {
            return Media::where('slug', $slug)->first();
        });*/

        $showMedia = Media::where('slug', $slug)->first();

        $this->layout->content = View::make('home.show')->with('details',$showMedia);
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
