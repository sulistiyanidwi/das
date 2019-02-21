@extends('layouts.masteradmin')

@section('content')
<div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0">Form Tambah Informasi</h4>
           
            {{-- {!! Form::open(['url' => route('kepalasekolah.store'), 'class'=>'form-horizontal']) !!}
    --}}
            @include('informasi.form')
  <div class="col-lg-offset-2 col-lg-10">
    <button class="btn btn-primary" type="submit">Simpan</button>
    <button class="btn btn-default" type="button">Batal</button>
  </div>
</div>
       
       {{-- {!! Form::close() !!} --}}
       
</div>
</div>

@endsection
