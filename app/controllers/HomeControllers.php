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
        $item         =DB::table('media')->where('slug', $slug)->first();
        $previousSlug = Media::where('id', '<', $item->id)->max('slug');
        $nextSlug     = Media::where('id', '>', $item->id)->first();

        //////////////////////////////////////////////
        $user=User::find($item->user_id);
            if($item->type==3){
                $item->video_site_id;
            }
        $this->layout->content=View::make('home.show')
            ->with([
                'show_item'=>$item,
                'username'=>$user,
                'next'=>$nextSlug,
                'prev'=>$previousSlug,
            ]);
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
