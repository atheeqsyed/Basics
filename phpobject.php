<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Objects</title>
</head>
<body>

<?php
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
 
// Create object from class
$message = new greeting;
var_dump($message);
?>

</body>
</html>
