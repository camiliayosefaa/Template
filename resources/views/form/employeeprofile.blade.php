@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Detail User</h3>
                        <h4>Nama: </h4>
                        <h4>Organisasi: </h4>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="ke user_control">User Management</a></li>
                            <li class="breadcrumb-item active">Detail User</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Tabel Detail User --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Absensi</th>
                                    <th></th>
                                    <th></th>
                                    <th>Keterangan</th>
                                    <th></th>
                                    <th></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            21 Juni 2023
                                        </h2>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>Present</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#show_detail_absen" id="btnShowDetailAbsen" name="btnShowDetailAbsen">Show</button></a>
                                            <button type="button" class="btn btn-success">Delete</button></a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Show Detail Absen --}}
            <div class="modal fade" id="show_detail_absen" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Detail Absent</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table" style="overflow: hidden; width: 100%">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <img src="{{ URL::to('assets/img/logstaffTransparant.jpg') }}" width="100" height="100" alt="" style="clip-path: circle()">
                                        </th>
                                        <th>
                                            <img src="{{ URL::to('assets/img/logstaffTransparant.jpg') }}" width="100" height="100" alt="" style="clip-path: circle()">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Waktu</th>
                                        <td>11 Juni 2023, 08:00</td>
                                        <td>11 Juni 2023, 16:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Deskripsi</th>
                                        <td>Kerja rodi</td>
                                        <td>Kerja rodi</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Keterangan</th>
                                        <td>Telat</td>
                                        <td>Telat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Latitude</th>
                                        <td>123</td>
                                        <td>456</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Longitude</th>
                                        <td>123</td>
                                        <td>456</td>
                                    </tr>
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
