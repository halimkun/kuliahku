<body style="padding: 30px">
</body>
<?php
    //  nilai awal 0
    // batas 30
    for ($i=0; $i <= 30; $i++) { 
        
        $total = $total + $i; // menghitung toral
        echo $i . ", "; // menampilkan 1 - 30 
    }

    // menampilkan total seluruh penjumlahan
    echo "<br> Total : " . $total; 

?>