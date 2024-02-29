<?php include('./includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories | PCBlinders</title>
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
    <?php include 'includes/header.php'?>


    <!--PRE BUILT PC-->

    <div class="prebuiltpc-hero py-5 ">
      <h1 class="px-5 display-1 mt-5 py-5 fw-bold text-light" data-aos="fade-right" data-aos-duration="2000">Complete your works on the GO! <br>We have got you<br>Affordable Laptops</h1>
    </div>

    <div class="min-vh-20 bg01 d-grid">
      <h1 class="text-center py-3">Choose your category</h1>
      <div class="text-center mb-4">
        <button class="btn category-btn mx-5" onclick="filterProduct('all')">All</button>

        <button class="btn category-btn mx-5" onclick="filterProduct('low')">Entry Level</button>

        <button class="btn category-btn mx-5" onclick="filterProduct('med')">Mid-Range</button>

        <button class="btn category-btn mx-5" onclick="filterProduct('high')">High-End Gaming</button>
      </div>  
    </div>

    <div class="tray container-xxl py-5">
    <div class="container">
        <div class="row g-4">

        <?php

                                $query = "SELECT * from products where p_category IN ('audio','peripheral','adapter','cable') order by timestamp_column desc";
                                                
                                $result =  mysqli_query($conn,$query);

                                if(!$result){
                                    die("Query Failed");
                                }
                                else{
                                    while($row = mysqli_fetch_assoc($result)){
                                      ?>

                                      <div data-subcategory="<?php echo $row['p_subcategory'];?>" data-aos="flip-left" data-aos-duration="1000" class="product-card col-lg-3 col-md-6 mx-md-5 rounded-5">
                                          <div class="rounded overflow-hidden">


                                              <div class="position-relative text-center p-4">
                                                <img src="./upload_assets/<?php echo $row['p_image'] ;?>" class="p-3 my-4 border border-red" width="250" height="250" >                                  
                                                <h2><?php echo $row['p_name'] ?></h2>
                                                <h4>Rs.<?php echo $row['p_price'] ?>/-</h4>
                                                <div class="bottom">
                                                <div class="badge badge-primary"><?php echo $row['p_subcategory'] ?></div>
                                                <br>
                                                <a href="#"><div class="btn btn-success mt-2">Add to Cart</div></a>
                                                <a href="product-page.php?PID=<?php echo $row['PID'] ?>&p_name=<?php echo $row['p_name']; ?>" target="_blank"><div class="btn btn-primary mt-2">View More</div></a>
                                                </div>
                                              </div>
                                          </div>
                                      </div>

                                <?php

                                
                            
                            }
                        }                        
                    
                    ?>
        


        </div>
    </div>
</div>



    <script type="text/javascript" src="js/filter.js"></script>
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