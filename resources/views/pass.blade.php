@extends('layout.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo:600" rel="stylesheet">
    <link rel="stylesheet" href="css/style7.css">
    <link rel="icon" type="logo" href="img/logo.png" sizes="16x16">
    <title> Sarahah - Password</title>
</head>
<body>

<!-- header -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="../Messages/Messages.html" class="navbar-brand" style="margin: 4px 10px 0 10px;">
           <span>
               <img src="img/logo300.png" width="54" height="26" style="margin-bottom: 10px">
           </span>
        </a>

        <input class="form-control mr-sm-0" type="text" placeholder="Search..." aria-label="Search">

        <a href="#">
        <span class="icon icon-globe"
              style="color : #fff;padding : 15px;display: inline-block;font-size : 19px; margin-bottom: 5px">
                    <i class="fa fa-globe-americas"></i>
        </span>
        </a>
        <button class="navbar-toggler butt" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav " style="margin-right: -15px;">
                <li class="nav-item">
                    <a href="../Contact%20Us/Contact%20Us.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="../About%20Us/About%20Us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="../Login.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a href="Settings.html">Settings</a>
                </li>
                <li class="nav-item">
                    <a href="../home.php">Messages</a>
                </li>
            </ul>
        </div>

    </nav>

</header>


<!-- section -->

<section class="container-fluid">
    <div class="row b-md" style=" padding: 85px 87px 0 ;">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">


            <ul class="list-group" id="list-tab" role="tablist">
                <li class="list-group-item settings" style="font-size: 15px; ">Settings</li>

                <li class="list-group-item settings">
                    <a href="Personal%20Information.html">
                        <i class="fa fa-user" style="color: #888888;"></i>
                        &#160;
                        Personal Information
                    </a>

                </li>

                <li class="list-group-item active settings">
                    <a href="Password.html">
                        <i class="fa fa-lock" style="color: #888888;"></i>
                        &#160;
                        Password
                    </a>
                </li>

                <li class="list-group-item settings">
                    <a href="Remove%20account.html">
                        <i class="fa fa-user-lock" style="color: #888888;"></i>
                        &#160;
                        Remove account
                    </a>

                </li>

                <li class="list-group-item settings">
                    <a href="../views/home.view.php">
                        <i class="fa fa-comment-alt" style="color: #888888;"></i>
                        &#160;
                        Back to messages
                    </a>

                </li>
            </ul>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="card">
                <div class="cord-body">
                    <div class="tab-pane fade show active" id="list-profile" role="tabpanel"
                         aria-labelledby="list-profile-list">

                        <form>
                            <h4 style="font-size: 18px; font-weight: bold;">Change password</h4>
                            <hr/>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="Current Password">Current Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="Current Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="New Password">New Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="New Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3  col-form-label" for="New Password Confirmation">New Password
                                    Confirmation</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="New Password Confirmation">
                                </div>
                            </div>
                            <br/>
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-primary-outline">Change</button>
                            </div>
                            <br/>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<br/>
<br/>
<!-- footer -->

<footer class="center-block">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">

               <span style=" font-size: 14px;">
                    Sarahah 2018 ©
               </span>

                <span class="social">
                    <a href="#">
                        <i class="fab fa-twitter-square"></i>

                    </a>
                    &nbsp;
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    &nbsp;
                    <a href="#">
                        <i class="fab fa-instagram"></i>

                    </a>
                </span>
                -
                &#160
                <a class="spacer link-color a-s-l" href="#">Privacy</a>
                &#160
                -
                &#160
                <a class="spacer link-color a-s-l" href="#">Terms</a>
            </div>
        </div>
    </div>
</footer>


<!-- Script Js -->

<!-- jquery-3.3.1.min.js -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- popper.min.js -->
<script src="js/popper.min.js"></script>

<!-- Bootstrap.min.js -->
<script src="js/bootstrap.min.js"></script>

<!-- bootstrap.bundle.min.js -->
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Fontawesome.min.js -->
<script src="Fontawesome/js/fontawesome.min.js"></script>

<!-- all.js -->
<script src="Fontawesome/js/all.min.js"></script>

</body>
</html>
