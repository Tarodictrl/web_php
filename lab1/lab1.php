<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Лабораторная работа №1</title>
</head>
<body>
    <div class="title">
        <h1>
            Лабораторная работа №1
        </h1>
    </div>
</body>
</html>

<?php
echo '<table border=1>';
for ($i=0; $i<=255; $i += 125)
{
    echo '<tr>';
 
    for ($j=0; $j<=255; $j += 125)
    {
        for ($k=0; $k<=255; $k += 125)
        {
            echo '<td style="background-color:RGB('.$i.', '.$j.', '.$k.');"> rgb('.$i.', '.$j.', '.$k.')</td>';
        }
    }
 
    echo '</tr>';
}
echo'</table>';
echo '<table border=1>';
for ($i=1; $i<=10; $i++)
{
    echo '<tr>';
 
    for ($j=1; $j<=10; $j ++)
    {
        echo '<td>'.$i*$j.'</td>';
    }
 
    echo '</tr>';
}
echo'</table>';
?>