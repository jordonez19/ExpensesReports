@extends('Layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col ">
            <h1 class="badge bg-primary fs-1">New Expense {{$id}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expenseReports/{{$id}} ">Back</a>
        </div><br>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expenseReports/{{$id}}/expenses " method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{old('title')}}"><br>
                </div>
                <div class="form-group">
                    <label for="title">Amount:</label>
                    <input type="text" class="form-control" id="Amount" name="Amount" placeholder="Type an Amount" value="{{old('title')}}"><br>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
