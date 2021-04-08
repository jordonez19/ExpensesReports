@extends('Layouts.app')
@section('content')
<div class="content ">
    <div class="row">
        <div class="col ">
            <h1 class="badge bg-primary fs-1">Report: {{$report->title}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div><br>
    </div>
    <div class="row">
        <div class="col">
            <h2>Details:</h2>
            <table class="table">
                @foreach ($report->expenses as $expense)
                    <tr>
                        <td><li> {{$expense->description}} </li></td>
                        <td><li> {{$expense->created_at}} </li></td>
                        <td><li> {{$expense->amount}} </li></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary"  href="/expenseReports/{{$report->id}}/expenses/create ">New Expense</a>
            <a class="btn btn-secondary" href="/expenseReports/">Back</a>
            <a class="btn btn-primary" href="/expenseReports/{{$report->id}}/confirmSendEmail">Send Email</a>

        </div>
    </div>
</div>
@endsection
