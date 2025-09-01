<?php 
    echo "This is outside the doctype! <br>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">      
</head>
<body>
    <?php
    // This is a comment. It should nbe in the PHP arae
    echo "Hello PHP <br>";
    echo "This should be on a new line? <br>";
    echo "Value 1" . 'Thing 2' . "Thing 3!!! <br>";
     /* This is a comment
     THat spans
     MULTIPLE LINES
     If you see this I have done something wrong
     */
    $name = "Richard";
    $location = "corner";
    echo "My name is " . $name . " and I'm sitting in the " . $location . "!<br>";
    echo "My name is not {$name} and I'm not sitting in the {$location}<br>"; // Using '' will show {$name} not the variable
    echo gettype($name). "<br>";
    var_dump($name);
    echo "<br>";
    var_dump(is_string($name)); //Can be used to check arrays, doubles, booleans, integers etc
    echo "<br>"
    ?>
</body>
</html>
<?php 
echo "<br><br><br>";
echo "This is after the html tag! <br>";
$array1 = [
    'ski' => 'G-Tol',
    'Tan' => "TV",
    'AST' => [
        'Over',
        'Dutch',
        'Inter'
    ]
    ];
echo $array1['ski'] . "<br>";
// For Loop
$i = 1;
while ($i <= 5){
    echo $i . " ";
    $i++;
}
?>


<form action="" method="GET">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Date:</label>
    <input type="date" nmae="date" required><br>
    <button type="submit">Click me so NOTHING happens!</button>
</form>