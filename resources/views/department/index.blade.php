@extends('layouts.master')

@section('title', 'จัดการหน่วยงาน')


@section('content')
   
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
              <h1 class="m-0">จัดการหน่วยงาน</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">จัดการหน่วยงาน</li>
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
                        <h3 class="card-title">ฟอร์มเพิ่มหน่วยงาน</h3>
                      </div>
                      <div class="card-body">
                    <form action="{{ route('department.store') }}" method="post" class="p-3 col-6">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="depm_id" id="depm_id" class="form-control" placeholder="เลขที่หน่วยงาน" required>
                            </div>
                            <div class="form-group">
                               <input type="text" name="depm_name" id="depm_name" class="form-control" placeholder="ชื่อหน่วยงาน" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="depm_shortname" id="depm_shortname" class="form-control" placeholder="ชื่อย่อหน่วยงาน" required>
                             </div>
                             <div class="form-group">
                                 <button class="btn btn-primary" type="submit">บันทึก</button>
                             </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header text-right">
                        <h3 class="card-title">รายชื่อหน่วยงาน</h3>
                      </div>
                        <table class="table table-hover text-nowrap">
                            <thead>
                              <tr>
                                <th>ลำดับ</th>
                                <th>รหัสหน่วยงาน</th>
                                <th>ชื่อหน่อย</th>
                                <th>ชื่อย่อหน่วยงาน</th>
                                <th>การจัดการ</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($depms as $depm)
                                <tr>
                                    <td>{{ $depm->id }}</td>
                                    <td>{{ $depm->depm_id }}</td>
                                    <td>{{ $depm->depm_name}}</td>
                                    <td>{{ $depm->depm_shortname }}</td>
                                    <td>
                                        <a href="{{ route('department.edit', $depm->id) }}" class="btn btn-warning">
                                            แก้ไขข้อมูล
                                          </a>
              
                                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{ $depm->id }}">ลบข้อมูล</button>
                                          <!-- Modal -->
                                          <div class="modal fade" id="deleteModal_{{ $depm->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">ลบข้อมูลหน่วยงาน</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  คุณต้องการลบข้อมูลนี้ใช่หรือไม่ ?
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                  
                                                  <form action="{{ route('department.destroy', $depm->id) }}" method="post">
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
                      </>
                    </div>
                </div>
            </div>
        </div>
      </section>
      {{-- End Content Body --}}


@endsection