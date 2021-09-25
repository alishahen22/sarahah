

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css/index.css -->
    <link rel="stylesheet" href="../assets/css/index.css">
    <!-- css/styel.css -->
    <link rel="stylesheet" href="../assets/css/Login.css">
    <!-- title -->
    <link rel="icon" type="logo" href="../assets/img/logo.png" sizes="16x16">

    <title>Sarahah - Login</title>
</head>

<body>

<!-- header -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="Login.view.php" class="navbar-brand" style="margin: 4px 10px 0 10px;">
           <span>
               <img src="assets/img/logo300.png" width="54" height="26" style="margin-bottom: 10px">
           </span>
        </a>

        <input class="form-control mr-sm-0" type="text" placeholder="Search..." aria-label="Search">


        <a href="#" class="icon icon-globe"
           style="color : #fff;padding : 15px;display: inline-block;font-size : 19px; margin-bottom: 1px">
            <i class="fa fa-globe-americas"></i>
        </a>

        <button class="navbar-toggler butt" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav " style="margin-right: -15px;">
                <li class="nav-item">
                    <a href="">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register">Register</a>
                </li>
            </ul>
        </div>

    </nav>

</header>

<!-- section -->

<section class="container p-t-md">

    <!-- user - login -->

    <div class="text-center t-c-d">
        <h3 style="color: #20bbb3">
            <span class="fa fa-user" style="font-size:40px; color:#c0c0c0">

            </span>
            <br/>
            Login
        </h3>
    </div>
    <br/>

    <!-- card form -->

    <div class="container text-center">
        <div class="card">
            <div class="card-body">
                <form class="app-login-form" method="post"action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-lg-9 col-md-10 col-sm-9">
                            <input type="text" placeholder="Email or Username"

                                   class="form-control inp" id="emailOrUsername"
                                   name="email" :value="old('email')" required autofocus >

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-9 col-md-10 col-sm-9">

                            <input type="Password" placeholder="Password"
                                   value=""
                                   class="form-control inp" id="password"
                                   data-val="true"
                                   name="password"
                                   required autocomplete="current-password">

                                </ul>

                        </div>
                    </div>


                    <div class="m-b-lg text-left row">
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="col-xs-6">
                            <button
                                    class="btn btn-block btn-primary-outline" type="submit">
                                Login
                            </button>
                        </div>
                    </div>
                    <br>


                    <a  class=" text-sm text-gray-600 hover:text-gray-900" href="/register">don't have Email ? Register</a>
                </form>
                    <br>
                </form>
            </div>
        </div>
    </div>
</section>
<br/>


<!-- Script Js -->

<!-- jquery-3.3.1.min.js -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- popper.min.js -->
<script src="assets/js/popper.min.js"></script>

<!-- Bootstrap.min.js -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- bootstrap.bundle.min.js -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Fontawesome.min.js -->
<script src="assets/Fontawesome/js/fontawesome.min.js"></script>

<!-- all.js -->
<script src="assets/Fontawesome/js/all.min.js"></script>

</body>
</html>

