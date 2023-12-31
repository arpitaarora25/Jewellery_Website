<?php
include('../includes/connect.php');
if (isset($_POST["prod"])){
    $prodname= $_POST['catname'];
    $insert_query= "insert into category (category_title) values('$prodname')" ;
    $result = mysqli_query($con, $insert_query);

    if($result){
        echo "<script>
        alert ('category was saved')</script>";
    }
}

?>


<form action="" method="post" class="mb-2">
    <div class="input-group">
        <span class="input-group-text" id="basic-addon1">
        <label for="exampleInputEmail1" class="form-label">enter category  </label>
        <!--datalist insert karni hai yaahn pe achha lagega-->
        <input type="text" class="form-control" name = "catname"id="exampleInputEmail1" aria-describedby="basic-addon1" placeholder="Search...">
        </span>
    </div>
    <br>
    <br>
    <div class="input-group">
        <span class="input-group-text" id="basic-addon1">
        <label for="exampleInputEmail1" class="form-label"></label>
        <input type="submit" class="form-control" name ="prod" id="exampleInputEmail1" aria-describedby="basic-addon1" value="We are here to help you">
        </span>
    </div>
</form>