<?php
include('includes/config.php');
session_start();

if(isset($_POST["submit"])) {
  // Assuming $conn is a valid database connection object

  $Uname = $_POST["Uname"];
  $Umail = $_POST["Umail"];
  $Uphone = $_POST["Uphone"];
  $Uaddress = $_POST["Uaddress"];
  $Upincode = $_POST["Upincode"];
  $Upassword = $_POST["Upassword"];

  // Check if the email already exists in the database using prepared statement
  $check_query = "SELECT * FROM `user_accounts` WHERE `Umail`=?";
  $stmt = $conn->prepare($check_query);
  $stmt->bind_param("s", $Umail);
  $stmt->execute();
  $check_result = $stmt->get_result();

  if($check_result->num_rows > 0) {
    echo "<script>alert('Email already exists!');</script>";
  } else {
    // Insert data into the database using prepared statement
    $sql= "INSERT INTO `user_accounts`(`Uname`, `Umail`, `Uphone`, `Uaddress`, `Upincode`, `Upassword`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $Uname, $Umail, $Uphone, $Uaddress, $Upincode, $Upassword);
    if($stmt->execute()) {
      echo "<script>
            window.location.href='login.php'; 
            window.alert('Account Created Successfully!');
            </script>";
    } else {
      // Log the error and provide a user-friendly message
      error_log("Error: " . $stmt->error);
      echo "<script>alert('An error occurred while creating the account. Please try again later.');</script>";
    }
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
    
    <!--NAVBAR-->

    <?php 
      include_once('includes/header.php');
    ?>
    
    <!--SIGN IN FORM-->

    <form class="vh-100 bg01" method="POST" action="" onsubmit="return validateForm()">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg01 text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-2">
              <h2 class="fw-bold mb-2 text-uppercase">Sign In</h2>
              <p class="text-white-50 mb-5">Please enter your details</p>

              <div class="form-outline form-white mb-2">
                <label class="form-label text-light" for="typeNameX">Name</label>
                <input type="text" id="typeNameX" name="Uname" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-2">
                <label class="form-label text-light" for="typeEmailX">Email</label>
                <input type="email" id="typeEmailX" name="Umail" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-2">
                <label class="form-label text-light" for="typePhoneX">Phone</label>
                <input type="text" id="typePhoneX" name="Uphone" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-2">
                <label class="form-label text-light" for="typeAddressX">Address</label>
                <input type="text" id="typeAddressX" name="Uaddress" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-2">
                <label class="form-label text-light" for="typePincodeX">PINCODE</label>
                <input type="text" id="typePincodeX" name="Upincode" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-2">
                <label class="form-label text-light" for="typePasswordX">Password</label>
                <input type="password" id="typePasswordX" name="Upassword" class="form-control form-control-lg" />
              </div>

              <input class="btn btn-outline-light btn-lg px-5" type="submit" name="submit" value="Submit">
            </div>
            <div>
              <p class="mb-0">Have an account? <a href="login.html" class="text-white-50 fw-bold">Log in instead!</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<script>
function validateForm() {
  var name = document.getElementById("typeNameX").value.trim();
  var email = document.getElementById("typeEmailX").value.trim();
  var phone = document.getElementById("typePhoneX").value.trim();
  var address = document.getElementById("typeAddressX").value.trim();
  var pincode = document.getElementById("typePincodeX").value.trim();
  var password = document.getElementById("typePasswordX").value.trim();

  if (name === "" || email === "" || phone === "" || address === "" || pincode === "" || password === "") {
    alert("Please fill in all fields");
    return false;
  }

  return true;
}
</script>

</body>

</html>