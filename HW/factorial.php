<?php

class Factorial {

    public function factCalculate() {

        $num = $_POST["number"];
        //$num = 4;
        $factorial = 1;
        for ($x=$num; $x>=1; $x--)
        {
            $factorial = $factorial * $x;
        }
        echo "Factorial of $num is $factorial";

    }
}

//Factorial::factCalculate();



?>

<html>
<head>

</head>
<body>
<form action="" method="post">
    <label for="number">Select number and tap Enter</label>
    <input type="number" name="number">
</form>
</body>
</html>


<?php

if (!empty($_POST['number'])) {
    $fact = new Factorial();
    $fact->factCalculate();
}
?>