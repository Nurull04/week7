<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form id="calculate_sum" action = "index.php" method = "POST">
        <?php
            $data = $_POST;
            if(isset($data['submit'])){
                $number1 = $data['number1'];
                $number2 = $data['number2']; 
                $operation = $data['operation'];

                switch($operation){
                    case "Add":
                        $result = $number1 + $number2;
                        break;
                    case "Subtract":
                        $result = $number1 - $number2;
                        break;
                    case "Multiply":
                        $result = $number1 * $number2;
                        break;
                    case "Divide":
                        $result = $number1 / $number2;
                        break;
                    default:
                        $result = 0;
                        break;
                }
                echo "<div class='result'>";
                echo "<p>Number 1 = " . $number1 . "</p>";
                echo "<p>Number 2 = " . $number2 . "</p>";
                echo "<p>Operation = " . $operation . "</p>";
                echo "<p>Result = " . $result . "</p>";
                echo "</div>";
                echo "<br>";
                echo "<br>";
            }        
        ?>
            <div class="group">
                <label for="number1">Number 1:</label>
                <input type="number" id="number1" name="number1" required>
            </div>
            <div class="group">
                <label for="number2">Number 2:</label>
                <input type="number" id="number2" name="number2" required>
            </div>
            <div class="group">
                <label for="operation">Operation:</label><br>
                <input type="radio" name="operation" value = "Add" required>Add<br>
                <input type="radio" name="operation" value = "Subtract" required>Subtract<br>
                <input type="radio" name="operation" value = "Multiply" required>Multiply<br>
                <input type="radio" name="operation" value = "Divide" required>Divide<br>
            </div>
            <button type = "submit" name = "submit">Calculate</button> 
        </form>
    </div>
</body>
</html>