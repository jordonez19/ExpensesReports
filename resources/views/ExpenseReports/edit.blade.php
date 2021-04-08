@extends('Layouts.app')
@section('content')
<div class="content ">
    <div class="row">
        <div class="col ">
            <h1 class="badge bg-primary fs-1" >Edit Report {{$report->title}} </h1>
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
                @method('put')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
                </div><br>
                <a class="btn btn-secondary" href="/expenseReports/">Back</a>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
