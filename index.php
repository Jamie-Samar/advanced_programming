<?php
    echo '<h1>Jamie Samar</h1>';
?>
</div>
<!--////////////////// CALCULATOR //////////////////-->
<div>
<html>
    <head>
        <title>Index</title>
        <h1>Calculator</h1>
    </head>
    <body>
        <form>
            <p>Input first number:</p>
            <input type = "number" name = "num1">
            <p>Input second number:</p>
            <input type = "number" name = "num2">
            <br> </br>
                 <button type = "+" name = "+" value = "+">+</button>
                 <button type = "-" name = "-" value = "-">-</button>
                 <button type = "*" name = "*" value = "*">*</button>
                 <button type = "/" name = "/" value = "/">/</button>
            
        </form>

        <?php            
                if(is_numeric($_GET['num1']) && is_numeric($_GET['num2']))
                {
                    // Calculate total
                    if(isset($_GET['+']))
                    {
                      $total = $_GET['num1'] + $_GET['num2'];	
                      echo "<h3>{$_GET['num1']} {$_GET['+']} {$_GET['num2']} = {$total}</h3>";
                    }
                    if(isset($_GET['-']))
                    {
                      $total = $_GET['num1'] - $_GET['num2'];	
                      echo "<h3>{$_GET['num1']} {$_GET['-']} {$_GET['num2']} = {$total}</h3>";
                    }
                    if(isset($_GET['*']))
                    {
                      $total = $_GET['num1'] * $_GET['num2'];	
                      echo "<h3>{$_GET['num1']} {$_GET['*']} {$_GET['num2']} = {$total}</h3>";
                    }
                    if(isset($_GET['/']))
                    {
                      $total = $_GET['num1'] / $_GET['num2'];	
                      echo "<h3>{$_GET['num1']} {$_GET['/']} {$_GET['num2']} = {$total}</h3>";
                    }                                  
                } 
        ?>    
    </body>
</html>
</div>
<!--////////////////// FINIDING GCD //////////////////-->
</div>
<html>
    <head>
        <h1>Finding GCD</h1>
    </head>
    <body>
        <form>
            <p>Input first number:</p>
            <input type = "number" name = "num1">
            <p>Input second number:</p>
            <input type = "number" name = "num2">
            <br> </br>
            <button type = "submit" name = "submit" value = "submit">Submit</button>
        </form>
    <?php 
       if (isset($_GET['submit'])) 
       {
           if ($_GET['num1'] > $_GET['num2'])
           {
             $temp = $_GET['num1'];
             $_GET['num1'] = $_GET['num2'];
             $_GET['num2'] = $temp;
           }
           for($i = 1; $i < ($_GET['num1']+1); $i++)
           {
             if ($_GET['num1']%$i == 0 and $_GET['num2']%$i == 0)
             $gcd = $i;
           }
           echo "<h4> GCD of {$_GET['num1']} and {$_GET['num2']} is: $gcd</h4>";
        }
    ?>    
    </body>
</html>
</div>