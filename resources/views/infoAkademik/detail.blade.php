@extends('layout.master')

@section('title', 'Detail Info')

@section('content')

<!-- Content Header (Page header) -->

<section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>{{$detail}}</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="/">Home</a></li>

              <li class="breadcrumb-item active">{{$detail}}</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->

    <section class="content">



      <!-- Default box -->

      <div class="card">

        <div class="card-header">
          <h5 class="card-titile"> {{$info->judul_info}} </h5>
        </div>

        <div class="card-body">
          <p>{{$info->isi_info}} </p>

          <button type="submit" class="btn btn-primary"> Edit</button>
          <button type="submit" class="btn btn-danger"> Delete</button>
          <a href="/info" class="card-link">Kembali</a>
        </div>

        <!-- /.card-body -->

        <div class="card-footer">

          Footer

        </div>

        <!-- /.card-footer-->

      </div>

      <!-- /.card -->



    </section>

    <!-- /.content -->



@endsection