    <!--NAVBAR-->
    <nav data-aos="fade-up" data-aos-duration="1000" class="navbar glasseffect navbar-expand-lg navbar-dark fixed-top p-3">
        <div class="container-fluid">
          <a class="navbar-brand fw-bolder" href="index.php">PCBlinders</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto mx-5">
              <a class="nav-link px-4" href="index.php">Home</a>
              <a class="nav-link px-4" href="prebuilt-pc.php">PC</a>
              <a class="nav-link px-4" href="laptop.php">Laptop</a>
              <a class="nav-link px-4" href="accessories.php">Accessories</a>
              <a class="nav-link px-4" href="ref_laptop.php">Refurbrished</a>

              <a class="nav-link px-4" href="viewcart.php">
                Cart
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg>
              </a>

              

              <?php 
              
              session_start();
              $userLoggedIn = isset($_SESSION['UID']);

              if (isset($_GET['logout'])) {
                session_unset();   
                session_destroy();
                header("Location:../index.php");
                exit();
            }
              
              // Display the appropriate button based on login status
              if ($userLoggedIn){
                  // If the user is logged in, display the username and a logout button
                  $UID = $_SESSION['UID'];
                  $Uname = $_SESSION['Uname'];
                  $Umail = $_SESSION['Umail'];
                  //echo "<h1 class='h5 mt-2 px-4 text-white '><i class='bi bi-person-fill mx-2'></i>$Uname</h1><a href='logout.php' class='mt-2 ml-2 text-white btn btn-danger'>&nbsp;&nbsp;Logout</a>";     
                  
                  echo "
                  
                  <div class='dropdown'>
                  <button class='btn btn-secondary bg-transparent fw-bold text-white dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16'>
                  <path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6'/>
                </svg> $Uname
                  </button>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <a class='dropdown-item disable'>$Umail</a>
                    <a class='dropdown-item text-danger' href='logout.php'>LOG OUT</a>
                  </div>
                </div>



                  ";
              } else {
                  // If the user is not logged in, display the default login button
                  echo "<a href='login.php' class='btn btn-primary'>Login</a>";
              }

              ?>
              
            </div>
          </div>
        </div>
        <br>
    </nav>