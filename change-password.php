<?php
session_start();
include "functions/profile-functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogen: Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/main-style.css"> -->
</head>
<body class="bg-light">
<header class="mb-5">
    <?php 
        if($_SESSION['role'] == 'U')
        {
            include 'user-menu.php';
        }else{
            
        include 'admin-menu.php';
        }
        ?>
        <div class="container-fluid bg-secondary bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-user me-3"></i>Profile</h2>        
        </div>
    </header>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-6">
            <a href="profile.php" class="text-secondary text-decoration-none mb-3 d-block"><i class="fa-solid fa-chevron-left me-2"></i>Back to Profile</a>
        <div class="card">
            <div class="card-header bg-info bg-gradient text-dark">
                <h2 class="text-white">Change Password</h2>
            </div>
            <div class="card-body">
                <?php
                if (isset($_POST['update_password'])) {
                    changePassword($_SESSION['account_id']);
                }
                ?>
                <form method="post">               
                    <div class="mb-5">
                        <label for="current-password">Current Password</label>
                        <input type="password" name="current_password" id="current-password" class="form-control" autofocus required>
                    </div>                
                    <div class="mb-2">
                        <label for="new-password">New Password</label>
                        <input type="password" name="new_password" id="new-password" class="form-control" minlength="8" required>
                    </div>
                    <div class="mb-3">
                        <label for="conf-new">Confirm New Password</label>
                        <input type="password" name="conf_new" id="conf-new" class="form-control" minlength="8" required>
                    </div>

                    <button type="submit" name="update_password" class="btn btn-info text-white float-end">Update Password</button>
                </form>
            </div>
        </div>
            </div>
        </div>
        
    </main>
</body>

</html>