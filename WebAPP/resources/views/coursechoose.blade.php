@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">คอร์สที่เปิดสอน</div>

                <div class="card-body">

                    <div>

                      <table class="table table-hover">
                       <thead align="center">
                       
                       <th>ชื่อคอร์ส</th>

                       <th>วัน/เวลาเรียน</th>

                       <th>ค่าเรียน(คอร์ส)</th>
                       <th></th>

                       </thead>

                       <tbody align="center">

                           <br>
                           <?php $i=0 ?>
                           <?php $c=0 ?>
                          @foreach ($user as $key => $value)
                           <?php $s=0 ?>
                         @foreach ($go as $k => $v)

                        @if ($value->id == $v->idcourse)
                          <?php $s=1 ?>
                        @endif

                        @endforeach

                          @if ($s == 0 )
                          <?php $c=1 ?>
                          <?php $i++; ?>
                          <tr>

                            <td>{{ $value->Name }}</td>
                             <td>{{ $value->LTime }}</td>
                              <td>{{ $value->Price }}</td>

                              <td width="50"><a href="http://localhost:8000/add/choose/{{ $value->id }}"><button type="button" class="btn btn-warning btn-sm">ลงทะเบียน</button></a></td>

                          </tr>
                          @else
                          <?php $c=1 ?>
                          <?php $i++; ?>
                          <tr>

                            <td>{{ $value->Name }}</td>
                             <td>{{ $value->LTime }}</td>
                              <td>{{ $value->Price }}</td>

                              <td width="50"><a href="http://localhost:8000/courseInfo"><button type="button" class="btn btn-success btn-sm">ลงทะเบียนเเล้ว</button></a></td>

                          </tr>

                          @endif

                         @endforeach



                       </tbody>
                      </table>
                    @if ($c == 0)
                    <br>
                      <center><h2>ยังไม่มีคอร์สที่เปิดสอน</h2></center>
                    @endif
                  </div>


                </div>







            </div>
        </div>

    </div>

 <br>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">คอร์สที่ลงทะเบียนเรียน</div>

                <div class="card-body">

                    <div>


                    <table class="table table-hover">
                     <thead align="center">
                     <th width="50">No.</th>
                     <th>ชื่อคอร์ส</th>
                     <th>อาจารย์ผู้สอน</th>
                     <th>วัน/เวลาเรียน</th>
                     <th>ระยะเวลาเรียน</th>
                      <th>ค่าเรียน(คอร์ส)</th>
                     <th></th>
                     </thead>

                     <tbody align="center">

                         <br> <?php $p=0 ?>
                       @foreach ($go as $k => $v)
                       <tr>

                       @foreach ($user as $key => $value)

                       @if ($v->idcourse == $value->id)
                       <?php $p=1 ?>
                       <td width="50">{{$k+1}}</td>
                       <td>{{ $value->Name }}</td>
                       <td width="200">{{ $value->TName }}</td>
                        <td width="150">{{ $value->LTime }}</td>
                         <td width="120">{{ $value->DStart }} - {{ $value->DStop }}  </td>
                         <td width="150">{{ $value->Price }}</td>

                       <td width="50"><a href="/delete/choose/{{ $v->id }}"><button type="button" class="btn btn-warning btn-sm">ลบออก</button></a></td>
                       @endif

                         @endforeach
                         <tr>
                       @endforeach

                     </tbody>
                    </table>
                    @if ($p == 0)
                    <br>
                      <center><h2>ไม่มีรายการที่ท่านลงทะเบียน</h2></center>
                    @endif

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
