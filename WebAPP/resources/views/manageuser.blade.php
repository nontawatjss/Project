@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">จัดการสมาชิก</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    You are logged in as Admintation
                  </div>
                  <br>

                  <table class="table table-hover table-bordered">
                   <thead align="center">
                   <th width="5">No.</th>
                   <th>ชื่อ</th>
                   <th>อีเมล์</th>
                   <th>สถานะ</th>
                   <th>วันที่สมัคร</th>

                   <th>ลบ</th>
                   </thead>

                   <tbody>
                     @foreach ($user as $key => $value)


                       <tr align="center">
                         <td>{{ $key+1 }}</td>
                         <td>{{ $value->name }}</td>
                         <td>{{ $value->email }}</td>
                         @if ( $value->admin == 1)
                           <td>ผู้ดูแลระบบ</td>
                          @else
                          <td>ผู้ใช้งาน</td>
                          @endif
                          <td>{{ $value->created_at }}</td>


                           <td><a href="/delete/user/{{ $value->id }}"><button type="button" class="btn btn-primary btn-sm">ลบ</button></a></td>
                       </tr>

                     @endforeach
                   </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
