<div class="row">
    <div class="col">
        <h1>Expense Report {{ $report->id }}: {{$report->title}}</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <h2>Expenses</h2>

        <table class="table">
            <thead>
                <tr>
                    <td>Description</td>
                    <td>Amount</td>
                    <td>Creation</td>
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
