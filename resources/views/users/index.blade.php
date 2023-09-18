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
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Table Users</strong>
                </div>
            <div class="card-body">
            <a href="{{url('users/create')}}"><button type="button" class="btn-sm btn-success mb-2"> <i class="fa fa-plus"></i>  Tambah User</button></a>
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID User</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($result as $users)
                <tr>
                    <td scope="row">{{$no++}}</td>
                    <td>{{$users->nama}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->role}}</td>
                    <td>
                        <a href="{{url('users/edit/'.$users->id)}}"><button type="button" class="btn-sm btn-primary mb-1 ">
                        <i class="fa fa-edit"></i>
                        </button></a>

                        <button data-toggle="modal" data-target="#delete" type="button" class="btn-sm btn-danger mb-1">
                        <i class="fa fa-times-circle"></i>
                        </button>
                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticModalLabel">Konfirmasi Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                           Apakah Kamu yakin ingin menghapus data ini ?
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a href="{{url('users/delete/'.$users->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>

@endsection