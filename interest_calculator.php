<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h1>Sample Interest Calculator</h1>
    <table>
        <tr>
            <td>
                <label>Principal Amount:</label>
            </td>
            <td>
                <input style="text-align:right;" onkeyup="calculate_interest_function()" type="number" id="principal_amount" required>
            </td>
        </tr>
        <tr>
            <td>
             <label>Interest Rate (%):</label>
            </td>
            <td>
             <input style="text-align:right;" onkeyup="calculate_interest_function()" type="number" id="rate" required>
            
            </td>
        </tr>
        <tr><td colspan="2"><hr></td></tr>
        <tr>
            <td>
                <label>Interest Amount:</label>
            </td>
            <td>
                <input readonly style="border-color:transparent;text-align:right;" type="text" id="rate_amount">
            </td>
        </tr>
    </table>
</body>
</html>

<script>

    function calculate_interest_function() {

        const principal_amount = Number(document.getElementById('principal_amount').value);
        const rate = Number(document.getElementById('rate').value);

        const interest_amount = principal_amount*(rate/100);

        document.getElementById('rate_amount').value = interest_amount.toFixed(2).replace(/\B(?=(\d{3})+(?!\d)+\.)/g, ",");
    }
</script>