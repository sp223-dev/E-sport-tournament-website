@extends('backend.layout.main')
@section('content')
<div class="container mt-4">
  <h1 class="font-weight-bolder text-center">Create Kategori</h1>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-9">
      <div class="row">
        
        <div class="col col-lg-8 col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Kategori</h3>
              <div class="card-tools">
                <a href="{{ route('kategori-home') }}" class="btn btn-sm btn-danger">
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
              <form action="{{route('kategori-insert')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="kode_kategori">Kode Kategori</label>
                  <input type="text" name="kode_kategori" id="kode_kategori" class="form-control">
                </div>
                <div class="form-group">
                  <label for="nama_kategori">Nama Kategori</label>
                  <input type="text" name="nama_kategori" id="nama_kategori" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slug_kategori">Slug Kategori</label>
                  <input type="text" name="slug_kategori" id="slug_kategori" class="form-control">
                </div>
                <div class="form-group">
                  <label for="deskripsi_kategori">Deskripsi</label>
                  <textarea name="deskripsi_kategori" id="deskripsi_kategori" cols="30" rows="5" class="form-control"></textarea>
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
    @endsection