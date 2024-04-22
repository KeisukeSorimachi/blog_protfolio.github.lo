<?php
session_start();

include 'functions/category-functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Category</title>
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
        <div class="container-fluid bg-success bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-folder me-3"></i>Category</h2>
        </div>
    </header>

    <main class="container">
        <div class="w-50 mx-auto">
            <form method="post">
                <div class="row">
                    <div class="col text-end">
                        <label for="category-name" class="mt-2">Add Category</label>
                    </div>
                    <div class="col ps-0">
                        <input type="text" name="category_name" id="category-name" class="form-control" required autofocus>
                    </div>
                    <div class="col px-0">
                        <button type="submit" name="add" class="btn btn-success text-uppercase fw-bold">Add</button>
                    </div>
                </div>
            </form>
            <?php
            if(isset($_POST['add'])){
                addCategory();
            }
            ?>
        </div>
        
        <table class="table table-striped table-hover w-50 mx-auto text-center mt-5">
            <thead class="table-dark text-uppercase">
                <th>Category ID</th>
                <th>Category Name</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                displayCategories();
                ?>
            </tbody>
        </table>
        
    </main>
</body>

</html>