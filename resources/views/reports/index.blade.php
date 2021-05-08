@extends('layouts.master')

@section('title', 'รายงานหมายจับ')

 @section('content')

<?php 
  // if($_SESSION['']){
  //   echo ''
  // }
?>

 @if (Session::has('success'))
    <div class="row">
      <div class="col-12">
          <div class="alert alert-success">
              {{ Session::get('success') }}
          </div>
      </div>
    </div>
@elseif(Session::has('delete'))
    <div class="row">
      <div class="col-12">
          <div class="alert alert-danger">
              {{ Session::get('delete') }}
          </div>
      </div>
    </div>
 @endif

 
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">รายงานติดตามหมายจับ</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">รายงานติดตามหมายจับ</li>
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
              <h3 class="card-title">รายงานหมายจับ</h3>
              <a href="{{ route('report.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> เพิ่มรายงาน</a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>เลขที่คดี</th>
                      <th>ชื่อคดี</th>
                      <th>ผู้รับผิดชอบ</th>
                      <th>สำนัก</th>
                      <th>การจัดการ</th>
                    </tr>
                  </thead>
                  <tbody>

                  
                    @foreach ($reports as $report)
                        
                    <tr>
                        <td>{{ $report->case_id }}</td>
                        <td>{{ $report->accuse_name }}</td>
                        <td>{{ $report->staff_name }}</td>
                        <td>{{ $report->department }}</td>
                        <td>
                            <a href="{{ route('report.edit', [$report->id, $report->case_id]) }}" class="btn btn-warning">
                              แก้ไขข้อมูล
                            </a>

                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{ $report->id }}">ลบข้อมูล</button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal_{{ $report->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ลบข้อมูลหมายเลขคดี {{ $report->case_id }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    คุณต้องการลบข้อมูลนี้ใช่หรือไม่ ?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    
                                    <form action="{{ route('report.destroy', $report->id) }}" method="post">
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

                    @endforeach

                    
                      
                    
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