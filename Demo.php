<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>

<body>
    <form method="get">
        <label>Enter X Value</label>
        <input type="number" name="Value1" placeholder="0" required /><br>
        <label>Enter Y Value</label>
        <input type="number" name="Value2" placeholder="0" required /><br>
        <!-- <input type="submit" name="submit" value="Submit" /><br> -->
        <input type="submit" name="sub" value="+" />
        <input type="submit" name="sub" value="-" />
        <input type="submit" name="sub" value="*" />
        <input type="submit" name="sub" value="/" />

    </form>


</body>

</html>
<?PHP

// if (isset($_GET["submit"])) {

//     echo "Sum of Value1 And Value2 :: " . $_GET['Value1'] +  $_GET['Value2'];
// }

$value1 = $_GET['Value1'];
$value2 = $_GET['Value2'];
// $num1 = $_GET['Value1'];
// $num2 = $_GET['Value2'];
$calcu = $_GET['sub'];

    function calculate($n1,$n2, $calcu) // set $calcu as parameter
    {
        switch($calcu)
        {
        case "+": // here you have to use colons not semi-colons
            $compute = $n1 + $n2; 
            break;
        case "-":
            $compute = $n1 - $n2; 
            break;
        case "*":
            $compute = $n1 * $n2; 
            break;
        case "/":
            $compute = $n1 / $n2; 
            break;
        }
        return $compute; // returning variable
    }
echo "$calcu <br /> <br /> 1st Number: $value1 <br /> 2nd Number: $value2 <br /><br />";
echo "Answer is:" .calculate($value1,$value2, $calcu); // you need to pass $calcu as argument of that function
?>

