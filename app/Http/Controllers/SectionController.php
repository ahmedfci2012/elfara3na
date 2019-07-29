<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Section;

class SectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('section.create');
    }

    public function create(Request $request) {
		/*$rules = [ 
				'title' => 'required|max:255',
				'short_desc' => 'required|max:255',
				'points' => 'required|numeric|min:0',
				'category' => 'required|numeric|exists:categories,id',
				'brand' => 'required|numeric|exists:brands,id' 
        ];
        */
		//$this->validate ( $request, $rules );
		// Save in Database
		$section = Section::create ( [ 
				'num' => $request ['num'],
				'name' => $request ['name'],
				'quantity' => $request ['quantity']
		] );
		        
        session()->flash('message', 'تم أضافة القطاع بنجاح');
        session()->flash('type', 'success');

		return redirect ( "/subsection/index/$section->id" ); // got to add sub section

//return view('section.create');
	}


}
