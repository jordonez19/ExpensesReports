@extends('Layouts.app')
@section('content')
<div class="content ">
    <div class="row">
        <div class="col ">
            <h1 class="badge bg-primary fs-1">Delete Report {{$report->title}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div><br>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expenseReports/{{$report->id}}" method="POST">
                @csrf
                @method('delete')
                <h3 class= "alert alert-danger">Do you want to delete {{$report->title}}?</h3>
                <a class="btn btn-secondary" href="/expenseReports/">Back</a>
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
