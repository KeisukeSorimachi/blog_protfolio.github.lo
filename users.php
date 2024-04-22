<?php
session_start();
include 'functions/user-functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/main-style.css"> -->
</head>

<body>
    <header class="mb-5">
    <?php 
        if($_SESSION['role'] == 'U')
        {
            include 'user-menu.php';
        }else{
            
        include 'admin-menu.php';
        }
        ?>
        <div class="container-fluid bg-warning bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-user me-3"></i>User</h2>
        </div>
    </header>
    <main class="container">
        <div class="w-50 mx-auto">
            <form method="post">
                <h3 class="display-4">Add User</h3>
                <div class="row mb-2">
                    <div class="col-6">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required autofocus>
                    </div>
                    <div class="col-6">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">
                        <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" required>
                    </div>
                    <div class="col-6">
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                    </div>
                </div>
                <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" minlength="8" required>
                <button type="submit" name="add" class="btn btn-warning w-100 text-uppercase text-white fw-bold">Add</button>
            </form>
            <?php
            // Placed here for the ALERT message
            if(isset($_POST['add'])){
                addUser();
            }
            ?>
        </div>
        
        <table class="table table-hover table-striped my-5">
            <thead class="table-dark text-uppercase">
                <th>User ID</th>
                <th>Full Name</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Username</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                displayAllUsers();
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>