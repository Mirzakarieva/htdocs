<?php session_start() ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="login" placeholder="login"><br>
        <input type="text" name="password" placeholder="password"><br>
        <input type="submit" name="s1" value="OK"><br>

    </form>
</body>
</html>

<?php
if(isset($_GET["s1"])){
    $login =$_GET["login"] ;
    $password = $_GET["password"] ;

    if($login == "Admin" && $password == "Macbook"){
        $_SESSION["check"] = 1;

        header("locaation:index.php") ;
    }else{
        echo "Login yoki parol hato" ;
    }
  
}
?>