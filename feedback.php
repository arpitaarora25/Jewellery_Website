<?php 
include ('../includes/connect.php');
if (isset ($_POST['brandsubmit'])){
    $fbtext=$_POST['bname'];
    $insert_query= "insert into brands(brand_name) values('$fbtext')";
    $result = mysqli_query($con,$insert_query);

    if ($result){
        echo "<script> alert('Brand has been saved!')</script>";
    }

}

?>


<form action="" method="post" class="mb-2">
    <div class="input-group">
        <span class="input-group-text" id="basic-add2">
        <label for="brand" class="form-label" style="margin:0 40px;">WE WOULD LOVE TO HEAR YOU OUT </label>
        <!--datalist insert karni hai yaahn pe achha lagega-->
        <input class="form-control" id="brand" name="bname" aria-describedby="basic-add2" placeholder="Enter Brand Name" >
    </div>
    <br>
    <br>
    <div class="input-group">
        <span class="input-group-text" id="basic-addon1">
        <label for="exampleInputEmail1" class="form-label"></label>
        <input type="submit" class="form-control" name="brandsubmit" id="exampleInputEmail1" aria-describedby="basic-addon1" value="submit">
        </span>
    </div>
</form>