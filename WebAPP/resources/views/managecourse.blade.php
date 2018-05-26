@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">เพิ่มคอร์สเรียน</div>

                <div class="card-body">

                    <div>
                    <form method="POST" action="{{ url('/insertcourse') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="sel" class="col-md-4 col-form-label text-md-right">{{ __('หมวดหมู่') }}</label>
                             <div class="col-md-4">
                                <select class="form-control" name="Group">
                                  <option>คณิตศาสตร์</option>
                                 <option>ภาษาไทย</option>
                                 <option>วิทยาศาสตร์</option>
                                 <option>อังกฤษ</option>
                                 <option>สังคมศึกษา</option>
                                 <option>ความรู้ทั่วไป</option>
                                 </select>
                             </div>
                            </div>


                        <div class="form-group row">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อคอร์ส') }}</label>
                            <div class="col-md-4">
                                <input type="text"  class="form-control" name="Name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="TName" class="col-md-4 col-form-label text-md-right">{{ __('อาจารย์ผู้สอน') }}</label>
                            <div class="col-md-4">
                                <input type="text"  class="form-control" name="TName" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="LTime" class="col-md-4 col-form-label text-md-right">{{ __('วัน/เวลาเรียน') }}</label>
                            <div class="col-md-4">
                                <input type="text"  class="form-control" name="LTime" required>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="Time" class="col-md-4 col-form-label text-md-right">{{ __('ระยะเวลาเรียน') }}</label>
                            <div class="col-md-3">
                                <input type="date"  class="form-control" name="DStart" required>
                            </div>
                              <label for="Time" class="col-md-0 col-form-label">ถึง</label>
                            <div class="col-md-3">
                                <input type="date"  class="form-control" name="DStop" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Price" class="col-md-4 col-form-label text-md-right">{{ __('ราคา (ต่อคอร์ส)') }}</label>
                            <div class="col-md-2">
                                <input type="Price" class="form-control{{ $errors->has('Price') ? ' is-invalid' : '' }}" name="Price" required>
                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('เพิ่มคอร์สเรียน') }}
                                </button>


                            </div>

                        </div>
                    </form>
                  </div>


                </div>


            



            </div>
        </div>

    </div>

 <br>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">จัดการคอร์สเรียน</div>

                <div class="card-body">

                    <div>
                <form method="POST" action="{{ url('/readcourse') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="sel" class="col-md-4 col-form-label text-md-right">{{ __('เลือกหมวดหมู่') }}</label>
                         <div class="col-md-4">
                            <select class="form-control" name="Selgroup">
                              <option> - </option>
                              <option>คณิตศาสตร์</option>
                             <option>ภาษาไทย</option>
                             <option>วิทยาศาสตร์</option>
                             <option>อังกฤษ</option>
                             <option>สังคมศึกษา</option>
                             <option>ความรู้ทั่วไป</option>
                             </select>
                         </div>
                         <div class="col-md-0">
                             <button type="submit" class="btn btn-primary">
                                 {{ __('ค้นหา') }}
                             </button>
                         </div>
                        </div>
                      </form>

                      <br>
                <div>
                  <main class="py-4">
                      @yield('bbs')
                  </main>
                  </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
