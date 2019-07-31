<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Bills;
use App\Sub_bills;


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

        $bill = Bills::create (['customer_name' => $request ['customer_name']]);

        $bill_id = $bill->id;
        foreach($sections as $section){
            $color =  $request ["color$section->id"];
            $weight =  $request ["weight$section->id"];
            $price =  $request ["price$section->id"];
            $total_price =  $weight * $price ;

            Sub_bills::create (['color' => $color , 
                                'weight' =>$weight ,
                                'price'=>$price ,
                                'total_price'=>$total_price ,
                                'section_id'=>$section->id,
                                'bill_id'=>$bill->id
                                ]);
        }

	        
        
        return redirect ( "/bills/print/$bill_id" ); 
        
	}

    public function printBill($bill_id)
    {

        $bill = DB::table('bills')->where('id',$bill_id )->first();
        $sub_bills = DB::table('sub_bills')->where('sub_bills.bill_id',$bill_id )->
        join('sections', 'sections.id', '=', 'sub_bills.section_id')->get();

        $total_price = 0 ;
        foreach ( $sub_bills as $sub){
            $total_price = $total_price + $sub->total_price ;
        }
/*        DB::table('friends')->where('friends.user_id','1')
    ->join('votes', 'votes.user_id', '=', 'friends.friend_id');
*/
        return view('bills.bill_print',[
            'bill' => $bill,
            'sub_bills' => $sub_bills,
            'total'=>$total_price 
            ]);

    }

}
