@extends('Layouts.app')
@section('content')
<div class="content m-5">
    <div class="row">
        <div class="col ">
            <h1 class="badge bg-primary fs-1"> Description</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div><br>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expenseReports/{{$id}}/expenses/ " method="POST">
                @csrf
                <div class="form-group">
                    <label class="" for="title">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{old('title')}}"><br>
                </div>
                <div class="form-group">
                    <label class="" for="title">Amount:</label>
                    <input type="text" class="form-control" id="Amount" name="Amount" placeholder="Type an Amount" value="{{old('title')}}"><br>
                </div>
            <a class="btn btn-secondary" href="/expenseReports/{{$id}}">Back</a>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
