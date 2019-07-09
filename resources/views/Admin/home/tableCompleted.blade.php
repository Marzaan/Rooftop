@extends('layouts.BackEnd.master')

@section('title')
	Admin-TableCompleted
@endsection

@section('heading')
	Table Completed
@endsection

@section('mainContent')
<script>
  function confirmToDelete(){
    var var1 = confirm("Are you sure to delete this?");
    if(var1 == true){
      return true;
    }
    else{
      return false;
    }
  }
</script>
				<div class="card">
                                <table class="table table-bordred table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">Name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Phone</th>
                                          <th scope="col">Message</th>
                                          <th scope="col">Meal</th>
                                          <th scope="col">Table</th>
                                          <th scope="col">Date</th>
                                          <th scope="col">Time</th>
                                          <th scope="col">Action</th>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $i=0;
                                    ?>
                                    @if($req->count() > 0)
                                      @foreach($req as $req)
                                        @if($req->status=='Completed')
                                        <?php
                                          ++$i;
                                        ?>
                                        <tr>
                                            <td>{{ $req->contactName }}</td>
                                            <td>{{ $req->email }}</td>
                                            <td>{{ $req->phone }}</td>
                                            <td>{{ $req->message }}</td>
                                            <td>{{ $req->meal }}</td>
                                            <td>{{ $req->tableType }}</td>
                                            <td>{{ $req->date }}</td>
                                            <td>{{ $req->time }}</td>
                                            <td>
                                                <a href="{!! route('request.delete', ['id'=>$req->id]) !!}" class="btn btn-danger btn-sm" onclick="return confirmToDelete()">Delete</a>
                                            </td>
                                        </tr>
                                        @endif
                                      @endforeach
                                    @else
                                        <?php
                                          ++$i;
                                        ?>
                                          <tr>
                                            <th colspan="10" class="text-center">No request completed</th>
                                          </tr>
                                    @endif
                                    @if($i==0)
                                        <tr>
                                            <th colspan="10" class="text-center">No request completed</th>
                                          </tr>
                                    @endif
                                    </tbody>
                                </table>
                </div>
@endsection