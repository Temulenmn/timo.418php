<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array php_check_syntax</title>
</head>
<body>
    <?php 
    print "indexed Array:<br>";
    $cars = array("bmw","sonata","toyota","prius",20);
    $cars[0]="bmw";//ingej bichsen ch deerh tei yag adilhan ajillana
    echo $cars[0];
    echo count($cars);// cars gg arrayiig toolno dotor ni heden shirheg element bgaag haruulna!

    // for($i=0; $i<count($cars);$i++){
    //     echo "<div>$cars[$i]</div>";
    // }

    foreach($cars as $c){
        echo "<div>cars: ".$c."</div>";
    }


    ?>
    
</body>
</html>