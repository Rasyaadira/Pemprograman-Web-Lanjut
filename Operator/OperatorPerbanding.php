<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 5;
        echo '<h4><u>Post-increment</u></h4>';
        echo '$a = '.$a.' <br/>';
        echo '$a akan bernilai 5 = '.$a++.' (opearsi $a++) <br/>';
        echo '$a akan bernilai 6 = ' .$a. ' <br/>';

        $a = 5;
        echo '<h4><u>pre-increment</u></h4>';
        echo '$a = '.$a.' <br/>';
        echo '$a akan bernilai 5 = '.++$a.' (opearsi ++$a) <br/>';
        echo '$a akan bernilai 6 = ' .$a. ' <br/>';

        $a = 5;
        echo '<h4><u>Post-decrement</u></h4>';
        echo '$a = '.$a.' <br/>';
        echo '$a akan bernilai 5 = '.$a--.' (opearsi $a--) <br/>';
        echo '$a akan bernilai 6 = ' .$a. ' <br/>';

        $a = 5;
        echo '<h4><u>pre-decrement</u></h4>';
        echo '$a = '.$a.' <br/>';
        echo '$a akan bernilai 5 = '.--$a.' (opearsi --$a) <br/>';
        echo '$a akan bernilai 6 = ' .$a. ' <br/>';
    ?>
</body>
</html>