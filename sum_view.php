<?php
$result='';
if(isset($_POST['btn']))
{
    require_once 'odd_even_sum.php';
    $object_odd_even_sum = new Odd_Even_Sum();
    $sum=$object_odd_even_sum->oddevensum($_POST);
}
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Starting Number</td>
            <td><input type="number" name="starting_number"></td>
        </tr>
        <tr>
            <td>Ending Number</td>
            <td><input type="number" name="ending_number"></td>
        </tr>
        <tr>
            <td>Your Choice</td>
            <td>
                <input type="radio" name="choice" value="even">Even
                <input type="radio" name="choice" value="odd">Odd
            </td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="number" name="result" value="<?php echo $sum;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>

    </table>

</form>
