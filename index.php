<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
</head>
<?php 
       $connect = mysqli_connect('localhost', 'root', '', 'form');


if (isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
   $gender=$_POST['optradio'];

    $insert= "INSERT INTO info
    (fname,lname,email,phone,password,gender)
    VALUES('$fname','$lname','$email','$phone','$password','$gender')";
    
    $query= mysqli_query($connect,$insert);
}
?>

<body>
    <div class="container">
        <div class="row mt-5">
            <div id="form" class="bg-light col-md-6 m-auto rounded-top rounded-bottom">
                <h2 class=" text-center">Signup Now</h2>
                <p class=" text-center">It's free and in a minute.</p>

                <!-- Form-start -->
                <form action="#" method="POST">
                    <label >First Name</label>
                    <input class="form-control mb-3" type="text" name="fname" placeholder="First Name">

                    <label>Last Name</label>
                    <input class="form-control mb-3" type="text" name="lname" placeholder="Last Name">

                    <label>Email</label>
                    <input class="form-control mb-3" type="email" name="email" placeholder="Valid Email">

                    <label>Phone No</label>
                    <input class="form-control mb-3" type="phone" name="phone" placeholder="Phone No">

                    <label>Password</label>
                    <input class="form-control mb-3" type="password" name="password" placeholder="Enter Your Password">
                    
                    <p>Gender:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="male" checked>
                        <label class="form-check-label" for="radio1" >Male</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="female">
                        <label class="form-check-label" for="radio1" >Female</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="others" >
                        <label class="form-check-label" for="radio3" >Others</label>
                    </div>


                    <div class="d-grid">
                        <!-- <input type="submit" name="signup" value="Sign Up"> -->
                        <input type="submit" value="Register" name="register">
                        <!-- <button  type="submit" class="mt-3 mb-3 btn btn-primary" name="signup">Sign Up</button> -->
                        <p class="text-center text-muted">When You Register by clicking SIgnup button, You are agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                        <p class="text-center">Already Have an Account? 
                            <a style="text-decoration: none; color: green;" href="login.php">Login Here</a></p>
                    </div>


                </form>
            </div>
        </div>
    </div>

</body>
</html>
