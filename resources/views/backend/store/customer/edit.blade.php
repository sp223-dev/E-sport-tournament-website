@extends('backend.layout.main')
@section('content')
<div class="container-fluid">
  <h1 class="text-center">Tabel Create</h1>
  <div class="row">
        
    <div class="col col-lg-2 col-md-2"></div>
    <div class="col col-lg-8 col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Form Edit Customer
          </h3>
          <div class="card-tools">
            <a href="{{ route('customer-home') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  Nama
                </td>
                <td>
                  Amin
                </td>
              </tr>
              <tr>
                <td>
                  Email
                </td>
                <td>
                  amin@gmail.com
                </td>
              </tr>
              <tr>
                <td>
                  No Tlp
                </td>
                <td>
                  Alamat
                </td>
              </tr>
              <tr>
                <td>
                  Status
                </td>
                <td>
                  <form action="#" class="form-inline">
                    <div class="form-group mr-2">
                      <select name="status" id="status" class="form-control">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Non Aktif</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection