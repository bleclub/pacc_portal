@extends('layouts.master')

@section('title', 'ผู้ใช้งานระบบ')


@section('content')
   
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">ระบบผู้ใช้งาน</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">ผู้ใช้งานระบบ</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      {{-- Start Content Body --}}
      <section class="content">
        <div class="container-fluid">

            <!-- Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header text-right">
                        <h3 class="card-title">ผู้ใช้งานระบบ</h3>
                        <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> เพิ่มผู้ใช้งาน</a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>ชื่อผู้ใช้งาน</th>
                                <th>อีเมล์ผู้ใช้งาน</th>
                                <th>แผนก</th>
                                <th>ประเภทผู้ใช้งาน</th>
                                <th>การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- @foreach ($reports as $report) --}}
                                    
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-warning">แก้ไขข้อมูล</a>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_">ลบข้อมูล</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ลบข้อมูลหมายเลขคดี</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    คุณต้องการลบข้อมูลนี้ใช่หรือไม่ ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                    
                                                    <form action="#" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
                                                    </form>
                                                    
                                                </div>
                                                </div>
                                            </div>
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
        </div>
      </section>
      {{-- End Content Body --}}


@endsection