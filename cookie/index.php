<form action="" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="text" name="password" placeholder="Password"><br>

    <input type="submit" name="s1" value="Tizimga kirish"><br>
</form>

<?php
$people = [ 
    [
        "id" => 1 ,
        "usename" => "Mohira",
        "login"=> "Mirzakariyeva",
        "password" => "1q2w3e4R",
        
    ],

    [
        "id" => 2 ,
        "name" => "Svetlana",
        "login"=> "Zuyeva",
        "password" => "1q2w3e4T",
    ],

    [
        "id" => 3 ,
        "name" => "Aygul",
        "login"=> "Alibekova",
        "password" => "1q2w3e4Y",
    ],

    [
        "id" => 4 ,
        "name" => "Shahodat",
        "login"=> "Djurayevna",
        "password" => "1q2w3e4U",
    ],

    [
        "id" => 5 ,
        "name" => "Alyona",
        "login"=> "Savicheva",
        "password" => "1q2w3e4O",
    ] 
] ;

$loginArr = [ ] ;
$passwordArr = [ ] ;

foreach($people as $person){
    array_push($loginArr , $person["login"]) ;
    array_push($passwordArr , $person["password"]) ;
}


// for($i = 0 ; $i <= count($people) ; $i++){

//     setcookie("login" , $people["login"]) ;
//     setcookie("password" , $people["password"]) ;
// }



if(isset($_POST["s1"])){
    $log = $_POST["login"] ;
    $pass = $_POST["password"] ;

    // if($_COOKIE["login"] == $log and $_COOKIE["password"] == $pass){
        for($i = 0 ; $i < count($people) ; $i++){
            if($pass == $passwordArr[$i] and $log == $loginArr[$i] ){ ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <h1>Bosh sahifa</h1>
            </body>
            </html>
<?php
         }else{
?>
<form action="" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="text" name="password" placeholder="Password"><br>

    <input type="submit" name="s1" value="Tizimga kirish"><br>
</form>
<?php
}}
}
?>