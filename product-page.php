<?php include('./includes/config.php'); 

if(isset($_GET['PID'])){
    $PID = $_GET['PID'];
    $p_name = $_GET['p_name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $p_name;?> | PCBlinders</title>
    <link rel="icon" href="./assets/loadbg.png" type="image/icon type">
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


    <?php include_once './includes/header.php'; ?>

    
    <div class="productpage-hero py-5 bg01">
      <h1 class="px-5 display-1 mt-5 py-5 fw-bold text-light" data-aos="fade-right" data-aos-duration="2000"><?php echo $p_name; ?></h1>
    </div>

    <?php 
        $query = "SELECT * from products where PID='$PID'";
                                                
        $result =  mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed");
        }
        else{
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-lg-6 py-5 border border-solid text-center">
                        <img src="./upload_assets/<?php echo $row['p_image']; ?>" data-aos="fade-down" data-aos-duration="2000" class="img img-fluid">
                    </div>

                    <div class="col-lg-6 p-5 bg-light" data-aos="fade-left" data-aos-duration="2000">
                        <h1 class="h1">Rs.<?php echo $row['p_price']; ?>/-</h1>
                        <small>Excluding Tax* and Delivery Charges.</small>
                        <br>
                        <h3 class="text-dark">Category : <?php echo strtoupper($row['p_category']); ?></h3>
                        <h4 class="text-dark">Sub Category : <?php echo ucfirst($row['p_subcategory']); ?> Class</h4>
                        <!-- <a href="cart.php?PID=<?php echo $row['PID'] ?>&UID=<?php echo $_SESSION['UID']; ?>" target="_blank"><div class="btn btn-primary mt-2">Add to Cart</div></a> -->
                        <?php 
                            if(isset($_SESSION['UID'])){
                                echo "<a href='cart.php?PID=" . $row['PID'] . "&UID=" . $_SESSION['UID'] . " &PPrice=" . $row['p_price'] . "' target='_blank'><div class='btn btn-primary mt-2'>Add to Cart</div></a>";
                            } else {
                                echo "<a href='login.php' class='btn btn-primary'>Login</a>";
                            }
                        ?>
                    </div>
                    
                    
                    <div class="row">
                    <div class="col-lg-12 p-2 bg-light p-5" data-aos="fade-up" data-aos-duration="2000">
                        <h1 class="h4 text-dark">Product Description : <br><br><?php echo $row['p_desc']; ?></h1>
                        <small></small>
                        <br>
                    </div>
                    </div>
                </div>
            </div>

            <?php
            }
        }
        ?>
    
    



    

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>