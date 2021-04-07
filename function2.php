<?php
$word='';
$character='';
if(isset($_POST['btn']))
{

    function wordCharacterCount($data)
    {

        $givenString = $data['given_string'];
        $result = array();
        $result['totalNumberOfCharacter'] = strlen($givenString);
        $result['totalNumberOfWord']  = str_word_count($givenString);
        return $result;

    }
    $result1=wordCharacterCount($_POST);
    $character = $result1['totalNumberOfCharacter'];
    $word = $result1['totalNumberOfWord'];
}

?>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter your String</td>
            <td><input type="text" name="given_string"></td>
        </tr>
        <tr>
            <td>Total number of word</td>
            <td><input type="text" name="" value="<?php echo $word; ?>"></td>
        </tr>
        <tr>
            <td>Total number of character</td>
            <td><input type="text" name="" value="<?php echo $character; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>

    </table>
</form>
