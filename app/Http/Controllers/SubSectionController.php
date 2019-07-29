<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\SubSection;

class SubSectionController extends Controller
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
    public function index($section_id)
    {
        $section = DB::table('sections')->where('id', '=',$section_id)->first();
        $sub_sections = DB::table('components')->where('section_id', '=',$section_id)->get();
        return view('subsection.create',[
                                'section' => $section,
                                'sub_sections'=>$sub_sections
                                ]);
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
        $section_id = $request ['section_id'];
		$subsection = SubSection::create ( [ 
                'section_id'=>$section_id,
				'num' => $request ['num'],
				'name' => $request ['name'],
				'quantity' => $request ['quantity']
		] );
		        
        session()->flash('message', 'تم أضافة الجزء بنجاح');
        session()->flash('type', 'success');

		return redirect ( "/subsection/index/$section_id" ); // got to add sub section

//return view('section.create');
	}


}
