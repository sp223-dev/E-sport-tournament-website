@extends('backend.layout.main')

@section('content')

<div id="app">

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <h1 class="py-3 font-weight-bold ml-2">COACH TABLE</h1>
        <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">
      </div>
     <div class="row">   
      <div class=""></div>   
        <div class="col bg-white">
          <a type="button" class="btn btn-dark m-3 shadow-sm" href="{{route('coach-create')}}">
            <h6 class="text-white font-weight-bold">+ Add Coach</h6>
          </a>
          <table class="table text-center" id="myTable">
            <thead class="table-dark">
              <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Team</th>
                <th scope="col">Image</th>
                <th scope="col">Coach Name</th>
                <th scope="col">Nasionality</th>
                <th scope="col">Position</th>
                <th scope="col">Age</th>
                <th scope="col">Seasons</th>
                <th scope="col">About</th>
                <th scope="col">ID</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
  
              @foreach($coaches as $coach)
  
              <tr>
                <th scope="row">{{ $loop->index + 1}}</th>
                <th scope="row">{{ $coach->myteam->nama}}</th>
                <td>
                  @if(!empty($coach->image))
                  <img src="{{asset('image/coach/'.$coach->image)}}" alt="" style="width:60px;" class="img-thumbnail">
                  @endif
                </td>
                <td>{{$coach->nama}}</td>
                <td>{{$coach->kebangsaan}}</td>
                <td>{{$coach->posisi}}</td>
                <td>{{$coach->umur}}</td>
                <td>{{$coach->seasons}}</td>
                <td>
                  <div style="width: 10rem; overflow: hidden;">{{$coach->about}}</div>
                </td>
                <td>{{$coach->team_id}}</td>
                <td>
                  <a type="button" class="btn btn-warning shadow-sm"
                    href="{{ route('coach-edit', ['id'=> $coach->id] )}}">Edit</a>
                  <a href="{{route('coach-destroy', ['id' => $coach->id])}}" class="btn btn-danger shadow-sm">Delete</a>
  
  
                  @endforeach
  
            </tbody>
          </table>
        </div>
        </div>
    </div>
</div>
  
  
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script>
    $(".delete").click(function () {
      var idPlayer = $(this).attr('data-id');
      var dataPlayer = $(this).attr('data-nama');
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
  
      //       swal({
      //   title: "Are you sure?",
      //   text: "Once deleted, you will not be able to recover this imaginary file!",
      //   icon: "warning",
      //   buttons: true,
      //   dangerMode: true,
      // })
      // .then((willDelete) => {
      //   if (willDelete) {
      //     window.location = "/player-delete/"+idPlayer+""
      //     swal("Poof! Your imaginary file has been deleted!", {
      //       icon: "success",
      //     });
      //   } else {
      //     swal("Your imaginary file is safe!");
      //   }
      // });
    })
  </script>
  
  <script src="https://code.jquery.com/jquery-3.0.0.slim.js"
    integrity="sha256-Gp6hp0H+A7axg1tErCucWeOc38irtkVWpUbBZSj8KCg=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{asset('adminlte/plugins/js/dataTables.min.js ')}}"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
    });
  </script>
  </section>
  

@endsection
