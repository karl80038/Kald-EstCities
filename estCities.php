<?php
    require_once ('config.php');
    if (isset($_REQUEST["value"]))
    {
        $command = $dbConnection -> prepare("INSERT INTO game(question, answer, usrAnswer) VALUES (?,?,?)");
    
        //Anname käsu päringutele parameetrid
        $command -> bind_param("sss", $_REQUEST[$question], $_REQUEST[$answer], $_REQUEST["value"]);
    
        //Käivitame käsu
        $command -> execute();
        //Aadressiribas päringuparameetrite kustutamine
    
        header("Location: $_SERVER[PHP_SELF]");
    
        //Sulge ühendus andmebaasiga
        $dbConnection -> close();
    }
    


?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arvamismäng Kald</title>
</head>
<body>
    <?php
        $city1 = "Tallinn";
        $city2 = "Tartu";
        $city3 = "Pärnu";
        $city4 = "Narva";
        $city5 = "Haapsalu";
        $randomCity = "";

        $randomnumber = rand(1, 5);

        switch ($randomnumber)
        {
            case 1:
                $randomCity = $city1;
            break;
            case 2:
                $randomCity = $city2;
            break;
            case 3:
                $randomCity = $city3;
            break;
            case 4:
                $randomCity = $city4;
            break;
            case 5:
                $randomCity = $city5;
            break;
        }
        
        $question = "_" . substr($randomCity, 1, strlen($randomCity));
        
        echo "<p>Mis on järgneva linna esimene täht?</p>";
        echo "<br><br>";
        echo $question;
        echo "<br>";
        
    ?>
    <br><br>

    <form action="estCities.php">
            Minu vastus: <input type = "text" name="value">
            <input type="submit" value="Esita vastus">
            <br><br>
    </form>

</body>
</html>