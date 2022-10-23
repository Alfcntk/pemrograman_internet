<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php  
        $ans1 = $_POST['ans1'];
        $ans2 = $_POST['ans2'];
        $ans3 = $_POST['ans3'];
        $ans4 = $_POST['ans4'];
        $correct = 0;
        if (!empty($_POST)) {
            if ($ans1 == 5){
                $correct++;
            } else {
                echo "<p>You can't add!</p>";
            } 
            if ($ans2 == 4){
                $correct++;
            } else {
                echo "<p>You can't subtract!</p>";
            }
            if ($ans3 == 48) {
                $correct++;
            } else {
                echo "<p>You can't multiply!</p>";
            }
            if ($ans4 == 5) {
                $correct++;
            } else {
                echo "<p>You can't divide!</p>";
            }
            echo "<p>You got $correct correct!</p>";
            $grade = ($correct / 4) * 100;
            if ($correct == 0) {
                echo (<p>You are dumb.</p>);
            } else ($correct == 1) {
                echo "<p>You need to really, reallt work on arithmetic.</p>";
            } elseif ($correct == 2) {
                echo "<p>You really need to work on arithmetic.</p>";
            } elseif ($correct == 3) {
                echo "<p>You did o.k.</p>";
            } else {
                echo "<p>Great Job! You aced it!</p>";
            }
        } else {
            echo "<p>Please take the quiz.</p>";
        }
        ?>
        <form action="quiz.php" method="post">
            <p>What is 2 + 3></p>
            <input type="number" name="ans1">
            <p>What is 5 - 1?</P>
            <input type="number" name="ans2">
            <p>What is 6 x 8?</p>
            <input type="number" name="ans3">
            <p>What is 10 &#247; 2?</p>
            <input type="number" name="ans4">
            <p>CLick submit (or submit query in firefox) to see your results!</p>
            <input type="submit">
        </form>
    </body>
</html>
