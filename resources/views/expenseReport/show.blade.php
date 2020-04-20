@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Report: {{ $report->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3>Details</h3>
            <table class="table">
                <thead>
                    <tr>
                        <td>Description</td>
                        <td>Amount</td>
                        <td>Created At</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($report->expenses as $expense)
                        <tr>
                            <td>{{ $expense->description }}</td>
                            <td>{{ $expense->amount }}</td>
                            <td>{{ $expense->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">New Expense</a>
        </div>
    </div>
@endsection
