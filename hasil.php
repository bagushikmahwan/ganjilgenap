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

        if($pilihan=="genap"){
            for($i=0 ; $i<$jumlah*2 ; $i++){ 
                if(($i+1)%2==0) 
                continue; 
                echo $i." "; 
            }
        }else{
            for($i=0 ; $i<$jumlah*2 ; $i++){ 
                if($i%2==0) 
                continue; 
                echo $i." ";
            }
        }
        
    ?>

    <form action="ganjilgenap.php" method="post">
        <button type="submit">Mau coba lagi ?</button>
    </form>
</body>
</html>



        