@extends('managecourse')

@section('bbs')


<table class="table table-hover table-bordered">
 <thead align="center">
 <th width="5">No.</th>
 <th>ชื่อคอร์ส</th>
 <th>อาจารย์ผู้สอน</th>
 <th>วัน/เวลาเรียน</th>
 <th>ระยะเวลาเรียน</th>
 <th>ราคา (คอร์ส)</th>
 <th>ลบ</th>
 </thead>

 <tbody>

   @foreach ($user as $key => $value)
     <tr align="center">
       <td>{{ $key+1 }}</td>
       <td>{{ $value->Name }}</td>
       <td>{{ $value->TName }}</td>
        <td>{{ $value->LTime }}</td>
         <td>{{ $value->DStart }} - {{ $value->DStop }}  </td>
           <td>{{ $value->Price }}</td>
         <td> <a href="/delete/course/{{ $value->id }}/{{ $value->Group }}"><button type="button" class="btn btn-primary btn-sm">ลบ</button></a></td>
     </tr>

   @endforeach
 </tbody>
</table>


@endsection
