<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2 - 0163</title>

    <style> 
        body {padding:30px;} table, td, th {border: 1px solid #bbb; padding: 10px;} 
        table { border-collapse: collapse;} 
    </style>

</head>
<body>
    <table>
        <?php
            for ($baris=1; $baris <= 5; $baris++) { 
                echo "<tr> \n";
                for ($kolom=1; $kolom <= 5; $kolom++) { 
                    $tambah = $kolom * $baris;
                    echo "<td>$tambah</td> \n";
                }
                echo "<tr> \n";
            }
        ?>
    </table>
</body>
</html>