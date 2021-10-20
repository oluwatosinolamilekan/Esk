<!DOCTYPE html>
<html lang="en" dir="ltr">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Eskimi</title>

    <!-- GOOGLE FONTS -->
{{--    <link href="../fonts.googleapis.com/cssbf7a?family=Karla:400,700|Roboto" rel="stylesheet">--}}
    <link href="{{asset('template/assets/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('template/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />


    <link href="{{asset('template/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />

    <link href="{{asset('template/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
{{--    <link href="../cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">--}}

    <link href="{{asset('template/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />

    <!-- MONO CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/css/mono.css')}}" />

    <!-- CSS for Demo -->
    <link rel="stylesheet" href="{{asset('template/assets/options/optionswitch.css')}}" />

    <!-- FAVICON -->
    <link href="{{asset('template/assets/img/favicon.png')}}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('template/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>


<div id="toaster"></div>


<!-- ====================================
——— WRAPPER
===================================== -->
<div class="wrapper">


    <!-- ====================================
      ——— LEFT SIDEBAR WITH OUT FOOTER
    ===================================== -->
    @include('layouts.sidebar')

    <!-- ====================================
    ——— PAGE WRAPPER
    ===================================== -->
    <div class="page-wrapper" id="app">
        <!-- Header -->
        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
       @include('layouts.footer')
    </div>
</div>

<script src="{{asset('template/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/assets/plugins/simplebar/simplebar.min.js')}}"></script>
{{--<script src="{{asset('template/unpkg.com/hotkeys-js%403.8.1/dist/hotkeys.min.js')}}"></script>--}}

{{--<script src="{{asset('template/assets/plugins/toaster/toastr.min.js')}}"></script>--}}
{{--<script src="{{asset('template/assets/js/custom.js')}}"></script>--}}
<!-- JS for Demo -->
<script src="{{mix('js/app.js')}}"></script>

</body>

</html>
