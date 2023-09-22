<?php
$motor = $_GET['motor'];

switch($motor){
    case "Honda Metik":
        echo "Saya Punya Motor Honda Metik";
        break;
    case "Yamaha Beat":
        echo "Saya punya motor yamaha beat";
        break;
    case "Zusuki":
        echo "Saya Punya motor zusuki";
        break;
    default:
        echo "saya belum punya motor";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="get">
        <select name="motor" id="">
            <option value="Honda Metik">Honda Metik</option>
            <option value="Yamaha Beat">Honda Yamaha</option>
            <option value="Zusuki">Zusuki</option>
            <option value="Belum Ada">Belum Ada</option>
        </select>
        <button type = "submit">Cek Motor</button>
    </form>
</body>
</html>