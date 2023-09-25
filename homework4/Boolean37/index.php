<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="POST">

    <b>(X;Y) , (X1;Y1) - coordinates of two chess board squares. Is it true that the king can move from 1st square to 2nd square in one move?</b><br>

    <label for="">Coordinates of the 1-st square:</label>
    <input type="number" name="x">
    <input type="number" name="y"><br>

    <label for="">Coordinates of the 2-nd square:</label>
    <input type="number" name="x1">
    <input type="number" name="y1"><br>

    <input type="submit" name="s1" value="SEND">
    
    </form>
</body>
</html>