<?php
    //GIVES CURRENT DIRECTORY
    // echo getcwd();
    

    //GOES TO THAT DIRECTORY
    // chdir("uploads");
    // echo getcwd();


    // The <pre> tag is useful when displaying structured data (like arrays or objects) in a readable way on a webpage. 
    echo "<pre>";
    $dir = ".";
    print_r(scandir($dir));
    echo "</pre>";



?>