<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expenseReport;
use App\Expense;
use App\Mail\SummaryReport;
use Mail;

class ExpenseReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ExpenseReports.index',['expenseReports'=>ExpenseReport::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ExpenseReports.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($validData);
        $validData = $request->validate(['title'=>'required|min:3']);
        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();

        //return $request->all();
        return redirect('/expenseReports');

    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('ExpenseReports.show',
        ['report' => $report, "id" => $id]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('ExpenseReports.edit',
                    ['report' => $report]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('put update');
        $report = ExpenseReport::findOrFail($id);
        $report->title= $request->get('title');
        $report->save();

        return redirect('/expenseReports');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function confirmSendEmail($id){
        $report = ExpenseReport::find($id);
        return view('ExpenseReports.confirmSendEmail',compact('report'));
    }

    public function SendEmail(Request $request, $id){
        $report = ExpenseReport::find($id);

        $send = Mail::to($request->post('email'))->send(new SummaryReport($report));

        return redirect('/expenseReports/'.$id);
    }





    public function destroy($id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();
    }

    public function deleteExpanseReportIndex($id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();
        return response()->json([
            "message" => "success"
        ]);
    }

    public function deleteExpanseReport($id)
    {
        $report = Expense::findOrFail($id);
        $report->delete();
        return response()->json([
            "message" => "success"
        ]);
    }
}




