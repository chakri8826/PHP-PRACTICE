<?php 
    // print_r($_FILES);
    if($_FILES["fileToUpload"]){
        $filename = $_FILES["fileToUpload"]["name"];
        echo $filename;

        $upload_path="./uploads/".$filename;
        //  $upload_path="./uploads/myfile.pdf"; //we can give our customized name for our file.
        // echo $upload_path;

        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $upload_path)){
            echo " -> file up-loaded";
        }
        else{
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $upload_path) || die("Failed to upload");
        }
    }
    else{
        die("no file found");
    }
?>
