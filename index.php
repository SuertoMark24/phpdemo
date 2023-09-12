<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Test</p>
    <?php




        $fname = "Mark Anthony";
        $lname = "Suerto ";
        $int1 = 1;
        $int2= 2;
        $sum =  $int1 + $int2;


        $t = date("H");
        $favcolor = "red";

        echo "Hi im, $fname $lname  $sum " ;
        echo "<br />";
        if ($t < "20") {
            echo "Have a good day!";
          }
          else{
            echo "Have a good nigth!";
          }
          echo "<br />";

        switch ($favcolor) {

        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
    ?>
</body>
</html>