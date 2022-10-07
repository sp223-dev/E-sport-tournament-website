@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Create Product')
<div id="app">
  <div class="container mt-4">

    <h1 class="font-weight-bolder text-center">CREATE TOURNAMENT</h1>

    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
      <form class="bg-white border p-5 " method="POST"  action="{{route('tournament-insert')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" id="id" name="id">

        <div class="form-group">
            <label for="exampleInputEmail1">TITLE</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required>
          </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" required>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">PRIZEPOOL</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prizepool" required>
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">SEATS</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="seats" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">DATE</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date" required>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">PLACE</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="place" required>
          </div>

        <div class=" form-group float-right"> 
          <button type="submit" class="btn btn-primary">Add</button>
          <a type="button" class="btn btn-secondary" href="{{route('tournament-table')}}">Cancel</a>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection