@extends('backend.layout.main')
@section('content')
<div class="container-fluid">
  <h1 class="text-center">Tabel Customer</h1>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Customer
          </h3>
        </div>
        <div class="card-body">

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Tlp</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Amin</td>
                  <td>amin@gmail.com</td>
                  <td>085852527575</td>
                  <td>
                    Jln. Jend Sudirman no.1, Kudus
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer-edit') }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Budi</td>
                  <td>budi@gmail.com</td>
                  <td>085852527576</td>
                  <td>
                    Jln. Jend Sudirman no.2, Kudus
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer-edit') }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Iwan</td>
                  <td>iwan@gmail.com</td>
                  <td>085852527577</td>
                  <td>
                    Jln. Jend Sudirman no.3, Kudus
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer-edit') }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection