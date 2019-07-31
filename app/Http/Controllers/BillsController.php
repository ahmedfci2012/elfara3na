<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;


class BillsController extends Controller
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

        session()->put('bills', []);        
        $sections = DB::table('sections')->get();
        return view('bills.index',[
                                'sections' => $sections,
                                ]);
        
    }

    public function addSectionToBill($section_id){
        $ids=session('bills');
        array_push($ids , $section_id);
        session()->put('bills', $ids);
        
        $sections = DB::table('sections')->whereNotIn('id', $ids)->get();
        return view('bills.index',[
                                'sections' => $sections,
                                ]);
    }

    public function createBill()
    {
        $ids=session('bills');
        $sections = DB::table('sections')->whereIn('id', $ids)->get();
        return view('bills.bill',[
                                'sections' => $sections,
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

        $ids=session('bills');
        $sections = DB::table('sections')->whereIn('id', $ids)->get();

        foreach($sections as $section){
            echo $request ["color$section->id"];
        }

/*        $section_id = $request ['section_id'];
		$subsection = SubSection::create ( [ 
                'section_id'=>$section_id,
				'num' => $request ['num'],
				'name' => $request ['name'],
				'quantity' => $request ['quantity']
		] );
		        
        session()->flash('message', 'تم أضافة الجزء بنجاح');
        session()->flash('type', 'success');

		return redirect ( "/subsection/index/$section_id" ); // got to add sub section
*/

//return view('section.create');
	}


}
