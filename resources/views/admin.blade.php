<!-- Menghubungkan dengan view template master -->
@extends('admin_master')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('admin_konten')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="box">
            <div class="box-body">
              <h1 class="box-title">Halo! Selamat Datang! </h1>
            </div>
            <div class="box-body">
              <h1 class="box-title">Anda Telah Sukses Login Sebagai Admin</h1>
            </div>
          </div>
      
      <!-- /.row -->
      

        
              

      

    </section>
    <!-- /.content -->
  </div>
 
@endsection