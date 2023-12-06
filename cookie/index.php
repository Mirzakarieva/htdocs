<form action="" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="text" name="password" placeholder="Password"><br>

    <input type="submit" name="s1" value="Tizimga kirish"><br>
</form>

<?php
include"data.php" ;

foreach($people as $person){
    array_push($loginArr , $person["login"]) ;
    array_push($passwordArr , $person["password"]) ;
}



if(isset($_POST["s1"])){
    $log = $_POST["login"] ;
    $pass = $_POST["password"] ;
?>
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