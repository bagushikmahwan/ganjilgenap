<!DOCTYPE html>
<html>
<head>
    <title>Cetak N-Bilangan ganjil/genap</title>
</head>
<body>
        <h3><strong>Yuk Cetak n-bilangan ganjil / genap</strong></h3>

    <form action="hasil2.php" method="post">
        <label for="pilihan">Mau Deretan Ganjil atau Genap ?</label>
        <select name="pilihan" id="pilihan">
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
        </select>
        <br>
        <label for="jumlah">Berapa banyak ?</label>
        <input type="text" name="jumlah" required>
        <br>
        <button type="submit">Yuk Cetak!</button>
    </form>
</body>
</html>



        