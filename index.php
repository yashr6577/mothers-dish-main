<?php
    session_start();
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page ::
        w3layouts</title>
    <link rel="shortcut icon" href="images/medico_shortcut.png" type="image/jpeg" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS-->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- side nav css file -->

    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
    <!--//webfonts-->

    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->

</head>

<body>
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page login-page " style="border-radius:40px;">
            <h2 class="title1">Login</h2>
            <div class="widget-shadow">
                <div class="login-body">

                    <form action="" method="POST">
                        <input type="email" class="user" name="email" placeholder="Enter Your Email" required="">

                        <input type="password" name="password" class="lock" placeholder="Password" required="">

                        <div class="forgot-grid">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember
                                me</label>
                            <div class="forgot">
                                <a href="#">forgot password?</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" name="login" value="Login">
                        <!-- <div class="registration">
                            Don't have an account ?
                            <a class="" href="signup.html">
                                Create an account
                            </a>
                        </div> -->
                    </form>

                </div>
            </div>

        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <p>&copy; All Rights Reserved | Design by <a href="https://mayurpatil9565.github.io/" target="_blank">Mother's
                Dish - A mess portal
                Inc</a></p>
    </div>
    <!--//footer-->
    </div>

    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
    $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->

    <!-- Classie -->
    <!-- for toggle left push menu script -->

    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"> </script>
    <!-- //Bootstrap Core JavaScript -->

    <?php
    include 'config.php';

    if(isset($_POST['login'])){
    extract($_POST);

    $email=mysqli_real_escape_string($connect,$_POST['email']);

    $password=mysqli_real_escape_string($connect,$_POST['password']);

    $log = mysqli_query($connect, "select * from admin where email='$email' and password='$password'") or die(mysqli_error($connect));
    
    if(mysqli_num_rows($log)>0)
    {
        $fetch=mysqli_fetch_array($log);
        $_SESSION['id']=$fetch['id'];
        $_SESSION['email']=$fetch['email'];
        $_SESSION['password']=$fetch['password'];

    //     echo "<script>";
    //     echo"alert('Login Success')";
    //    // echo'window.location.href("home.php")';
    //     //echo "window.open('home.php')";
    //     //echo 'window.location.href="home.php"';
    //     echo"</script>";

        echo "<script>";
        //echo "alert('Login Successfull');";
        echo "window.location.href='home.php';";
        echo "</script>";
    
    }

    else{
        echo "<script>";
        echo"alert('Login failed')";
        //echo'window.location.href="logout.php";';
        echo"</script>";
    
    }
    }
    ?>

</body>

</html>