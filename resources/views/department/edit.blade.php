@extends('layouts.master')

@section('title', 'แก้ไขจัดการหน่วยงาน')


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
              <h1 class="m-0">แก้ไขหน่วยงาน</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">แก้ไขหน่วยงาน</li>
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
                        <h3 class="card-title">ฟอร์มแก้ไขหน่วยงาน</h3>
                      </div>
                      <div class="card-body">
                    <form action="{{ route('department.update', $depm->id) }}" method="post" class="p-3 col-6">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group">
                                <input type="text" name="depm_id" id="depm_id" class="form-control" placeholder="เลขที่หน่วยงาน" required value="{{ $depm->depm_id }}">
                            </div>
                            <div class="form-group">
                               <input type="text" name="depm_name" id="depm_name" class="form-control" placeholder="ชื่อหน่วยงาน" required value="{{ $depm->depm_name }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="depm_shortname" id="depm_shortname" class="form-control" placeholder="ชื่อย่อหน่วยงาน" required value="{{ $depm->depm_shortname }}">
                             </div>
                             <div class="form-group">
                                 <button class="btn btn-primary" type="submit">แก้ไข</button>
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