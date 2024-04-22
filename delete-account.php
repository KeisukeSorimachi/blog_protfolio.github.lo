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
    <title>Blogen: Delete Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/main-style.css"> -->
</head>

<body class="bg-light">
    <header>
    <?php 
        if($_SESSION['role'] == 'U')
        {
            include 'user-menu.php';
        }else{
            
        include 'admin-menu.php';
        }
        ?>
        <div class="container-fluid bg-secondary text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-user"></i> Profile</h2>        
        </div>
    </header>
    <main class="container col-xl-3 my-5">
        <a href="profile.php" class="text-secondary text-decoration-none  mb-3 d-block"><i class="fa-solid fa-chevron-left me-2"></i>Back to Profile</a>
        <div class="card">
            <div class="card-header bg-danger bg-gradient text-light">
                <h2><i class="fa-solid fa-exclamation-circle me-2"></i> Delete Account</h2>
            </div>
            <div class="card-body">
            <?php
            if (isset($_POST['delete_account'])) {
                deleteAccount($_SESSION['account_id']);
            }
            ?>
            <form method="post">
               <div class="form-group mb-5">
                  <label for="password">Enter Password</label>
                  <input type="password" name="password" id="password" class="form-control" autofocus required>
               </div>

               <button type="submit" name="delete_account" class="btn btn-outline-danger btn-sm w-100">Delete Account</button>
            </form>
         </div>
      </div>
   </main>
</body>

</html>