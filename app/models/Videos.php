<?php

class Videos extends Eloquent {
    protected $table = 'videos';


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

    /**
     * Get the icon to the post.
     *
     * @return string

    public function icon()
    {
        if($this->type==0){
            $icon='<span class="glyphicon glyphicon-picture"></span>';
        }else if($this->type==1){
            $icon='<span class="glyphicon glyphicon-flash"></span>';
        }
        return $icon;
    }
     */
}
