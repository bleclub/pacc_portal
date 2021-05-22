@extends('layouts.master')

@section('title', 'เพิ่มผู้ใช้งานระบบ')


@section('content')
   
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">เพิ่มผู้ใช้งานระบบ</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">เพิ่มผู้ใช้งานระบบ</li>
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
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">เพิ่มผู้ใช้งานระบบ</h3>
                      </div>
                      <div class="card-body">
                            <form action="{{ route('user.store') }}" method="post" class="col-6 p-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="ชื่อผู้ใช้งาน" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="อีเมล์ผู้ใช้งาน" required>
                                </div>

                                <div class="form-group">
                                    <select name="depm_id" class="form-control" required>
                                        <option value="">กรุณาเลือกแผนก</option>
                                        @foreach ($depm as $rs_depm)
                                            <option value="{{ $rs_depm->depm_id }}">{{ $rs_depm->depm_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="user_type" class="form-control" required>
                                        <option value="">กรุณาเลือกประเภทผู้ใช้งาน</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                        <option value="superadmin">Superadmin</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">บันทึก</button>
                                    <button class="btn btn-secondary" type="reset">ล้างข้อมูล</button>
                                </div>
                               
                            </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      {{-- End Content Body --}}


@endsection