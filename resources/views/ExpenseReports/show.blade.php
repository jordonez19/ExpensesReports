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
            <h1>Details:</h1>
            <table class="table">
                @foreach ($report->expenses as $expense)
                    <tr>
                        <td><li class=" h4 text-capitalize" > {{$expense->description}} </li></td>
                        <td><li class="h4" > {{$expense->created_at}} </li></td>
                        <td><li class="h4" > ${{$expense->amount}} </li></td>
                        <td>
                            <a href="/expenseReports/{{$id}}/expenses/editDetails/{{$expense->id}}"><button class="btn btn-primary"> Edit </button></a>
                            <button class="btn btn-danger" onclick="handleConfirmDelete({{$expense->id}})"> Delete </button>
                        </td>
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

<script>

    function handleConfirmDelete(id)
    {
        let answer = confirm('Do you want to continue?');

        if(answer == true)
        {
            var token = $("meta[name='csrf-token']").attr("content")

            $.ajax({
                headers: {
                    "_token": token
                },
                type: "get",
                url: "/expenseReports/"+id+"/delete",

                success: function(data) {
                    if(data.message == 'success'){
                        alert("Delete completed");
                        window.location.href = "/expenseReports/"+{{$id}};
                    }
                },

                error: function(error) {
                    console.log("error", error)
                }
            });
        }

    }
</script>


