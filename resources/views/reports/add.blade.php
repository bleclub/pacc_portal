@extends('layouts.master')

@section('title', 'เพิ่มรางาน')

@push('css')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
   
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">เพิ่มรายงาน</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">หน้าหลัก</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('report.index') }}">รายงานคดี</a></li>
                <li class="breadcrumb-item active">เพิ่มรายงาน</li>
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
                        <h3 class="card-title">ฟอร์มเพิ่มรายงานคดี</h3>
                      </div>
                      <div class="card-body">
                    <form action="{{ route('report.store') }}" method="post" class="p-3 col-6">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="case_id" id="case_id" class="form-control" placeholder="เลขคดี" required>
                            </div>
                            <div class="form-group">
                               <input type="text" name="department" id="department" class="form-control" placeholder="สำนัก" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="staff_name" id="staff_name" class="form-control" placeholder="ผู้รับผิดชอบ" required>
                             </div>
                             <div class="form-group">
                                <input type="text" name="wanted_id" id="wanted_id" class="form-control" placeholder="หมายจับที่" required>
                             </div>
                             <div class="form-group">
                                <input type="text" name="court_name" id="court_name" class="form-control" placeholder="ศาล" required>
                             </div>
                             <div class="form-group">
                                <input type="text" name="accuse_id_card" id="accuse_id_card" class="form-control" placeholder="เลขบัตรประจำตัวผู้ต้องหา" required>
                             </div>
                             <div class="form-group">
                                <input type="text" name="accuse_name" id="accuse_name" class="form-control" placeholder="ชื่อผู้ต้องหา" required>
                             </div>
                             <div class="form-group">
                                <textarea name="allegation_detail" id="allegation_detail" cols="30" rows="10" placeholder="ข้อกล่าวหา" class="form-control" required></textarea>
                             </div>
                             <div class="form-group">
                                <input type="text" name="attorney_name" id="attorney_name" class="form-control" placeholder="สำนักงานอัยการ" required>
                             </div>
                             <div class="form-group">
                                <input type="text" name="expire_date" id="expire_date" class="form-control" placeholder="วันขาดอายุความ" required>
                             </div>
                             <div class="form-group">
                                <input type="text" name="announce_date" id="announce_date" class="form-control" placeholder="ประกาศสืบจับ" required>
                             </div>
                             <div class="form-group">
                                 <button class="btn btn-primary" type="submit">บันทึกแล้วนะ</button>
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
       uiLibrary: 'bootstrap4'
   });

   $('#announce_date').datepicker({
       uiLibrary: 'bootstrap4'
   });
</script>
@endpush