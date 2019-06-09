<?php
include_once "Shape.php";
include_once "Triangle.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
    $color = $_POST["color"];
    if (is_numeric($name) || $side1 <= 0 || $side2 <= 0 || $side3 <= 0 || is_numeric($color)){
        echo "Error syntax! Enter again!";
    }elseif (($side1 + $side2) > $side3 && ($side2 + $side3) > $side1 && ($side1 + $side3) > $side2){
        $triangle = new Triangle($name, $side1, $side2, $side3, $color);
        $triangle->toString();
    }else{
        echo "NOT the Triangle! Enter again 3 sides";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[**Bài tập] Thiết kế và triển khai lớp Triangle</title>
    <style>
        form {
            margin-left: 35%;
        }
        h2 {
            color: blue;
            margin-left: 10%;
        }
        .display {
            width: 320px;
            height: 250px;
            margin: 0;
            padding: 10px;
            border: 1px #dd33dd solid;
        }
        input[type=text]{
            width: 63%;
        }
        input[type=submit] {
            color: red;
            margin-left: 60px;
            width: 30%;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Triangle class design and implementation</h2>
        <fieldset>
            Enter name:
            <input type="text" name="name" size="30" placeholder="Enter name">
            <br>Enter the edge length a:
            <input type="number" name="side1" size="30" placeholder="Enter Side 1">
            <br>Enter the edge length b:
            <input type="number" name="side2" size="30" placeholder="Enter Side 2">
            <br>Enter the edge length c:
            <input type="number" name="side3" size="30" placeholder="Enter Side 2">
            <br>Enter color:
            <input type="text" name="color" size="30" placeholder="Enter Color">
            <br>Display:
            <input type="submit" value="result" size="30">
        </fieldset>
    </div>
</form>
</body>
</html>
