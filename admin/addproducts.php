<?php include('../includes/config.php'); 

// Check if the form is submitted
if (isset($_POST['submit'])) {

    $p_name = $_POST['p_name'];
    $p_code = $_POST['p_code'];
    $p_category = $_POST['p_category'];
    $p_subcategory = $_POST['p_subcategory'];
    $p_desc = $_POST['p_post'];
    $p_price = $_POST['p_price'];
    $p_image = htmlspecialchars(basename($_FILES["image"]["name"]));
    //The above variable holds the name of the image uploading

    $sql = "INSERT INTO `products`(`PID`, `p_name`, `p_code`, `p_category`, `p_subcategory`, `p_desc`, `p_price`, `p_image`, `timestamp_column`) VALUES (null,'$p_name','$p_code','$p_category','$p_subcategory','$p_desc','$p_price','$p_image',null)";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Check if the file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {

        $targetDir = "../upload_assets/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the file already exists
        if (file_exists($targetFile)) {
            header("addproducts.php/message?=File Already Exist");
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
                echo "Sorry, there was an error uploading your file.";
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
    <title>Add Products - PCBlinders</title>
    <link rel="icon" href="../assets/PCP-logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
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

<div class="addproducts vh-100 text-white">
    <div class="text-center">
        <h1 class="py-3">PCBlinders - Admin</h1>
        <h2 class="py-2" >Add Products</h2>
        <h3>Product added successfully</h3>
    </div>

    <form action="" method="post" class="form container p-3" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="p_name" class="form-label text-white">Product Name</label>
        <input type="text" class="form-control" name="p_name">
    </div>

    <div class="mb-3">
        <label for="p_code" class="form-label text-white">Product Code</label>
        <input type="text" class="form-control" name="p_code">
    </div>

    <div class="mb-3">
        <label for="p_category" class="form-label text-white">Category</label>
        <select class="form-select" name="p_category">
            <option value="pc">PC</option>
            <option value="laptop">Laptop</option>
            <option value="audio">Audio</option>
            <option value="adapter">Adapters</option>
            <option value="cable">Cables</option>
            <option value="peripheral">Peripheral</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="p_subcategory" class="form-label text-white">Sub Category</label>
        <select class="form-select" name="p_subcategory">
            <option value="high">High End</option>
            <option value="med">Med End</option>
            <option value="low">Low End</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="p_desc" class="form-label text-white">Description</label>
        <textarea class="form-control" name="p_desc" cols="30" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="p_price" class="form-label text-white">Price</label>
        <input type="text" class="form-control" name="p_price">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label text-white">Upload Image</label>
        <input type="file" class="form-control" name="image">
        <small class="form-text text-white">Please note that this image will be displayed on the client side.</small>
    </div>

    <button type="submit" name="submit" class="btn w-100 btn-primary">Submit</button>
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
</body>
</html>