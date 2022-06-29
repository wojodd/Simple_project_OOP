<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="my.css">
    <style>

    </style>
    <title>Home</title>
</head>

<body>

    <form action="" method="POST">
        <h1>مرحبا بك في مطعم وجود</h1>
        <label>عدد الأشخاص للعشاء </label>
        <input type="text" name="numDinner" value=""> <br>

        <label> عدد الأشخاص للحلا </label>
        <input type="text" name="numDessert" value=""><br>

        <label> عدد الأشخاص للمشروبات </label>
        <input type="text" name="numDrink" value=""><br>

        <input type="submit" value="كم السعر">
    </form>


    <?php

    include('class\calcPrice.php');
    if (isset($_POST["numDinner"]) && isset($_POST["numDessert"]) && isset($_POST["numDrink"])) { //لأن بتكون فارغة في البداية فلازم نحط هذا الشرط عشان مايطلع ايرور
        $numDinner  = $_POST["numDinner"];  // استدعاء المتغيرات من الانبوت تيكست
        $numDessert = $_POST["numDessert"];
        $numDrink   = $_POST["numDrink"];


        $bill = new calcPrice(); //create object 
        echo $bill->dinner($_POST["numDinner"])->dessert($_POST["numDessert"])->Drink($_POST["numDrink"])->bill; //method chining
    }
    ?>

</body>

</html>
