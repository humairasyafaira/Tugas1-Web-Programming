<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c.php</title>
    <style>
        body {
            margin: 10;
            padding: 0;
        }

        .kotak1 {
            width:100px;
            height:100px;
            background-color: red;
            border: 2px solid black;
            text-align: center;
            line-height: 80px;
            font-size: 40px;
        }
        .kotak2 {
            width: 100px;
            height: 100px;
            background-color: red;
            border: 2px solid black;
            text-align: center;
            line-height: 80px;
            font-size: 40px;
            float: left;
        }
        .kotak3 {
            width: 100px;
            height: 100px;
            background-color: red;
            border: 2px solid black;
            text-align: center;
            line-height: 80px;
            font-size: 40px;
            float: left;
        }

        .clear {
            clear: left;
        }
    </style>
</head>
<body>
    <div class="kotak1">1</div>
    <div class="kotak2">2</div><div class="kotak2">2</div><div class="clear"></div>
    <div class="kotak3">3</div><div class="kotak3">3</div><div class="kotak3">3</div>
    
</body>
</html>
