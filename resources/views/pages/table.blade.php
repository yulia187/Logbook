@extends('layouts.app', ['activePage' => 'table', 'title' => 'PLKK', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Striped Table with Hover</h4>
                            <p class="card-category">Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                            <thead>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>NO KTP</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>TANGGAL MULAI BEKERJA</th>
                                    <th>TANGGAL BERHENTI BEKERJA</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>UMUR</th>
                                    <th>LOKASI PENEMPATAN</th>
                                    <th>DEPARTEMEN</th>
                                    <th>JABATAN</th>
                                    <th>NAMA PERUSAHAAN</th>
                                    <th>NO NPWP</th>
                                    <th>STATUS PERNIKAHAN</th>
                                    <th>STATUS KARYAWAN</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>@</td>
                                        <td>JDKWJKJWDKJ</td>
                                        <td>dkdkdkd</td>
                                        <td>dhdsjks</td>
                                        <td>jskkk</td>
                                        <td>JDKWJKJWDKJ</td>
                                        <td>dkdkdkd</td>
                                        <td>dhdsjks</td>
                                        <td>jskkk</td>
                                        <td>JDKWJKJWDKJ</td>
                                        <td>dkdkdkd</td>
                                        <td>dhdsjks</td>
                                        <td>jskkk</td>
                                        <td>jskkk</td>
                                        <td>jskkk</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection