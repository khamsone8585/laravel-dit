<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Admin </title>
    
    <!-- Bootstrap CSS -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('backend/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('backend/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet" />
</head>

<body class="login-img3-body">

    <div class="container">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="Email" id="email" name="email" class="form-control" placeholder="ຊື່ອີເມລ" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="ລະຫັດຜ່ານ">
                </div>
                <label class="checkbox">
                    <input type="checkbox" id="remember_me" name="remember" value="remember-me"> ຈື່ຂ້ອຍໄວ້
                    <span class="pull-right"> <a href=" {{ route('password.request') }} "> ລືມລະຫັດຜ່ານ?</a></span>
                </label>
                <button class="btn btn-primary btn-lg btn-block" type="submit">ເຂົ້າສູ່ລະບົບ</button>
                <button class="btn btn-info btn-lg btn-block" type="submit">ລົງທະບຽນ</button>
            </div>
        </form>
    </div>
</body>
</html>
