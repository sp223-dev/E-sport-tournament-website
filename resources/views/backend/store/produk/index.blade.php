@extends('backend.layout.main')

@section('content')
<div id="app">
  <div class="container-fluid  ml-3" >
  <h1 class="text-center">Tabel Product</h1>
     <!-- table produk -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk</h4>
          <div class="card-tools">
            <a href="{{ route('produk-create') }}" class="btn btn-sm btn-primary">
              Baru
            </a>
          </div>
        </div>
        <div class="card-body">

        <div class="card-body">
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px">No</th>
                  <th>Gambar</th>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($itemproduk as $produk)
                <tr>
                  <td>
                  {{ ++$no }}
                  </td>
                  <td>
                    @if($produk->foto != null)
                    <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" width='150px' class="img-thumbnail">
                    @endif
                  </td>
                  {{-- <td>
                    <img src="{{ asset('images/slide1.jpg') }}" alt="produk 1" width='150px'>
                    <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div> --}}
                  </td>
                  <td>
                  {{ $produk->kode_produk }}
                  </td>
                  <td>
                  {{ $produk->nama_produk }}
                  </td>
                  <td>
                  {{ $produk->qty }} {{ $produk->satuan }}
                  </td>
                  <td>
                  {{ number_format($produk->harga, 2) }}
                  </td>
                  <td>
                  {{ $produk->status }}
                  </td>
                  <td>
                    <a href="{{ route('produk-show',  ['id' => $produk->id]) }}" class="btn btn-sm btn-success mr-2 mb-2">
                      Detail
                    </a>
                    <a href="{{ route('produk-edit', ['id' => $produk->id]) }}" class="btn btn-sm btn-warning mr-2 mb-2">
                      Edit
                    </a>
                    <form action="{{ route('produk-destroy', ['id' => $produk->id]) }}" method="post" style="display:inline;">
                      {{csrf_field()}}
                      {{-- {{ method_field('delete') }} --}}
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>                    
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $itemproduk->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>
<script>
</script>
   <!-- //modal -->
<script src="https://code.jquery.com/jquery-3.0.0.slim.js" integrity="sha256-Gp6hp0H+A7axg1tErCucWeOc38irtkVWpUbBZSj8KCg=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('adminlte/plugins/js/dataTables.min.js ')}}"></script>
<script >
  $(document).ready( function () {
    $('#myTable').DataTable();
} );

    
</script>

@endsection