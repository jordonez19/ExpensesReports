<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\expenseReport;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $report = Expense::where('id', $id)->first();
        return view('Expense.create',[ 'id'=>$id ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $validData = $request->validate(
            ['description'=>'required|string|max:255',
            'Amount'=>'required|numeric|min:50']
        );

        $expense= new Expense();
        $expense->description = $request->post('description');
        $expense->amount = $request->post('Amount');
        $expense->expense_report_id = $id;
        $expense->save();

        return redirect('/expenseReports/'.$id);
    }

    public function editDetails(Request $request, $id){

        return view('Expense.edit');
        
        $expense = Expense::findOrFail($id);
        $expense->description = $request->post('description');
        $expense->amount = $request->post('Amount');
        $expense->expense_report_id = $id;
        $expense->save();
        return redirect('/expenseReports/'.$id);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //
    }


}












