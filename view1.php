<?php
$result='';
if(isset($_POST['btn']))
{
    require_once './full_name1.php';
    $object_full_name_1 = new Full_Name_1();
    $result = $object_full_name_1->full_name_1($_POST);
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
        <td><input type="text" name="result" value="<?php echo $result;?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btn" value="Submit"></td>
    </tr>
    
</table>

</form>