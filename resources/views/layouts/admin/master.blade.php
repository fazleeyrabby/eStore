<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/backend/plugins/images/favicon.png') }}') }}">
    <title>Cubic Admin Template</title>
      @include('sweetalert::alert')
      <!-- ajaxlivejquery -->
    <link href="{{ asset('assets/backend/js/jquery.min.js') }}" rel="stylesheet">
    <!-- ===== Bootstrap CSS ===== -->
    <link href="{{ asset('assets/backend/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="{{ asset('assets/backend/plugins/components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!-- ===== Animation CSS ===== -->
    <link href="{{ asset('assets/backend/css/animate.css') }}" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="{{ asset('assets/backend/css/colors/default.css') }}" id="theme" rel="stylesheet">
    <!-- datatable -->
     <link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
     <!-- ===== Plugin CSS ===== -->
    <link href="{{ asset('assets/backend/css/dropzone.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="mini-sidebar">
      @include('sweetalert::alert')
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="{{ asset('assets/backend/plugins/images/logo.png') }}" alt="home" />
                        </b>
                        <span>
                            <img src="{{ asset('assets/backend/plugins/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <i class="icon-magnifier"></i>
                            <input type="text" placeholder="Search..." class="form-control">
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    @php
                        $pending = App\Models\User::where('sts',0)->count();
                    @endphp
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-speech"></i>
                            <span class="badge badge-xs badge-danger">{{ $pending }}</span>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                @php
                                    $pendings = App\Models\User::where('sts',0)
                                                    ->orderBy('id','DESC')
                                                    ->take(5)
                                                    ->get();
                                @endphp
                                @foreach($pendings as $pending)
                                <div class="message-center">
                                    <a href="{{ route('user.notify',$pending->id) }}">
                                        <div class="user-img">
                                            <img src="{{ asset('assets/backend/plugins/images/users/2.jpg') }}" alt="user" class="img-circle">
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>{{ $pending->name }}</h5>
                                            <span class="mail-desc">New Member Register</span>
                                            <span class="time">
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($pending->created_at))->diffForHumans() }}                                           
                                            </span>
                                           
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-calender"></i>
                            <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="right-side-toggle">
                        <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                        </a>
                    </li>
                    <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                      <ul class="dropdown-menu settings-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                        <li><a class="dropdown-item" href=""><i class="fa fa-user fa-lg"></i> Profile</a>
                          <li><a class="dropdown-item" href=""><i class="fa fa-user fa-lg"></i> Change Password</a></li>
                        <li><a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
        </nav>
          @include('sweetalert::alert')
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        @include('layouts.admin.sidebar')
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- ===== Page-Content ===== -->
        @yield('content')
        <!-- ===== Page-Content-End ===== -->
        @include('layouts.admin.footer')
    </div>
    <!-- ===== Main-Wrapper-End ===== -->
    <!-- ==============================
        Required JS Files
    =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="{{ asset('assets/backend/plugins/components/jquery/dist/jquery.min.js') }}"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="{{ asset('assets/backend/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="{{ asset('assets/backend/js/jquery.slimscroll.js') }}"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="{{ asset('assets/backend/js/waves.js') }}"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="{{ asset('assets/backend/js/sidebarmenu.js') }}"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="{{ asset('assets/backend/js/custom.js') }}"></script>
    <!-- ===== Plugin JS ===== -->
    <script src="{{ asset('assets/backend/plugins/components/chartist-js/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/components/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/components/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/components/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/components/easypiechart/dist/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/db1.js') }}"></script>
    <script src="{{ asset('assets/backend/js/search.js') }}"></script>
    <!-- ===== Style Switcher JS ===== -->
    <script src="{{ asset('assets/backend/plugins/components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <!-- datatables js -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $("#product_category").on("change", function(){
            var columnName = $('#product_category').val();
            alert(columnName);
        });
    } );
    </script> -->

</body>

</html>

