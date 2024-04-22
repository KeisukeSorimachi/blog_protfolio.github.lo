<?php
session_start();
include 'functions/post-functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/main-style.css"> -->
</head>

<body>
    <header class="mb-5">
        <?php 
        if($_SESSION['role'] == "U"){
            include 'user-menu.php';
        } else {
            include 'admin-menu.php';
        }
        ?>
        <div class="container-fluid bg-primary bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-pen-nib me-3"></i>Post</h2>        
        </div>
    </header>

    <main class="container">
        <div class="text-end">
            <?php
            if($_SESSION['role'] == "U"){
            ?>
            <a href="add-post-by-user.php" class="btn btn-lg btn-outline-dark"><i class="fa-solid fa-edit"></i> Add Post</a>
            <?php
            }else {
            ?>
            <a href="add-post.php" class="btn btn-lg btn-outline-dark"><i class="fa-solid fa-edit"></i> Add Post</a>
            <?php
            }
            ?>
        </div>
        <table class="table table-hover table-striped mt-3">
            
        <?php
                if($_SESSION['role'] == 'U')
                {
                    ?>
                    <thead class="table-dark">
                        <th>Post ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date Posted</th>
                        <th></th>
                    </thead>
    
            <?php
                }else{
                    
                ?>
                <thead class="table-dark">
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Date Posted</th>
                        <th></th>
                </thead>

        <?php
                }
                ?>
            <tbody>
                <?php
                if($_SESSION['role'] == 'U')
                {
                    displayUserPosts($_SESSION['account_id']);
                }else{
                    
                    displayAllPosts();
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>