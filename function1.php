<?php
$result = '';
if(isset($_POST['btn']))
{
    function makeFullName($data)
    {
        $firstName = $data['first_name'];
        $lastName  = $data['last_name'];
        $fullName  =$firstName.' '.$lastName;
        return $fullName;
    }
    $result = makeFullName($_POST);
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
            <td>Full Name</td>
            <td><input type="text" name="full_name" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
        
    </table>
</form>
