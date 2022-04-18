<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>
        .box{
            background-color: red;
            color: white;
            margin: 5px;
        }
        .sondgoi{
            background-color: blue;
            color: white;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        echo "Hello world PHP";
        echo "<p>Hello world PHP</p>";
        $a = 10;
        $b = 20;
        $sum = $a+$b;
        if($a>$b){
            echo $a." ih bn.";
        }else{
            echo $b." ih bn.";
        }

        echo "<b>2 toonii niilber: ".$sum."</b>";
        for($i=1; $i<=10;$i++){
            
            if($i%2==0){
                echo "<div class='box'>$i</div>";
            }else{
                echo "<div class='sondgoi'>$i</div>";
            }
        }

    ?>
</body>
</html>