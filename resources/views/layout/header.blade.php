<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/Messages.css">
    <link rel="icon" type="logo" href="assets/img/logo.png" sizes="16x16">
    <title> Sarahah - Messages</title>
</head>

<body>

<!-- header -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/home" class="navbar-brand" style="margin: 4px 10px 0 10px;">
           <span>
               <img src="assets/img/logo300.png" width="54" height="26" style="margin-bottom: 10px">
           </span>
        </a>

        <input class="form-control mr-sm-0" type="text" placeholder="Search..." aria-label="Search">


        <span class="icon icon-globe"
              style="color : #fff;padding : 15px;display: inline-block;font-size : 19px; margin-bottom: 5px">
                    <i class="fa fa-globe-americas"></i>
        </span>

        <button class="navbar-toggler butt" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav " style="margin-right: -15px;">
                <li class="nav-item">
                    <a href="#">Contact Us</a>
                </li>

                <li class="nav-item">
                    <form method="POST" action="/logout">
                        @csrf
                         <a class=" leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                             this.closest('form').submit();">Log Out</a>
                     </form>
                </li>
                <li class="nav-item">
                    <a href="/setting">Settings</a>
                </li>
                <li class="nav-item">
                    <a href="/home">Messages</a>
                </li>
            </ul>
        </div>
    </nav>

</header>
<body>
    @yield('body')

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

