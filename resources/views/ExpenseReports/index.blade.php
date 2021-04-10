@extends('Layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col">
            <h1 class="badge bg-primary fs-1"> All Reports </h1>
        </div>
    </div>
<br>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-light">
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        <td><a class="h3 text-decoration-none text-dark text-capitalize " href="/expenseReports/{{$expenseReport->id}}">{{$expenseReport->title}}</a></td>
                        <td>
                            <a class="btn btn-primary" href="/expenseReports/{{$expenseReport->id}}/edit">Edit</a>

                            <button class="btn btn-danger" onclick="ConfirmDelete({{$expenseReport->id}})" >Delete</button>
                        </td>
                        {{-- <a href="/expenseReports/{{$expenseReport->id}}/confirmDelete"></a> --}}
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

<script>

    function ConfirmDelete(id){

        let reportAnswer = confirm('Do you want to continue?');

        if(reportAnswer == true)
        {
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                headers: {
                    "_token": token
                },
                type: "get",
                url: "/expenseReports/"+id+"/del",

                success: function(data) {
                    if(data.message == 'success'){
                        alert("Delete completed");
                        window.location.href = "/expenseReports/";
                    }
                },
                error: function(error) {
                    console.log("error", error)
                }
            });
        }
    }


</script>


