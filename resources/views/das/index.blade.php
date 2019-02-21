@extends('layouts.masteradmin')

@section('content')
<div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i>Informasi</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="#">Info</a></li>
            <li><i class="fa fa-laptop"></i>Informasi</li>
          </ol>
        </div>
      </div>
      <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                        <h4 class="m-t-0 header-title text-center" style = "padding: 10px 10px"><b>Daftar Informasi Sungai</b></h4>
                        <div class="text-right">
                                <div class="row">
                                    <div class="col-sm-12">
                                            <td><a class="btn btn-primary" href="" title="Bootstrap 3 themes generator"><span class="icon_lightbulb_alt"></span>  Tambah Informasi</a></td>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                              
                                            <table class="table table-striped table-advance table-hover">
                                              <tbody>
                                                <tr>
                                                  <th><i class="icon_profile"></i> Foto</th>
                                                  <th><i class="icon_pin_alt"></i>Informasi</th>
                                                  <th><i class="icon_calendar"></i>Tanggal</th>
                                                  <th><i class="icon_cogs"></i> Action</th>
                                                </tr>
                                              </tbody>
                                            </table>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</div>