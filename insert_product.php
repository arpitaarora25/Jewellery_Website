<?php
include ('../includes/connect.php');
if (isset($_POST['prod_inserted'])){
    $item_title= $_POST['second'];
    $item_desc= $_POST['third'];
    $item_kw= $_POST['fourth'];
    $item_category= $_POST['fifth'];
    $item_brand= $_POST['sixth'];

    //accessing images 
    $item_img1= $_FILES['seventh']['name'];

    //accessing img temp name
    $temp_img1= $_FILES['seventh']['tmp_name'];
 
    
    $item_price= $_POST['ninth'];
    $item_status="true";
    //check condition
    if ($item_title=="" || $item_desc=="" || $item_kw==""|| $item_category=="" || $item_brand=="" || $item_price==0|| $item_img1=="" ){
        echo "<script> alert('Please fill all the fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_img1,"./product_images/$item_img1");
        

        //insert query
        $insert_query= "insert into items(item_title, item_decription,item_keyword,category_id,brand_id,item_img1,item_price,item_data,item_status) 
        values ('$item_title','$item_desc','$item_kw','$item_category','$item_brand','$item_img1','$item_price',NOW(),'$item_status')";

        $resultant = mysqli_query($con, $insert_query);

        if($resultant){
            echo "<script>alert('successfully inserted products !')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme= "dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="prod_form.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nixie+One&display=swap');
        </style>
</head>
<body>
    <div class="container text-center my-3" id="header" style="font-size: 2.8rem;font-family: Nixie+One; font-weight:lighter">
    <h1>Admin Dashboard</h1>

    <h2>Insert Products</h2>
    </div>

    <div class="container">
<form action ="" method="POST" enctype="multipart/form-data">

  <div class="mb-3 w-50 m-auto">
    <label for="prod_title" class="form-label">Product Title</label>
    <input type="text" name= "second"class="form-control" id="prod_title" aria-describedby="emailHelp" placeholder="enter product name">
  </div>
  <div class="mb-3 w-50 m-auto">
    <label for="prod_desc" class="form-label">Product Description</label>
    <input type="text" name= "third"class="form-control" id="prod_Desc" aria-describedby="emailHelp" placeholder="enter product description">
  </div>
  <div class="mb-3 w-50 m-auto">
    <label for="prod_kw" class="form-label">Product Keyword</label>
    <input type="text" name= "fourth"class="form-control" id="prod_kw" aria-describedby="emailHelp" placeholder="enter product keyword">
  </div>
  <div class="mb-3 w-50 m-auto">
    <label for="prod_cat" class="form-label">Product Category</label>
    <select id="prod_cat"  name= "fifth"class="form-select">
        <option value = "1">
            <?php 
            $select_query= "select * from category";
            $result_query = mysqli_query($con,$select_query);

            while ($row_data = mysqli_fetch_assoc($result_query)){
                $cat_name = $row_data['category_title'];
                $cat_id =$row_data['category_id'];

                echo "<option value = '1'>$cat_name</option>";
            }
            ?>
        </option>
    </select>
  </div>
  <div class="mb-3 w-50 m-auto">
    <label for="brand_cat" class="form-label">Product Brand</label>
    <select id="brand_cat" name= "sixth" class="form-select">
        <option value = "1">
        <?php 
            $select_query= "select * from brands";
            $result_query = mysqli_query($con,$select_query);

            while ($row_data = mysqli_fetch_assoc($result_query)){
                $b_name = $row_data['brand_name'];
                $b_id =$row_data['brand_id'];

                echo "<option value = '1'>$b_name</option>";
            }
            ?>
        </option>
    </select>
  </div>
  <div class="mb-3 w-50 m-auto">
    <label for="prod_img1" class="form-label">Product Image </label>
    <input type="file"  name= "seventh" class="form-control" id="prod_img1" aria-describedby="emailHelp" placeholder="enter product image 1 " required="required">
  </div>
  <div class="mb-3 w-50 m-auto">
    <label for="prod_price" class="form-label">Product Price</label>
    <input type="number " name= "ninth" class="form-control" id="prod_price" aria-describedby="emailHelp" placeholder="enter price of product ">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label"  name= "tenth" for="exampleCheck1">The product is verified.</label>
  </div>
  <div class= "mb=3 m-auto">
  <button type="submit" class="btn btn-primary" name="prod_inserted">Submit</button>
  </div>
  <br>
  <br>
</form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>