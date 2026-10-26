<?php
if (mysqli_query($con,$insert_reg)){
    if(!is_dir("upload/profile_picture")){
        mkdir("uploads/profile_picture")
    }
}

?>