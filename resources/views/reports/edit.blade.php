@extends('layouts.master')

@section('title', 'แก้ไขรางาน')

@push('css')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
   
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">แก้ไขรายงาน</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">หน้าหลัก</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('report.index') }}">รายงานคดี</a></li>
                <li class="breadcrumb-item active">แก้ไขรายงาน</li>
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
                        <h3 class="card-title">ฟอร์มแก้ไขรายงานคดี</h3>
                      </div>
                      <div class="card-body">


                    <form action="{{ route('report.update', $report->id) }}" method="post" class="p-3 col-6">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            
                            <div class="form-group">
                                <input type="text" name="case_id" id="case_id" class="form-control" placeholder="เลขคดี" required value="{{ $report->case_id }}">
                            </div>
                            <div class="form-group">
                               <input type="text" name="department" id="department" class="form-control" placeholder="สำนัก" required value="{{ $report->department }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="staff_name" id="staff_name" class="form-control" placeholder="ผู้รับผิดชอบ" required value="{{ $report->staff_name }}">
                             </div>
                             <div class="form-group">
                                <input type="text" name="wanted_id" id="wanted_id" class="form-control" placeholder="หมายจับที่" required value="{{ $report->wanted_id }}">
                             </div>
                             <div class="form-group">
                                <input type="text" name="court_name" id="court_name" class="form-control" placeholder="ศาล" required value="{{ $report->court_name }}">
                             </div>
                             <div class="form-group">
                                <input type="text" name="accuse_id_card" id="accuse_id_card" class="form-control" placeholder="เลขบัตรประจำตัวผู้ต้องหา" required value="{{ $report->accuse_id_card }}">
                             </div>
                             <div class="form-group">
                                <input type="text" name="accuse_name" id="accuse_name" class="form-control" placeholder="ชื่อผู้ต้องหา" required value="{{ $report->accuse_name }}">
                             </div>
                             <div class="form-group">
                                <textarea name="allegation_detail" id="allegation_detail" cols="30" rows="10" placeholder="ข้อกล่าวหา" class="form-control" required>{{ $report->allegation_detail }}</textarea>
                             </div>
                             <div class="form-group">
                                <input type="text" name="attorney_name" id="attorney_name" class="form-control" placeholder="สำนักงานอัยการ" required value="{{ $report->attorney_name }}">
                             </div>
                             <div class="form-group">
                                <input type="text" name="expire_date" id="expire_date" class="form-control" placeholder="วันขาดอายุความ" required value="{{ $report->expire_date }}">
                             </div>
                             <div class="form-group">
                                <input type="text" name="announce_date" id="announce_date" class="form-control" placeholder="ประกาศสืบจับ" required value="{{ $report->announce_date }}">
                             </div>
                             <div class="form-group">
                                 <button class="btn btn-primary" type="submit">บันทึก</button>
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

@push('js')
   <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   <script>
      $('#expire_date').datepicker({
         uiLibrary: 'bootstrap'
      });

      $('#announce_date').datepicker({
         uiLibrary: 'bootstrap'
      });
   </script>
@endpush