<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
    <?PHP
    $ans = '';
    $value1 = $_GET['Value1'];
    $value2 = $_GET['Value2'];

    if (isset($_GET['submit'])) {
        if (!empty($_GET['operation'])) {
            $selected = $_GET['operation'];

            if ($selected == 'Divid' && ( $value2 == 0)) {
                $ans = "No is Not Divided by 0 ";
            } else {

                if ($selected == 'Add') {
                    $ans = $value1 + $value2;
                } elseif ($selected == 'Sub') {
                    $ans = $value1 - $value2;
                } elseif ($selected == 'Multi') {
                    $ans = $value1 * $value2;
                } elseif ($selected == 'Divid') {

                    $ans = $value1 / $value2;
                }
            }
        }
        if (!empty($_GET['radio'])) {
            $selected = $_GET['radio'];

            if ($selected == 'Divid' && ($value2 == 0)) {
                $ans = "No is Not Divided by 0 ";
            } else {

                if ($selected == 'Add') {
                    $ans = $value1 + $value2;
                } elseif ($selected == 'Sub') {
                    $ans = $value1 - $value2;
                } elseif ($selected == 'Multi') {
                    $ans = $value1 * $value2;
                } elseif ($selected == 'Divid') {

                    $ans = $value1 / $value2;
                }
            }
        }
        if (!empty($_GET['opt'])) {
            $x = count($_GET['opt']);
            $selected = $_GET['opt'];
            $result[] = "";

            for ($i = 0; $i < $x; $i++) {
                //echo $selected[$i];

                if ($selected[$i] == 'Divid' && ( $value2 == 0)) {
                    $ans = "No is Not Divided by 0 ";
                } else {

                    if ($selected[$i] == 'Add') {
                        $ans = $value1 + $value2;
                        $result[] = $ans;
                    } elseif ($selected[$i] == 'Sub') {
                        $ans = $value1 - $value2;
                        $result[] = $ans;
                    } elseif ($selected[$i] == 'Multi') {
                        $ans = $value1 * $value2;
                        $result[] = $ans;
                    } elseif ($selected[$i] == 'Divid') {
                        $ans = $value1 / $value2;
                        $result[] = $ans;
                    }
                }
            }
        }
        
    }
    if (!empty($_GET['sub'])) {
        $input = $_GET['sub'];

        if ($input == '/' && ( $value2 == 0)) {

            $ans = "No is Not Divided by 0 ";
        } else {

            if ($input == '+') {
                $ans = $value1 + $value2;
            } elseif ($input == '-') {
                $ans = $value1 - $value2;
            } elseif ($input == '*') {
                $ans = $value1 * $value2;
            } elseif ($input == '/') {

                $ans = $value1 / $value2;
            }
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

        <input type="submit" name="sub" value="+" />
        <input type="submit" name="sub" value="-" />
        <input type="submit" name="sub" value="*" />
        <input type="submit" name="sub" value="/" />
        <br><br>


        <select name="operation">
            <option value="" disabled selected>Choose option</option>
            <option value="Add">Addition</option>
            <option value="Sub">Subtraction</option>
            <option value="Multi">Multiplication</option>
            <option value="Divid">Division</option>
        </select>

        <input type="submit" name="submit" vlaue="Choose options">
        <br><br>

        <input type="radio" name="radio" value="Add">Addition
        <input type="radio" name="radio" value="Sub">Subtraction
        <input type="radio" name="radio" value="Multi">Multiplication
        <input type="radio" name="radio" value="Divid">Division

        <input type="submit" name="submit" vlaue="Get Values">
        <br><br>

        <input type="checkbox" name="opt[]" value="Add">Addition
        <input type="checkbox" name="opt[]" value="Sub">Subtraction
        <input type="checkbox" name="opt[]" value="Multi">Multiplication
        <input type="checkbox" name="opt[]" value="Divid">Division

        <input type="submit" name="submit" vlaue="Get Values chk">


        <br><br>
        <label><?php echo "Value1 is :: " . $value1 . "&nbsp"; ?></label>
        <label><?php echo "Value2 is :: " . $value2; ?></label><br>
        <label><?php echo "Answer is :: " . $ans; ?></label><br>
        <label><?php if (!empty($result)) {
                    echo "Check Box data is ::" . implode(",", $result);
                }  ?></label>
    </form>


</body>

</html>