<?php
if(isset($_POST['btn']))
{
    $sum=0;
    $startingNumber = $_POST['starting_number'];
    $endingNumber = $_POST['ending_number'];
    for($i=$startingNumber;$i<=$endingNumber;$i++)
    {
        $sum+=$i;
    }
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
            <td>Result</td>
            <td><input type="number" name="result" value="<?php echo $sum;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>

    </table>
</form>
