@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Create Team')
<div id="app">
  <div class="">
    <h1 class="font-weight-bolder text-center mt-3 mb-3">ADD TEAM</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="float-right mr-2">
          <a href="{{route('team-home')}}" class="btn btn-sm btn-danger mt-2">
            Close
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('team-store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
   
        <input type="hidden" id="editteam" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Country</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="country" required>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Founded</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="founded" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Ground</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ground" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">President</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="president" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Head Coach</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="head_coach" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Championship</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="championship" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Date</label>
          <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Time</label>
          <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="time" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" required>
        </div>

        <div class=" form-group "> 
          <button type="submit" class="btn btn-primary">Add</button>
          <button type="reset" class="btn btn-warning text-white" >Delete</button>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection