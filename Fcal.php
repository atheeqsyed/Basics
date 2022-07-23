<!DOCTYPE html>
<?php
$val1 = $_POST['first'];
$val2 = $_POST['second'];
$opr_ = $_POST['opr'];
$result = '';
switch ($opr_) {
    case "+":
        $result = $val1 + $val2;
        break;
}
?>

<body>
    <form action="" method="post" id="quiz-form">
        <p>
            <b>First Number</b> <input type="number" name="first" id="first" required="required" value="<?php echo $first_num; ?>" />
        </p>
        <p>
            <b>Second Number</b> <input type="number" name="second" id="second" required="required" value="<?php echo $second_num; ?>" />
        </p>
        <p>
            <b>Result</b> <input readonly="readonly" name="result" value="<?php echo $result; ?>">
        </p>
        <input type="submit" name="opr" value="+" />
        <!-- <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" /> -->
    </form>
</body>

</html>