@extends('main')
@section('name') Users @endsection
@section('konten')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Users</h1>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
<div class="row">
    <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <strong class="card-title">Edit User</strong>
          </div>
                <div class="card-body">
                    <form action="{{url('users/update/'.$users->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label mb-1">Nama</label>
                            <input name="nama" class="form-control" placeholder="Masukkan Nama" value="{{$users->nama}}">
                        </div>
                        <div class="form-group has-success">
                            <label class="control-label mb-1">Email</label>
                            <input name="email" class="form-control" placeholder="Masukkan Email" value="{{$users->email}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Password</label>
                            <input name="password" type="password" class="form-control">
                            <span style="color: red">Kosongkan jika tidak ingin merubah password</span>
                        </div>
                                <div class="form-group">
                                    <label class="form mb-1">Role</label>
                                    <select name="role" class="form-control">
                                        <option disabled selected>Pilih Role</option>
                                        <option value="guru" {{$users->role == 'guru' ? 'selected' : ''}}>Guru</option>
                                        <option value="admin" {{$users->role == 'admin' ? 'selected' : ''}}>Admin</option>
                                    </select>
                                </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                              </button>
                              <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                              </button>
                              <a href="{{url('users')}}"><button style="color: white" type="button" class="btn btn-warning btn-sm">
                                <i class="fa fa-arrow-circle-o-left"></i> Kembali
                            </button></a>
                        </div>
                    </form>
                </div>
            </div>
@endsection