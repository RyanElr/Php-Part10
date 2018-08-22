<?php
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexAge = '/^[0-9]{1,2}$/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\0-9]+$/';
?>
<!DOCTYPE html>
<html lang = "fr" dir = "ltr">
    <head>
        <meta charset = "utf-8" />
        <title>TP2 Part10</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <ul>
                <li>
                    <label for = "gender">Civilité : </label>
                    <select name = "gender">
                        <option value="Mr">Mr</option>
                        <option value="Mme">Mme</option>
                        <option value="Other">Autre</option>
                    </select>
                </li>
                <li>
                    <label for = "lastname">Nom : </label>
                    <input type = "text" name = "lastname" value="<?php
                    if(isset($_POST['lastname'])){
                        echo $_POST['lastname'];
                    }
                    ?>" />
                </li>
                <li>
                    <label for = "firstname">Prénom : </label>
                    <input type = "text" name = "firstname" value="<?php
                    if(isset($_POST['firstname'])){
                        echo $_POST['firstname'];
                    }
                    ?>" />
                </li>
                <li>
                    <label for = "age">Age : </label>
                    <input type = "text" name = "age" value="<?php
                    if(isset($_POST['age'])){
                        echo $_POST['age'];
                    }
                    ?>"/>
                </li>
                <li>
                    <label for = "society">Société : </label>
                    <input type = "text" name = "society" value="<?php
                    if(isset($_POST['society'])){
                        echo $_POST['society'];
                    }
                    ?>"/>
                </li>
            </ul>
            <input type="submit" value="Envoyer !" />
        </form>
        <?php
        if (!empty($_POST)) {
            ?>
            <p>
                <?php
                if(isset($_POST['gender']) && preg_match($regexName, $_POST['gender']))
                {
                    echo 'Civilité : ' . $_POST['gender'];
                }
                ?>
            </p>
            <p>
                <?php
                if(isset($_POST['lastname']) && preg_match($regexName, $_POST['lastname']))
                {
                    echo 'Nom : ' . $_POST['lastname'];
                }
                else{
                        echo 'Veuillez renseigner votre Nom.' ;
                    }
                ?>
            </p>
            <p>
                <?php
                if(isset($_POST['firstname']) && preg_match($regexName, $_POST['firstname']))
                {
                    echo 'Prénom : ' . $_POST['firstname'];
                }
                else{
                        echo 'Veuillez renseigner votre Prénom.' ;
                    }
                ?>
            </p>
            <p>
                <?php
                if(isset($_POST['age']) && preg_match($regexAge, $_POST['age']))
                {
                    echo 'Age : ' . $_POST['age'];
                }
                else{
                        echo 'Veuillez renseigner votre Âge.' ;
                    }
                ?>
            </p>
            <p>
                <?php
                if(isset($_POST['society']) && preg_match($regexText, $_POST['society']))
                {
                    echo 'Société : ' . $_POST['society'];
                }
                
                else{
                        echo 'Veuillez renseigner la société pour laquelle vous travaillez.' ;
                    }
                
                ?>
            </p>
            <?php
        }
        ?>
    </body>
</html>