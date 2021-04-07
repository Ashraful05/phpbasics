<?php
//require_once './demo.php';
//require_once './example.php';
//
//$obj_demo = new Demo(); //object always displays public method.
//echo $obj_demo->addition(200,100);
//echo '<br>';
////echo $obj_demo->multiplication();
//$obj_example = new Example();
//echo $obj_example->division();
//echo '<br>';
////$obj_demo->addition();
////$obj_demo->subtraction();
/// 
/// 
?>
<?php
$result = '';
if (isset($_POST['btn'])) {
    require_once './full_name.php';
    $object_full_name = new full_name();
    $result = $object_full_name->make_full_name($_POST);
}
?>
<form action="" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="text" name="result" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>

    </table>
</form>