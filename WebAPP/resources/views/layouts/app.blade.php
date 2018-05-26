<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Course Tutorial</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="background-color: #F5F5F5">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #ffcc22">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}" >
                    <h2 style="font-family:Impact, Charcoal, sans-serif;  text-shadow: 0 0 10px #FFFFFF;">Course Tutorial</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    @guest

                    @else

                      @if (Auth::user()->admin == 1)


                      <button type="button" class="btn btn-primary btn-md" onclick="location.href='{{ url('addmin/managecourse') }}'">จัดการคอร์สเรียน</button>
                      &nbsp;
                      <button type="button" class="btn btn-primary btn-md" onclick="location.href='{{ url('addmin/manageuser') }}'">จัดการสมาชิก</button>



                      @else
                      <button type="button" class="btn btn-primary btn-md" onclick="location.href='{{ url('courseInfo') }}'">คอร์สที่เปิดสอน</button>
                      &nbsp;  &nbsp;
                      <button type="button" class="btn btn-primary btn-md" onclick="location.href='{{ url('contact') }}'">ติดต่อเรา</button>



                      @endif



                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest


                        <li>
                        <button type="button" class="btn btn-primary btn-md" onclick="location.href='{{ url('login') }}'" >
                         เข้าสู่ระบบ
                        </button>
                        </li>
                      &nbsp;  &nbsp;
                        <li>
                        <button type="button" class="btn btn-primary btn-md" onclick="location.href='{{ url('register') }}'" >
                          สมัครสมาชิก
                        </button>
                        </li>






                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    คุณ {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                                <a class="dropdown-item"  data-toggle="modal" data-target="#favoritesModal"> {{ __('ข้อมูลผู้ใช้') }}   </a>




                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <div class="modal fade" id="favoritesModal"
                        tabindex="-1" role="dialog"
                        aria-labelledby="favoritesModalLabel">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">

                        <h4 class="modal-title"
                        id="favoritesModalLabel">ข้อมูลผู้ใช้</h4>
                        </div>
                        <div class="modal-body">
                          <p>Name : {{ Auth::user()->name }}</p>
                            <p>E-Mail : {{ Auth::user()->email }}</p>
                              <p>วันที่สมัคร : {{ Auth::user()->created_at }}</p>
                        </div>
                        <div class="modal-footer">



                        <span class="pull-right">
                        <button type="button"
                        class="btn btn-default"
                        data-dismiss="modal">ปิดหน้าต่าง</button>
                        </span>
                        </div>
                        </div>
                        </div>
                        </div>


                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<br>

    <div class="footer" style="position: fixed; left: 0; bottom: 0; background-color: #ffcc22; width:100%; text-align: center;">
    @NontawatKB


</div>




</body>
</html>
