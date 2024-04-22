<?php
session_start();
include 'functions/category-functions.php';

$cat_details = getCategory($_GET['cat_id']);

if (isset($_POST['update'])) {
    updateCategory($_GET['cat_id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Update Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/update-category.css"> -->
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
        <div class="container-fluid bg-success bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-folder me-3"></i>Category</h2>
        </div>
    </header>

    <main class="container">
        <div class="w-50 mx-auto">
            <h2>Update Category</h2>
            <form method="post">
                <input type="text" name="cat_name" class="form-control mb-4"
                    value="<?= $cat_details['category_name'] ?>" autofocus>
                <div class="row">
                    <div class="col">
                        <a href="categories.php" class="btn btn-outline-success w-100">Cancel</a>
                    </div>
                    <div class="col">
                        <button type="submit" name="update"
                            class="btn btn-success text-uppercase w-100 mb-2">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>