<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
            public function about() 
            {
                return view('forms.about');
                
            }
            public function service() 
            {
                return view('forms.service');
            }
            public function home() 
            {
                 $title="riya jse";
               // return view('forms.index', compact('title'));
                 return view('forms.index')->with('std',$title);
            }

}
