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