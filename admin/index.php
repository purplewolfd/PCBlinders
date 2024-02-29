<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Admin | PCPulse</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="assets/PCP-logo.png" type="image/icon type">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
</head>
<body>

<div class="container-fluid">
    <div class="row">
    
    <?php include('header.php');?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 vh-120">

        <h1 class="title my-5">Home</h1>
            <div class="row">
                <div class="col-lg-4">
                    
                <?php

                        $query = "SELECT COUNT(*) as Ccount from user_accounts";
                
                        $result =  mysqli_query($conn,$query);

                        if(!$result){
                            die("Query Failed");
                        }
                        else{
                            while($row = mysqli_fetch_assoc($result)){
                                $Ccount = $row['Ccount'];
                                ?>

                        <div class="card border border-dark mb-5">
                            <div class="card-header">
                            Total Users
                            </div>
                            <div class="card-body">
                                <p class="card-text display-2 fw-bold"><?php echo $Ccount ?></p>
                            </div>
                        </div>

                                <?php

                                
                            
                            }
                        }                        
                    
                    ?>    




                </div>

                <div class="col-lg-4">
                <?php

                $query = "SELECT COUNT(*) as Ccount from products";

                $result =  mysqli_query($conn,$query);

                if(!$result){
                    die("Query Failed");
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                        $Ccount = $row['Ccount'];
                        ?>

                <div class="card border border-dark mb-5">
                    <div class="card-header">
                    Total Products
                    </div>
                    <div class="card-body">
                        <p class="card-text display-2 fw-bold"><?php echo $Ccount ?></p>
                    </div>
                </div>

                        <?php

                        
                    
                    }
                }                        

                ?>
                </div>

                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Date and Time</h5>
                            <p class="card-text text-black fw-bold" id="dateTime"></p>
                        </div>
                    </div>
                </div>
            </div>
                
        </main>
    </div>
</div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
        function updateDateTime() {
    var currentDate = new Date();
    var formattedDate = currentDate.toLocaleDateString();
    var formattedTime = currentDate.toLocaleTimeString();
    var dateTimeString = formattedDate + '  ' + formattedTime;
    
    // Update the content of the element with id "dateTime"
    document.getElementById('dateTime').textContent = dateTimeString;
  }

  // Call the function to update the date and time initially
  updateDateTime();

  // Update the date and time every second (1000 milliseconds)
  setInterval(updateDateTime, 1000);
    </script>
</body>
</html>
