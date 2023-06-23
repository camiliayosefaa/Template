@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">User Management</h3>
                        <h4>Jumlah User: </h4>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->

            {{-- Tabel user --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($result as $key=>$user )  --}}
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a class="name">Ini gek mncul nama user</span></a>
                                        </h2>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="email">Ini gek mncul email User</td>
                                    <td>
                                        <div>
                                            <a href="ini ke detail user atau employee profile"><button type="button" class="btn btn-success" id="btnShowUser" name="btnShowUser">Show</button></a>
                                            <a data-toggle="modal" data-target="#edit_user"><button type="button" class="btn btn-success" data-target="#edit_user" id="btnEditUser" name="btnEditUser">Edit</button></a>
                                        </div>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->


        <!-- Edit User Modal -->
        <div class="modal fade" id="edit_user" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="title">Edit User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Full Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Input a new name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Input a new email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Input a new password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">NIP</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="Input a new NIP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Secret</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="secret" name="secret" placeholder="Input your secret">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Phone</label>
                        <div class="col-md-10">
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Input a new phone number">
                        </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
              </div>
            </div>
        </div>
@endsection
