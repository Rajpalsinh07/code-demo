<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
    <?PHP

    $value1 = $_GET['Value1'];
    $value2 = $_GET['Value2'];

    function Calc($nub1, $nub2, $operation)
    {
       // $ans = '';
        if ($operation == 'Division' && ($nub2 == 0)) {
            $ans = "No is Not Divided by 0 ";
        } else {
            if ($operation == 'Addition') {
                $ans = $nub1 + $nub2;
            } elseif ($operation == 'Subtraction') {
                $ans = $nub1 - $nub2;
            } elseif ($operation == 'Multiplication') {
                $ans = $nub1 * $nub2;
            } elseif ($operation == 'Division') {
                $ans = $nub1 / $nub2;
            }
            return $ans;
        }
    }

    ?>
</head>

<body>
    <form method="get">

        <label> Enter Value1</label>
        <input type="number" name="Value1" placeholder="0" required /><br>
        <label>Enter Value2</label>
        <input type="number" name="Value2" placeholder="0" required /><br>

        <input type="submit" name="cal" value="Addition" />
        <input type="submit" name="cal" value="Subtraction" />
        <input type="submit" name="cal" value="Multiplication" />
        <input type="submit" name="cal" value="Division" />
        <br><br>


        <select name="operation">
            <option value="" disabled selected>Choose option</option>
            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>

        <input type="submit" name="submit" vlaue="Choose options">
        <br><br>

        <input type="radio" name="radio" value="Addition">Addition
        <input type="radio" name="radio" value="Subtraction">Subtraction
        <input type="radio" name="radio" value="Multiplication">Multiplication
        <input type="radio" name="radio" value="Division">Division

        <input type="submit" name="submit" vlaue="Get Values">
        <br><br>

        <input type="checkbox" name="opt[]" value="Addition">Addition
        <input type="checkbox" name="opt[]" value="Subtraction">Subtraction
        <input type="checkbox" name="opt[]" value="Multiplication">Multiplication
        <input type="checkbox" name="opt[]" value="Division">Division

        <input type="submit" name="submit" vlaue="Get Values chk">

        <br><br>
        <label><?php echo "Value1 is :: " . $value1 . "&nbsp"; ?></label>
        <label><?php echo "Value2 is :: " . $value2; ?></label><br>
        <?php
        $selected = '';
        if (isset($_GET['submit'])) {
            if (!empty($_GET['operation'])) {
                $selected = $_GET['operation'];
                echo "Answer Drop Down is:: " .  Calc($value1, $value2, $selected);
            }
        }
        if (!empty($_GET['radio'])) {
            $selected = $_GET['radio'];
            echo "Answer radio is:: " .  Calc($value1, $value2, $selected);
        }
        if (!empty($_GET['cal'])) {
            $selected = $_GET['cal'];
            echo "Answer  is:: " .  Calc($value1, $value2, $selected);
        }
        if (!empty($_GET['opt'])) {
            $sel = $_GET['opt'];
            $count = count($sel);

            //print_r($sel);

            for ($i = 0; $i < $count; $i++) {

                $selected = $sel[$i];
                echo "Check Box Answer  is:: " .  Calc($value1, $value2, $selected) . "<br>";
            }
        }

        ?>
    </form>


</body>

</html>