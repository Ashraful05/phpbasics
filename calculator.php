<table>
    <tr>
        <td>First Number</td>
        <td><input type="number" name="fnumber" id="fnumber"></td>
    </tr>
    <tr>
        <td>Last Number</td>
        <td><input type="number" name="lnumber" id="lnumber"></td>
    </tr>
    <tr>
        <td>Result</td>
        <td><input type="text" id="result"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="button" value="+" onclick="javaScriptCalculator('+')">
            <input type="button" value="-" onclick="javaScriptCalculator('-')">
            <input type="button" value="*" onclick="javaScriptCalculator('*')">
            <input type="button" value="/" onclick="javaScriptCalculator('/')">
            <input type="button" value="%" onclick="javaScriptCalculator('%')">
        </td>
    </tr>
</table>
<script>
    function javaScriptCalculator(operator){
        var firstNumber = Number(document.getElementById('fnumber').value);
        var lastNumber  = Number(document.getElementById('lnumber').value);
        switch (operator) {
            case "+":
                var output = firstNumber+lastNumber;
                break;
            case '-':
                var output = firstNumber-lastNumber;
                break;
            case '*':
                var output = firstNumber*lastNumber;
                break;
            case '/':
                var output = firstNumber/lastNumber;
                break;
            case '%':
                var output = firstNumber%lastNumber;
                break;
        }
        document.getElementById('result').value=output;
    }
</script>
