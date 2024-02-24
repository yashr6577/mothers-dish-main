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

        echo "<script>";
        echo"alert('Login Success')";
        echo'window.open.href="home.php"';
        echo"</script>";
    
    }

    else{
        echo "<script>";
        echo"alert('Login failed')";
        echo'window.location.href="index.php";';
        echo"</script>";
    
    }
    }
    ?>