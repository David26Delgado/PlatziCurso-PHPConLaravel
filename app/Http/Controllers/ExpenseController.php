<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseReport;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param ExpenseReport $expenseReport
     * @return Response
     */
    public function create($id)
    {
        $expenseReport = ExpenseReport::findOrFail($id);
        return view('expense.create', [
            'report' => $expenseReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param ExpenseReport $expenseReport
     * @return void
     */
    public function store(Request $request, $id)
    {
        $validData = $request->validate([
            'description' => 'required | min:4',
            'amount' => 'required | numeric | between: 0.00, 50000.00'
        ]);

        $expenseReport = ExpenseReport::findOrFail($id);
        $expense = new Expense();
        $expense->description = $validData['description'];
        $expense->amount = $validData['amount'];
        $expense->expense_report_id = $expenseReport->id;
        $expense->save();

        return redirect('/expense_reports/' . $expenseReport->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
