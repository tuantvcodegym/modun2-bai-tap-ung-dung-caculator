<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caculate</title>
    <style>
        #caculate{
            width: 350px;
            height: 250px;
            padding: 5px;
        }
    </style>
</head>
<body>
<div id="caculate">
    <form method="post" action="index.php">
        <fieldset>
            <legend>Caculator</legend>
            First operand:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt"/>
            Operator:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="select">
                <option value="+">Cong</option>
                <option value="-">Tru</option>
                <option value="*">Nhan</option>
                <option value="/">Chia</option>
            </select><br>
            Second operand:<input type="text" name="txt2"/><br>
            <input type="submit" value="Caculate">
        </fieldset>
    </form>
</div>
</body>
</html>