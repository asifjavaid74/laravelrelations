<?php
class Poster extends Eloquent{
    
    
     public function Article()
            {
             
             return $this->hasMany('Article');
            }
            
            public function GetPoster(){
                return Poster:: where('id',  $this->user_id)->first()->name; 
            }
            
}