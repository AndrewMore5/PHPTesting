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
    echo "My name is not {$name} and I'm not sitting in the {$location}";
    ?>
</body>
</html>
<?php 
    echo "This is after the html tag! <br>";
?>
