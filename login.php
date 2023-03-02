<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
</head>
<?php 
$connect = mysqli_connect('localhost','root','','form');
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password = $_POST['password'];

    $insert= "INSERT INTO data(email,password) VALUES('$email','$password')";
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
           

                    <label>Email</label>
                    <input class="form-control mb-3" type="email" name="email" placeholder="Valid Email">

              

                    <label>Password</label>
                    <input class="form-control mb-3" type="password" name="password" placeholder="Enter Your Password">
                    
                 


                    <div class="d-grid">
                        <input type="submit" name="login" value="Login">
                      
                    </div>


                </form>
            </div>
        </div>
    </div>

</body>
</html>