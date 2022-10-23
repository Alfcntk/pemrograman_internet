<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form action="" method="post">
            <p>Siapakah nama anda?</p>
            <input type="text" name="ans1">
            <p>Berapakah tanggal lahir kamu?</P>
            <input type="text" name="ans2">
            <p>Dimana tempat tinggal kamu?</p>
            <input type="text" name="ans3">
            <p>Sebutkan makanan favorite kamu?</p>
            <input type="text" name="ans4">
            <p>Sebutkan minuman favorite kamu?</p>
            <input type="text" name="ans5">
            <button type="submit" name="submit" id="submit">Lihat Hasil Saya <button>
        </form>
        <?php  
        if(isset($_POST['submit'])){
        $ans1 = $_POST['ans1'];
        $ans2 = $_POST['ans2'];
        $ans3 = $_POST['ans3'];
        $ans4 = $_POST['ans4'];
        $ans5 = $_POST['ans5'];
        $correct = 0;
        $cat = "";
            if ($ans1 == "Alfiani Chantika"){
                $correct+=20;
                if ($ans2 == "01072001"){
                    $correct+=20;
                    if ($ans3 == "Sambong Jaya") {
                        $correct+=20;
                        if ($ans4 == "Roti Kukus") {
                            $correct+=20;
                            if ($ans5 == "Susu Murni") {
                                $correct+=20;
                            } 
                        } 
                    }
                } 
            }
            switch ($correct) {
                case 100:
                  $cat = "Sangat Baik";
                  break;
                case 80:
                  $cat = "Baik";
                  break;
                case 60:
                  $cat = "Cukup";
                  break;
                case 40:
                  $cat = "Kurang";
                  break;
                case 20:
                  $cat = "Kurang Sekali";
                  break;
                default:
                  $cat = "Semua Jawaban Salah";
                  break;
              }
              echo "<h4 class='text-primary mt-4'>Nilai anda: $correct</h4>";
              echo "<h4 class='text-primary' >Keterangan: $cat </h4>";
        }

        ?>
    </body>
</html>
