<!DOCTYPE html>
<html>
<head>
    <title>Hasilnya</title>
</head>
<body>

    <h3>Hasilnya adalah</h3>
    <?php
        $pilihan = $_POST["pilihan"];
        $jumlah = $_POST["jumlah"];
        $sisabagi;
        if ($pilihan=="genap") {
            $sisabagi=0;
        }else{
            $sisabagi=1;
        }

        for($i=0 ; $i<$jumlah*2 ; $i++){ 
            if($i%2==$sisabagi) {
                echo $i." ";
            }
        }
        
        
    ?>

    <form action="ganjilgenap2.php" method="post">
        <button type="submit">Mau coba lagi ?</button>
    </form>
</body>
</html>



        