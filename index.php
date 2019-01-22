<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Result:</h1>
</body>
</html>
<?php
$input = $_POST["txt"];                 //nay gia tri tu o input
$input2 = $_POST["txt2"];
$selec = $_POST["select"];              //nay gia tri cua option.
if($selec == "+"){
    $result = $input+$input2;
    $toantu = '+';
}else{
    if($selec == "-"){
        $result = $input-$input2;
        $toantu = '-';
    }else{
        if($selec == "*"){
            $result = $input*$input2;
            $toantu ='*';
        }else{
            $result = $input/$input2;
            $toantu = '/';
        }
    }
}
echo
    $input." ".$toantu." ".$input2.' = '.$result;
?>