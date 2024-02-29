<?php
include('includes/config.php');
session_start();
if(isset($_POST["submit"]))
{
  $Umail = $_POST["Umail"];
  $Upassword = $_POST["Upassword"];
    $sql="SELECT * from user_accounts where Umail='$Umail' AND Upassword='$Upassword'";
    $result=$conn->query($sql);
   // print_r($result);
   if($result->num_rows>0)
   {
    $ro=$result->fetch_assoc();
    $_SESSION["UID"]=$ro["UID"];
    $_SESSION["Umail"]=$ro["Umail"];
    $_SESSION["Uname"]=$ro["Uname"];
   

    echo "<script>
    window.location.href='index.php?message=Logged In';
    window.alert('Login Successful');
    </script>";
   }
   else
   {
    echo "error";
   }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCBlinders | Online shopping exclusively for computer geeks.</title>
    <link rel="icon" href="assets/PCP-logo.png" type="image/icon type">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
</head>
<body>
    
  
    <!--LOG IN FORM-->

    <form action="" class="vh-100 bg02 pt-5" method="post" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg01 text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <div class="mb-md-5 mt-md-4 pb-2">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-5">Please enter your credintials.</p>

                    <div class="form-outline form-white mb-4">
                        <label class="form-label text-light" for="typeEmailX">Email</label>  
                        <input type="email" id="typeEmailX" name="Umail" class="form-control form-control-lg" />                      
                    </div>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label text-light" for="typePasswordX">Password</label>
                        <input type="password" id="typePasswordX" name="Upassword" class="form-control form-control-lg" /> 
                    </div>
      
                    <input class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">
                  </div>
      
                  <div>
                    <p class="mb-0">Don't have an account?<a href="signin.php" class="text-white-50 fw-bold">Sign in!</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
</body>