<?php include('../includes/config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Admin | PCBlinders</title>
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

    <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
            <div class="nav-brand text-white display-2 fw-bold py-5">Admin Panel</div>
            <div class="sidebar-fixed vh-100">
                <ul class="nav flex-column">
                    <li class="nav-item my-3">
                        <a class="nav-link text-white" href="index.php">
                            Home
                        </a>
                    </li>

                    <li class="nav-item my-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle text-black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="addproducts.php"">Add Products</a>
                            <a class="dropdown-item" href="viewproduct.php"">View Products</a>
                        </div>
                        </div>
                    </li>

                    <li class="nav-item my-3">
                        <a class="nav-link text-white" href="orders.php">
                            Orders
                        </a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="nav-link text-white" href="history.php">
                            History
                        </a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="nav-link text-white" href="customers.php">
                            Customers
                        </a>
                    </li>
                </ul>
            </div>
        </nav>