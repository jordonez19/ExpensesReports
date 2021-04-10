@extends('Layouts.app')
@section('content')
<div class="content m-5">
    <div class="row">
        <div class="col ">
            <h1 class="badge bg-primary fs-1"> New Description </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div><br>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{-- /expenseReports/{{$id}}/expenses/editDetails/{{$report->id}} --}}" method="POST">
                @csrf
                @method('GET')
                <div class="form-group">
                    <label class="h3" for="title">Description:</label>
                    <input  type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{$report->description}}"><br>
                </div>
                <div class="form-group">
                    <label class="h3" for="title">Amount:</label>
                    <input  type="text" class="form-control" id="Amount" name="Amount" placeholder="Type an Amount" value="{{$report->amount}}"><br>
                </div>
{{--
                <div class="content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li> {{$error}} </li>
                            @endforeach
                        </div>
                    @endif
                </div> --}}

            <a class="btn btn-secondary" href="/expenseReports/ ">Back</a>
            <button class="btn btn-primary" type="submit">Submit</button>

            </form>
        </div>
    </div>
</div>

@endsection
