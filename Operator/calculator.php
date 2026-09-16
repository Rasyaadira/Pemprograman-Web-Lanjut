<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <link>
    </head>
    <body>
        <form method="post" action="calculator.php">
            <input name="number1" type="text" class="form-control"/><br><br>
                <select name="operation"><br><br>
                    <option value="plus">plus</option>
                    <option value="minus">Minus</option>
                    <option value="times">Times</option>
                    <option value="divided by">Divided By</option>
                </select><br><br>
                <input name="number2" type="text" class="form-control" /><br><br>
            <input name="submit" type="submit" value="Calculate" class="btn btn-primary"/>
        </form>
        <div class="container" style="margin-top: 50px">
        
            <?php
                if(isset($_POST['submit']))
                {
                    if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
                    {
                        if($_POST['operation'] == 'plus')
                        {
                            $total = $_POST['number1'] + $_POST['number2']; 
                        }
                        if($_POST['operation'] == 'minus')
                        {
                            $total = $_POST['number1'] - $_POST['number2']; 
                        }
                        if($_POST['operation'] == 'times')
                        {
                            $total = $_POST['number1'] * $_POST['number2']; 
                        }
                        if($_POST['operation'] == 'divided by')
                        {
                            $total = $_POST['number1'] / $_POST['number2']; 
                        }
                        echo "<h1>= {$total}</h1>";
                    } else {
                        echo 'Numeric values are required';
                    }
                }
            ?>
        </div>
    </body>
</html>