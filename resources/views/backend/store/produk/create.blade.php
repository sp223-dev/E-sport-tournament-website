@extends('backend.layout.main')

@section('content')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">Create Product</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Form Produk</h3>
            <div class="card-tools">
              <a href="{{ route('produk-home') }}" class="btn btn-sm btn-danger">
                Tutup
              </a>
            </div>
          </div>
          <div class="card-body">
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-warning">{{ $error }}</div>
            @endforeach
            @endif
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
            <form action="{{ route('produk-insert') }}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="form-group">
                <label for="kategori_id">Kategori Produk</label>
                <select name="id_kategori" id="id_kategori" class="form-control">
                  <option value="">Pilih Kategori</option>
                  @foreach($itemkategori as $kategori)
                  <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control">
              </div>
              <div class="form-group">
                <label for="slug_produk">Slug Produk</label>
                <input type="text" name="slug_produk" id="slug_produk" class="form-control">
              </div>
              <div class="form-group">
                <label for="deskripsi_produk">Deskripsi</label>
                <textarea name="deskripsi_produk" id="deskripsi_produk" cols="30" rows="5" class="form-control"></textarea>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="text" name="qty" id="qty" class="form-control">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" name="satuan" id="satuan" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
              </div>
            </form>
          </div>
        </div>
   
      </div>
    </div>
  </div>

  
</div>


@endsection