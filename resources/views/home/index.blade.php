@extends('layouts.master')

@section('title', 'Dashboard')


@section('content')
   
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      {{-- Start Content Body --}}
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- Box 1 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
                  <p>ข่าวสารทั้งหมด</p>
                </div>
                <div class="icon">
                  <i class="fas fa-newspaper"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>                  
            </div>
            <!-- Box 2 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>50</h3>
                  <p>อีเว้นท์ทั้งหมด</p>
                </div>
                <div class="icon">
                  <i class="fas fa-calendar-week"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>                  
            </div>
            <!-- Box 3 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-ble">
                <div class="inner">
                  <h3>100</h3>
                  <p>ผู้ใช้งานในระบบ</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>                  
            </div>
            <!-- Box 4 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-navy">
                <div class="inner">
                  <h3>150</h3>
                  <p>ข้อมูลคดีทั้งหมด</p>
                </div>
                <div class="icon">
                  <i class="fas fa-list"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>                  
            </div>
          </div>
        </div>
      </section>
      {{-- End Content Body --}}


@endsection