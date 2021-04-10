@extends('Layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col ">
            <h1 class="badge bg-primary fs-1">New Report </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <form action="/expenseReports/" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Type a title " value="{{old('title')}}"><br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li> {{$error}} </li>
                            @endforeach
                        </div>
                    @endif
                    </div>
                        <a class="btn btn-secondary" href="/expenseReports/">Back</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
