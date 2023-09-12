@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">


    <div class="row profile-body">
      <!-- left wrapper start -->
      
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">
  
                                  <h6 class="card-title"> Add Agent Type </h6>

                                  <form method="POST" action="{{route('store.type')}}" class="forms-sample" enctype="multipart/form-data">
                                    @csrf
  
                                  {{-- <form class="forms-sample"> --}}
                                     

                                        <div class="mb-3">
                                            <label for="exampleInputname1" class="form-label">  Name </label>
                                            <input type="text" name="type_name" class="form-control @error ('type_name') is-invalid @enderror" >
                                            @error('type_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                          <label for="exampleInputname1" class="form-label"> Position </label>
                                          <input type="text" name="type_position" class="form-control @error ('type_position') is-invalid @enderror" >
                                          @error('type_position')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                      </div>
                                      
                                       <div class="mb-3">
                                          <label for="exampleInputname1" class="form-label"> Office </label>
                                          <input type="text" name="type_office" class="form-control @error ('type_office') is-invalid @enderror" >
                                          @error('type_office')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleInputname1" class="form-label"> Status </label>
                                        <input type="text" name="type_status" class="form-control @error ('type_status') is-invalid @enderror" >
                                        @error('type_status')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                      <label for="exampleInputname1" class="form-label"> Start Date </label>
                                      <input type="date" name="type_startdate" class="form-control @error ('type_startdate') is-invalid @enderror" >
                                      @error('type_startdate')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                  </div>

                                  <div class="mb-3">
                                    <label for="exampleInputname1" class="form-label">Salary</label>
                                    <input type="number" name="type_salary" class="form-control @error('type_salary') is-invalid @enderror">
                                    @error('type_salary')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                      <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                                     
                                  </form>
  
                </div>
              </div>
        
        </div>
      </div>
      <!-- middle wrapper end -->
      <!-- right wrapper start -->
     
      <!-- right wrapper end -->
    </div>

        </div>

    
@endsection