<?php
session_start();
include 'functions/post-functions.php';

if(isset($_POST['post'])){
    addPost();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/main-style.css"> -->
    <!-- <link rel="stylesheet" href="css/add-post.css"> -->
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
        <div class="container-fluid bg-primary bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-pen-nib me-3"></i>Post</h2>        
        </div>
    </header>
    <main class="container w-50 mx-auto">

        <a href="posts.php" class="text-secondary text-decoration-none mb-3 d-block"><i class="fa-solid fa-chevron-left me-2"></i>Back to Posts</a>

        <h2 class="display-4 text-center my-4"><i class="far fa-edit me-1"></i>Add Post</h2>

        <div class="col-10 mx-auto">
            <form method="post">
                <input type="text" name="title" class="form-control border-end-0 border-start-0 border-top-0 border-2 border-dark rounded-0 mb-4 shadow-none" placeholder="TITLE" required autofocus>

                <input type="date" name="date_posted" class="form-control border-end-0 border-start-0 border-top-0 border-2 border-dark rounded-0 mb-4 shadow-none" required>

                <select name="category_id" class="form-select border-end-0 border-start-0 border-top-0 border-2 border-dark rounded-0 mb-4 shadow-none" required>
                    <?php
                    displayCategories();
                    ?>
                </select>

                <textarea name="message" class="form-control border-end-0 border-start-0 border-top-0 border-2 border-dark rounded-0 mb-4 shadow-none" rows="7" placeholder="MESSAGE"></textarea>

                <div class="input-group">
                    <span class="input-group-text bg-dark bg-opacity-75 rounded-0 text-white">Author</span>
                    <select name="author_id" class="form-select border-end-0 border-start-0 border-top-0 border-2 border-dark rounded-0 shadow-none">
                    <?php
                    displayUsers();
                    ?>
                    </select>
                </div>
                
                <button type="submit" name="post" class="btn btn-dark w-100 mt-5 text-uppercase">Post</button>
            </form>
        </div>
    </main>
</body>

</html>