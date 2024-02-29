<?php include './includes/config.php'; ?>
<?php 
    if (isset($_POST['submit'])) {

        $Sname = $_POST['Sname'];
        $Smail = $_POST['Smail'];
        $Sproductname = $_POST['Sproductname'];
        $Scategory = $_POST['Scategory'];
        $S_productdesc = $_POST['S_productdesc'];
        $Sdesc = $_POST['Sdesc'];
        $Sprice = $_POST['Sprice'];
        $Simage = htmlspecialchars(basename($_FILES["image"]["name"]));
        //The above variable holds the name of the image uploading

    
        $sql = "INSERT INTO `s_product`(`SID`, `Sname`, `Smail`, `Sproductname`, `Scategory`, `S_productdesc`, `Sdesc`, `Sprice`, `Simage`) VALUES (null,'$Sname','$Smail','$Sproductname','$Scategory','$S_productdesc','$Sdesc','$Sprice','$Simage')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>window.alert('New record created successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        // Check if the file was uploaded without errors
        // Check if the file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {

        $targetDir = "./request_assets/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the file already exists
        if (file_exists($targetFile)) {
            header("sell-product-page.php/message?=File Already Exist");
            $uploadOk = 0;
        }
        // Check if the file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if the file size is within the limit (in this case, 2MB)
        if ($_FILES["image"]["size"] > 2 * 1024 * 1024) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow only certain image file formats (you can customize this list)
        $allowedFormats = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            //rename($targetFile)
            // Move the uploaded file to the designated folder
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                echo "<script>window.alert('The image " .htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.');</script>";
            } else {
                echo "Sorry, there was an error uploading your file." ;
            }
        }
    } else {
        echo "Error: No file uploaded.";
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Your Product | PCBlinders</title>
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
    
    <div class="container-fluid bg01 vh-120">
    <div class="sell-title pt-1">
    <h1>Sell your product on PCBlinders</h1>
    <a href="terms.php" class="h4 text-primary">Please read the terms and condition before registering.</a>
    <br>
    <small> <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Return to Home</a></small>
    </div>

    <form action="" method="POST" class="form container p-4" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="p_name" class="form-label text-white">Seller Name</label>
        <input type="text" class="form-control" name="Sname" value="<?php echo $_SESSION['Uname'];?>">
    </div>

    <div class="mb-3">
        <label for="p_code" class="form-label text-white">Seller Mail ID</label>
        <input type="text" class="form-control" name="Smail" value="<?php echo $_SESSION['Umail'];?>" readonly>
    </div>

    <div class="mb-3">
        <label for="p_code" class="form-label text-white">Product Name</label>
        <input type="text" class="form-control" name="Sproductname">
    </div>

    <div class="mb-3">
        <label for="p_category" class="form-label text-white">Category</label>
        <select class="form-select" name="Scategory">
            <option value="pc">PC</option>
            <option value="laptop">Laptop</option>
            <option value="audio">Audio</option>
            <option value="adapter">Adapters</option>
            <option value="cable">Cables</option>
            <option value="peripheral">Peripheral</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="p_desc" class="form-label text-white">Description about Product</label>
        <textarea class="form-control" name="S_productdesc" cols="30" rows="3"></textarea>
        <small>This must contain the information about the Processor,RAM, and the configurations it requirs.</small>
    </div>

    <div class="mb-3">
        <label for="p_desc" class="form-label text-white">Reason to Sell</label>
        <textarea class="form-control" name="SDesc" cols="30" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="p_price" class="form-label text-white">Your Price Quote</label>
        <input type="text" class="form-control" name="Sprice">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label text-white">Upload Image</label>
        <input type="file" class="form-control" name="image">
        <small class="form-text text-white">Please note that this image will be displayed on the client side.</small>
    </div>

    <button type="submit" name="submit" class="btn w-100 btn-primary">Request Verification</button>
</form>
    </div>

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