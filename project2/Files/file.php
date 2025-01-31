<?php
    // $a=readfile("ex.html");
    // echo $a;

    //Opening a file with --> fopen
    // $fptr = fopen("file.txt","r");
    // if(!$fptr){
    //     die("Unable to open");
    // }
    // $content = fread($fptr,filesize("file.txt"));
    // echo $content;
    // fclose($fptr);


    //fgets and fgetc
    // $fptr = fopen("file.txt","r");
    // while($a = fgets($fptr)){
    //     echo $a; 
    // }

    // $fptr = fopen("file.txt","r");
    // while($a=fgetc($fptr)){
    //     if($a==".")break;
    //     echo $a;
    // }
    // fclose($fptr);





    $fptr = fopen("writedemo.txt","w");
    fwrite($fptr,"New file is created I guess");
    fclose($fptr);



?>
