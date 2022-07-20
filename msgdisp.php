//Alert popup
<form name="testForm" id="testForm" method="POST">
    <input type="submit" name="btnpost" value="submit" autofocus onclick="return true;" />
</form>
<?php
$alertmessage = "Form submitted!";
if (isset($_POST["btnpost"])) {
    echo "
<script type = \"text/javascript\">
alert('$alertmessage');
</script>
";
}
?>
