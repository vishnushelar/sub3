<?php
include 'submodule/config.php';
include 'submodule/sub2/getid.php';
include 'submodule/common/getname.php';

var_dump($id);
$query = "UPDATE test SET name='".$name."' WHERE id=".$id;
$result = mysqli_query($con, $query) or die(mysqli_error($con));

if(mysqli_affected_rows($con)>0){
    
    $checkq = " Select * from test where id=".$id;
    $checkr = mysqli_query($con, $checkq) or die(mysqli_error($con));
        
    if(mysqli_num_rows($checkr)>0){
            $check = mysqli_fetch_array($checkr);
            var_dump($check);
        }
}

