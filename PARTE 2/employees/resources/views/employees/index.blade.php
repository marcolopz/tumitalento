@extends('employees.layout')
@section('content')

<div class="container">
    <table id="table-employee" class="table table-hover">
        <thead>
            <td>Name</td>
            <td>Email</td>
            <td>Position</td>
            <td>Salary</td>
            <td>Actions</td>
        </thead>
    </table>
  </div>
  <script>
   $(document).ready(function(){
       var tableEmployee = $("#table-employee").DataTable({
           processing: true,
           serverSide: true,
           ajax: {
               url: "{{ route('employees.index') }}",
           },
           columns: [
               { data: 'name'},
               { data: 'email'},
               { data: 'position'},
               { data: 'salary'},
               { data: 'actions', orderable: false}
           ]
       });
   })
  </script>

@endsection