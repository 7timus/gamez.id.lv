<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skolas Darbs</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="free porn, free money, poker, summer, money, work, cheat">
    <meta name="author" content="Egons Kalnins">
    {{-- SKRIPTI --}}
    <script src="{{ url('/') }}/js/vendor/jquery.js"></script>
    <script src="{{ url('/') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/js/script.js"></script>
    {{--  STYLE SHEETS  --}}
    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css" />
    <link rel="stylesheet" href="{{ url('/') }}/css/custom.css" />
</head>




<body>
<div id="header">
    <div class="brand">Gaujmaliete</div>
    <div class="address-bar">Studenšu korporācija</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container nav-container">
            <!-- Mobilo applikaciju poga-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Navigacijas brends - redzams uz mazajiem keraniem-->
                <a class="navbar-brand" href="{{ url('/') }}">Mazais ekrans</a>
            </div>
            <!-- Menu - ar iespeju samazinat ( collapse ) -->
            <div class="collapse navbar-collapse" id="navigation-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/') }}">Aktualitātes</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Par Mums
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/uznemsana') }}">Uzņemšana</a></li>
                            <li><a href="#">Svarīgākie notikumi</a></li>
                            <li><a href="#">Simboli</a></li>
                            <li><a href="#">Amatpersonas</a></li>
                            <li><a href="#">Kontakti</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="{{ url('/vesture') }}">Vēsture</a>
                    </li>
                    <li>
                        <a href="#">Galerija</a>
                    </li>
                    <li>
                        <a href="#">Korporācijas Latvijā</a>
                    </li>
                    <li>
                        <a href="#">Saites</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>

<!-- kONTENTS -->
@yield('content')
<!-- /.container -->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy; Šādi tādi kopijraiti.</p>
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
                <img src="https://www.w3.org/QA/Tools/I_heart_validator" alt="Validators">
            </div>
        </div>
    </div>
</footer>
</body>
</html>