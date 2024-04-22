<?php
session_start();
include 'functions/post-functions.php';
$post_row = getPostDetails($_GET['post_id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Post Details</title>
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
    <main class="container w-50 ">
        <div class="row mb-4">
        <a href="posts.php" class="text-secondary text-decoration-none mb-3 d-block"><i class="fa-solid fa-chevron-left me-2"></i>Back to Posts</a>

                <a href="update-post.php?post_id=<?= $_GET['post_id'] ?>" class="text-secondary col text-end text-decoration-none  fs-4" ><i class="fa-solid fa-pen me-1"></i>Edit</a>
                
        </div>

        <article class="bg-light p-3">
            <h1 class="display-5"><?= $post_row['post_title'] ?></h1>
            <p class="small">
                By: <span class="text-primary"><?= $post_row['first_name']." ".$post_row['last_name'] ?></span>
                &emsp;
                <?= date("F d, Y", strtotime($post_row['date_posted'])) ?>
                &emsp;
                <?= $post_row['category_name'] ?>
            </p>

            <p class="lead mt-5"><?= nl2br($post_row['post_message']) ?></p>
        </article>
    </main>
</body>

</html>