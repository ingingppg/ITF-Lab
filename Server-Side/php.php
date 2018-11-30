<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Percent Calculator</title>
    <link rel="stylesheet" href="percent.css" />
</head>
<center>
<body>
    <img src="head1.jpg" alt="head image" >
    <h1>Percent Calculator</h1>
<div id="table">
<?php

    $a = $_POST["data1"];
    $b = $_POST["data2"];
    $c = ($a/100)*$b;

    echo "<table>
        <tr>
            <th>Percent Calculator</th>
        </tr>
        <tr>
            <td>$a % of $b = $c</td>
        </tr>
        </table>"

?></div><br>
<a href="percent1.html">
  <img src="https://static1.squarespace.com/static/562042ace4b0674069d516d6/t/579997d8b3db2b0bb49d79aa/1498442531266/" alt="back" style="width:50px;border:0;">
</a>
</body>
</center>
</html>