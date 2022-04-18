<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Test</title>
</head>
<body>
    <?php 
        print "Ene bol Function page";
        echo add()."<br>";
        echo add()."<br>";
        echo add()."<br>";
        
        echo nemeh(50,23)."<br>";
        echo hasah(50,23)."<br>";
        echo maximum(5660,243)."<br>";

        function add(){ // utga butsaaj buii funkts
            return "function shuuu!";
        }

        function nemeh($a,$b){
            return $a+$b;
        }
        function hasah($a, $b){
            return $a-$b;
        }
        function maximum($a,$b){
            if($a > $b){
                return $a;
            }else
                return $b;
            
        }
    ?>
    
</body>
</html>