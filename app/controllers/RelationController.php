<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RelationController
 *
 * @author Asif
 */
class RelationController extends \BaseController 

      {
            public function index()
            {
                $articles=  Article::all();
                //print_r($articles);
                 return View::make('relation.index')
			->with('articles', $articles);
        
               
            }
            public function store()
            {
                $posters=  Poster::all();
                //print_r($posters);
                 return View::make('relation.Poster')
                 
                    ->with('posters', $posters);
            }
       }
