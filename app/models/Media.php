<?php
use Illuminate\Support\Facades\URL; # not sure why i need this here :c

class Media extends Eloquent
{
    protected $table = 'media';


    /**
     * Get the URL to the post.
     *
     * @return string
     */
    public function url()
    {
        $convert=Str::slug($this->name);
        return Url::to($convert);
    }

    public function slugName()
    {
        $convert=Str::slug($this->name);
        return $convert;
    }

    public function prev()
    {
         $prev = Media::where('id', '<', $this->id)->orderBy('id', 'desc')->first();
        if($prev->id==''){
            return $getLast  = Media::where('id', '>', $this->id)->orderBy('id', 'desc')->first();
        }else{
            return $prev;
        }

    }

    public function next()
    {
        $next = Media::where('id', '>', $this->id)->first();
        if($next->id==''){
            return $getFirst = Media::where('id', '<', $this->id)->first();
        }else{
            return $next;
        }
    }

    public function username()
    {
        $user=User::find($this->user_id);
        return $user;
    }


    public function youtubeUrl()
    {
        if($this->type==3){
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $this->src, $match)) {
                $video_id = $match[1];
                return $videoUrl =$video_id;
            }
        }else{
            return $videoUrl     ='';
        }
    }


    /**
     * Get the icon to the post.
     *
     * @return string
     */
    public function icon()
    {
        if($this->type==1){
            $icon='<span class="glyphicon glyphicon-picture"></span>';
        }else if($this->type==2){
            $icon='<span class="glyphicon glyphicon-flash"></span>';
        }else if($this->type==3){
            $icon='<span class="glyphicon glyphicon-facetime-video"></span>';
        }else{
            $icon='<span class="glyphicon glyphicon-eye-close"></span>';
        }
        return $icon;
    }

}