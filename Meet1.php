<html>
    <head>
        <title> Latihan 1 </title>
    </head>
    <body>
        <form action="" method="post">
            <label for="nama" id="nama">Masukan Nama: </label>
            <input type="text"name="nama">
            <button type ="submit"name="submit">Proses</button>
        </form>
        <?php
            if (isset($_POST['submit'])) {
                echo "Selamat Datang, " ."<b>" .$_POST{'nama'} ."</b>";
            }
        ?>
    </body>
</html>