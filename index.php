<?php 
include('commonfunction.php');
$ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <nav class="nav navbar navbar-lg-expand bg-dark">
            <div class="container-fluid">
                <img src="logo.jpeg" alt=".." style="height=100px; width:110px;"/>
                <nav class="nav navbar navbar-lg-expand ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"style="font-size:2rem;">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!--user details-->
        <div class="bg-dark p-2 text-center" style="font-family:Nixie+One; font-size:2rem;">Products , Categories & Brands </div>
        <br>
        <br>
        <!--order details-->
        <div class="row">
            <div class="class-md-12 p-2 bg-dark">
                <div class="text-light text-center" style="font-size:1.3rem" >Admin Name</div>
            </div>
            <div class="button text-center" style="display:flex;justify-content: space-evenly;align-items:center;">
                <button><a href="insert_product.php" class="nav-link m-1" style="font-size:2rem;padding:2px;border-radius:25px;font-weight:lighter;"> Products</a></button>
                <button><a href="index.php?feedback" class="nav-link  m-1" style="font-size:2rem;padding:2px;border-radius:25px;font-weight:lighter;">Brands</a></button>
                <button><a href="index.php?searchmore" class="nav-link  m-1" style="font-size:2rem;padding:2px;border-radius:25px;font-weight:lighter;"> Categories</a></button>
            </div>
        </div>
        </div>
        <br>
        <br>


        <div class="container">
            <?php 
            if(isset($_GET['searchmore'])){
                include('searchprod.php');
            }
            if(isset($_GET['feedback'])){
                include('feedback.php');
            }

           
            ?>
        </div>
        <div class="container-fluid text-center">
        <footer class="blocktype-footer" style = "font-size:1.2rem;">Details of users are private and safe.</footer>
        </div>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>