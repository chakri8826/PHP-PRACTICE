<!-- GET AND POST METHODS -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <input type="submit" value="Log in">
    </form>
</body>
</html>
-->




<!-- MATHS FUNCTIONS -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">X</label>
        <input type="text" id="name" name="X" required>
        <br><br>

        <label for="password">Y</label>
        <input type="text" id="password" name="Y" required>
        <br><br>
        
        <input type="submit" value="Total">
    </form>
</body>
</html>
-->




<!-- isset() and empty() -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>UserName:</label>
        <input type="text" name="username">
        <br><br>
        <label>Password:</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html> -->





<!-- RADIO BUTTONS -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>
            <input type="radio" name="fruit" value="apple">
            Apple
        </label><br>
        <label>
            <input type="radio" name="fruit" value="banana">
            Banana
        </label><br>
        <label>
            <input type="radio" name="fruit" value="orange">
            Orange
        </label><br>
        <label>
            <input type="radio" name="fruit" value="grape">
            Grape
        </label><br><br>
        
        <button type="submit" name="but">Submit</button>
    </form>
</body>
</html> -->






<!-- SANITIZATION -->
<form action="index.php" method="post">
        <label>
            UserName: 
            <input type="text" name="name">
        </label><br>
        <label>
            Age: 
            <input type="text" name="age">
        </label><br>
        <label>
            Email 
            <input type="text" name="email">
        </label><br>
        <input type="submit" name="submit" value="submit">
</form>

<?php
    // GET AND POST METHODS
    /*
        echo "\${$_GET["name"]} <br>";
        echo "\${$_GET["password"]} <br>";

        echo "{$_POST["name"]} <br>";
        echo "{$_POST["password"]} <br>";
    */



    //MATHS FUNCTIONS
    // $x = $_POST["X"];
    // $y = $_POST["Y"];
    
    // // $total = rand($x,$y);
    // $total =max(0,-1,1,2,3,4,5);
    // echo "The total value is {$total}";

    // $date =date("l");
    // echo $date;
    // echo date("Y-m-d H:i:s");



    //FOR LOOP
    // for ($i = 1; $i <= 5; $i++) {
    //     echo $i . "<br>";
    // }



    //INDEXED-ARRAYS
    // $foods = array("oragne","apple",1);
    // // array_pop($foods);
    // array_shift($foods);

    // foreach ($foods as $food) {
    //     echo $food . "<br>";
    // }


    //ASSOCIATIVE ARRAYS
    // $person = array(
    //     "name" => "John",
    //     "age" => 30,
    //     "gender" => "male"
    // );

    // foreach ($person as $key => $value) {
    //     echo "{$key} => {$value} <br>";
    // }




    //isset() and empty()
    // foreach($_POST as $key => $value) {
    //     echo "$key : $value <br>";
    // }

    // if(isset($_POST["login"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];
    //     if(empty($username)){
    //         echo "Username is not set";
    //     }
    //     else if((empty($password))){
    //         echo "Password is empty";
    //     }
    //     else{
    //         echo "Hello $username";
    //     }
    // }




    //RADIO BUTTONS
    // if(isset($_POST["but"])){
    //     if(isset($_POST["fruit"])){
    //         $item = $_POST["fruit"];
    //         echo $item;
    //     }
    //     else{
    //         echo "Select anything";
    //     }
    // }



    //STRINGS
    // $name = "Kommu Chakradhar";
    // $rev = str_shuffle($name);
    // echo $rev;

    // $cmp = strcmp($name,"B");
    // echo $cmp;

    // $fn = explode(" ",$name);
    // echo $fn[1];

    // $imp = array("Kommu","Chakradhar");
    // $fn = implode(" ",$imp);
    // echo $fn;







    //SANITIZATION
    // if(isset($_POST["submit"])){
    //     //enocde avutay remove avvavu u can see encoded in View Page Source
    //     $user = filter_input(INPUT_POST,"name", FILTER_SANITIZE_SPECIAL_CHARS);
    //     //removes all except digits
    //     $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    //     //removes special symbols 
    //     $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
    //     echo "Hello $user your age is $age and your email is $email";
    // }

    // VALIDATION
    if(isset($_POST["submit"])){
        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
        $user = $_POST["name"];
        if(empty($age)){
            echo "Not valid age <br>";
        }
        else{
            echo "Hello $user your age is $age <br>";
            
        }
        if(empty($email)){
            echo "Not Valid Email <br>";
        }
        else{
            echo "Hello $user your email is $email";
        }
    }





?>
