<table>
    <tr>
        <td>First Name</td>
        <td><input type="text" name="fname" id="fname"></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="lname" id="lname"></td>
    </tr>
    <tr>
        <td>Result</td>
        <td><input type="text" id="result"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="button" id="btn" value="FullName" name="fullname"></td>
    </tr>
</table>


<script>
    var btnElement = document.getElementById('btn');
    btnElement.onclick = function (){
        var firstName=document.getElementById('fname').value;
        var lastName=document.getElementById('lname').value;
        var fullName=firstName+" "+lastName;
        document.getElementById('result').value=fullName;
    }
</script>
