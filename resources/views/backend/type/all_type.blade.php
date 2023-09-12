@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <a href="{{route('add.type')}} "  class="btn btn-inverse-info">Add Agent Type </a>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Agent Data Table</h6>
         
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>status</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
                
              </thead>
              <tbody>
                @foreach($types as $key => $item)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$item->type_name}}</td>
                  <td>{{$item->type_position}}</td>
                  <td>{{$item->type_office}}</td>
                  <td>
                    <a href=""class="btn btn-inverse-warning">Edit </a>
                    <a href=""class="btn btn-inverse-danger">Delete</a>
                  <td>{{$item->type_salary}}</td>     
                </tr>
                @endforeach  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endsection