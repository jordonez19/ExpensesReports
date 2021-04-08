@extends('Layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col">
            <h1 class="badge bg-primary fs-1"> Reports </h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        <td><a href="/expenseReports/{{$expenseReport->id}}">{{$expenseReport->title}}</a></td>
                        <td><a href="/expenseReports/{{$expenseReport->id}}/edit">Edit</a></td>
                        <td><a href="/expenseReports/{{$expenseReport->id}}/confirmDelete">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary " href="/expenseReports/create">Create</a>
        </div>
    </div>
</div>

@endsection




