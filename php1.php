<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>video hicheel 1</title>
    <style>

    </style>
</head>
<body>
    <h1>My first php code</h1>
    <?php
    
    echo "Hello... my name is <p>timo</p>";
    print "Hello";
    // variable
    $x = 5;
    $y = 15;
    $name = "Timo";
    $z =$x + $y;

    if($x > $y){
        echo "X ni Y ees ih bn.";
    }else{
        echo "Y ni X ees ih bn.";
    }


    echo "<br>2 tooni niilber: ".$z." garlaa...";
    echo "My name is ".$name;

    for($i=0; $i<5; $i++){
        echo "<div class='red'>$i</div>";
    }


    ?>
</body>
</html>