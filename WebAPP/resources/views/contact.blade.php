@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ติดต่อสอบถาม</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div align="center">
                        <h2> คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี </h2>
                  <h2> เบอร์โทร : 094-308-3408</h2>
                  <h2> อีเมล์ : nontawat.ka.58@ubu.ac.th</h2>
                  <a href="https://www.facebook.com/yo.nontawat"><img src="https://cdn3.iconfinder.com/data/icons/social-icons-5/606/Facebook.png" width="5%"></a>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
