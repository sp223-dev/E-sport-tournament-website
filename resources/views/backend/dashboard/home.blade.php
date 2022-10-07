@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Dashboard')
<div id="app">
  <div class="">
    
    <section class="content">

      <div class="container-fluid text-center">
        <img src="../images/logo/logo-about.png" alt="logo-dashboard" style="height: 250px;">
        <h1 class="py-3 font-weight-bold">Dashboard <span class="badge badge-danger">Admin</span></h1>

        <div class="row">
          <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{DB::table('tbl_orders')->count()}}</h3>
                <p>Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('order-table')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{DB::table('tbl_players')->count()}}</h3>
                <p>Player</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
              <a href="{{route('player-home')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{DB::table('tbl_myteams')->count()}}</h3>
                <p>Team</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-people"></i>
              </div>
              <a href="{{route('team-home')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{DB::table('tbl_news')->count()}}</h3>
                <p>News</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="{{route('news-home')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>
        {{-- <div class="row">

          <section class="col connectedSortable ui-sortable">
            <div class="container">
              <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Area Chart</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
                </div>
                </div>
                <div class="card-body">
                <div class="chart">
                <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                </div>
                
                </div>
            </div>
        
          </section>
          
  </div> --}}

      </div>
  

</div>
@push('script')

<script>
  var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
  let player = {{ $player }}
  let user = {{ $user }}
  let team = {{ $team }}
  let order = {{ $order }}
  var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [user,player]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [order,team]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })


</script>
@endpush



<!-- 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>

<script>
  $('#tes').click(() =>{
    console.log('tes');
  })

  var appComponent = new Vue({
        el: "#app",
        data: {
            team: []
        },
        mounted(){
            $.ajax({
                url: "/api/homepage",
                success: function(rsp){
                    appComponent.team = rsp;
                    // console.log(this.products);
                }
            });
        },
        methods: {

            hapus(id) {
              var team = this.team;
              $.ajax({
                url: '/api/delete/'+id,
                type: 'get',
                dataType: 'json',
                success: function(rsp){
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Yakin Hapus? !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result)=> {
                      if(result.isConfirmed){
                        Swal.fire(
                          'deleted',
                          'success'
                      )
                      team.map((arr, index) => {
                      if(arr.id == id) {
                        team.splice(index, 1);
                      }
                    })
                    }
                  })
                }

              });
            },


            Edit(id){
              console.log(id);
              $.ajax({
                url: '/api/show/'+id,
                type: 'get',
                dataType: 'json',
                success: function(rsp){
                  console.log(rsp);
                  $('#editteam').val(rsp.id);
                  $('#updateTeamTitle').val(rsp.title);
                  $('#updateTeamImage').val(rsp.image);

                }
              });

            }
        }
    });

    $("#form-insert").on('submit',function(e) {
      e.preventDefault();
      var file_data = $('#inputTeamImage').prop('files')[0];
      var title = $('#inputTeamTitle').val();
      var formData = new FormData();
      formData.append('image', file_data);
      formData.append('title', title)
      
      // var data = $(this).serialize();
      // var img = $("#gambar").val();
      // console.log(formData);
      $.ajax({
            url: '/api/insertTeams',
            type: 'post',
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function(rsp){
              console.log(rsp);
              if(rsp != null){
              Swal.fire({
                title: 'Are you sure?',
                text: "Yakin mau nambah? !",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, success it!'
              })
              
              appComponent.team.push(rsp.data);
              $('#Tambah').modal('hide');
              $('#form-insert')[0].reset();
            }
            }
        })

 

    });
    $("#form-edit").on('submit',function(e) {
      e.preventDefault();
        var id = $('#editteam').val(); 
        var file_data = $('#updateTeamImage').prop('files')[0];
        var title = $('#updateTeamTitle').val();  
        var formData = new FormData();

        formData.append('id', id);
        formData.append('image', file_data);
        formData.append('title', title);
        // var team = appComponent.team;
        // var data = $(this).serialize();
        $.ajax({
                url: '/api/update/'+id,
                type: 'post',
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(rsp){
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Yakin Edit? !",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, update it!'
                  })
                  const arr = appComponent.team;
                  const newTeam = rsp.data;
                  arr.map(teams => {
                    if(teams.id == newTeam.id) {
                      teams.id = newTeam.id,
                      teams.title = newTeam.title,
                      teams.image = newTeam.image
                    }
                  })
                  $('#Edit').modal('hide');

                }
              });
              
        // $.ajax({
        //         url: '/api/insertTeams',
        //         type: 'get',
        //         dataType: 'application/json',
        //         data: data,
        //         success: function(rsp) {
        //           $("#close").trigger('click');
        //             if(rsp.status == 200){
                      
        //                 appComponent.products.push(rsp.data);
                        
        //             }
        //            console.log(rsp);
                 
        //         }
        // });

    });
    

</script> -->




@endsection