@extends('Layouts.app')
@section('content')
<div class="content ">
    <div class="row">
        <div class="col ">
            <h1 class="badge bg-primary fs-1" >Send Report </h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/expenseReports/{{$report->id}}/sendEmail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" email="Type email email " value="{{old('email')}}"><br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}} </li>

                        @endforeach
                    </div>
                @endif
            </div>
            <a class="btn btn-secondary" href="/expenseReports/">Back</a>
                <button class="btn btn-primary" type="submit">Send Mail</button>
            </form>
        </div>
    </div>
</div>
@endsection
