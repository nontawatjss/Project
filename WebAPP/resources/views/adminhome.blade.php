@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div align="center">
                  <h1> ผู้ดูแลระบบ {{Auth::user()->name}}</h1>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
