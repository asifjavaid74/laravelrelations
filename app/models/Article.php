<?php
class Article extends Eloquent
    {
         public function Posters()
            {
            // return Poster:: where('id',  $this->user_id)->first()->name; 
             return $this->belongsTo('Poster');
            }
            
    }