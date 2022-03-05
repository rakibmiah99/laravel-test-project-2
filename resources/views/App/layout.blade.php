<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QIXER - Service Based Business HTML Template</title>

    <!-- favicon -->
    <link rel=icon href="{{asset("favicons.ico")}}" sizes="16x16" type="icon/ico">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="{{asset("assets/css/slick.css")}}">
    <!-- LineAwesome -->
    <link rel="stylesheet" href="{{asset("assets/css/line-awesome.min.css")}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset("assets/css/nice-select.css")}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">



    <!-- jquery -->
    <script src="{{asset("assets/js/jquery-3.6.0.min.js")}}"></script>
    <!-- jquery Migrate -->
    <script src="{{asset("assets/js/jquery-migrate.min.js")}}"></script>
    <!-- bootstrap -->
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <!-- wow -->
    <script src="{{asset("assets/js/wow.min.js")}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset("assets/js/slick.js")}}"></script>
    <!-- Nice Select -->
    <script src="{{asset("assets/js/jquery.nice-select.js")}}"></script>
    <!-- Nice Scroll -->
    <script src="{{asset("assets/js/jquery.nicescroll.min.js")}}"></script>
    <!-- Moment JS -->
    <script src="{{asset("assets/js/moment.js")}}"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- main js -->
    <script src="{{asset("assets/js/main.js")}}"></script>
    <!-- my js -->
    <script src="{{asset("assets/js/my.js")}}"></script>

    <style>
        .delete {
            text-decoration: line-through;
            color: #FF6B2C;
        }
        .err{
            font-size: 14px;
        }
        .btn-outline-success{
            padding: 15px 30px;
            border-radius: 0;
            border: 1px solid #1DBF73;
        }
        .btn-outline-success:hover:not([disabled]){
            background: #1DBF73;
            color: white;
        }
        #confirmation .disabled{
            background: #44ab7b!important;
            cursor: not-allowed!important;
        }
    </style>

</head>

<body>
<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="loader_bars">
            <span></span>
        </div>
    </div>
</div>

@yield('content')


<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="las la-angle-up"></i></span>
</div>
<!-- back to top area end -->
</body>

</html>

