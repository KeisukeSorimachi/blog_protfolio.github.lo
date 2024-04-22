<?php
session_start();
include 'functions/post-functions.php';

$post_row = getPostDetails($_GET['post_id']);

if(isset($_POST['update'])){
    updatePost($_GET['post_id']);        
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Update Blog</title>
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
        <div class="container-fluid bg-primary bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-pen-nib me-3"></i>Post</h2>        
        </div>
    </header>
    <main class="container w-50 mx-auto">

        <a href="post-details.php?post_id=<?= $_GET['post_id'] ?>" class="text-secondary"><i class="fa-solid fa-chevron-left fa-2x"></i></a>

        <h2 class="display-4 text-center my-4"><i class="fa-solid fa-pen"></i> Update Post</h2>

        <div class="col-10 mx-auto">
            <form method="post">
                <input type="text" name="title" class="form-control mb-3" placeholder="TITLE" value="<?= $post_row['post_title'] ?>" required autofocus>

                <input type="date" name="date_posted" class="form-control mb-3" value="<?= $post_row['date_posted'] ?>" required>

                <select name="category_id" class="form-select mb-3" required>
                    <?php
                    displayCategoriesUpdate();
                    ?>
                </select>

                <textarea name="message" class="form-control mb-3" rows="7" placeholder="MESSAGE"><?= $post_row['post_message'] ?></textarea>

                <div class="input-group">
                    <span class="input-group-text bg-dark rounded-0 text-white">Author</span>
                    <select name="author_id" class="form-select">
                        <?php    
                        displayUsers();
                        ?>
                    </select>
                </div>
                
                <button type="submit" name="update" class="btn btn-dark w-100 mt-5 text-uppercase">Update</button>
            </form>
        </div>
    </main>
</body>

</html>