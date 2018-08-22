<?php
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter ='/^[0-9A-z]+$/';
?>      
<!Doctype html>
<html>
       <head>
        <meta charset = "utf-8" />
        <title>TP1 Part10</title>
</head>
<body>
<?php if(empty($_POST)) {
        ?>
        <form action="index.php" method="POST">
                <ul>
                    <li>
                        <label for = "lastname">Nom : </label>
                        <input type = "text" name = "lastname" />
                    </li>
                    <li>
                        <label for = "firstname">Prénom : </label>
                        <input type = "text" name = "firstname" />
                    </li>
                    <li>
                        <label for = "birthDate">Date de naissance : </label>
                        <input type = "date" name = "birthDate" />
                    </li>
                    <li>
                        <label for = "originalCountry">Pays de naissance : </label>
                        <input type = "text" name = "originalCountry" />
                    </li>
                    <li>
                        <label for = "nationality">Nationalité : </label>
                        <input type = "text" name = "nationality" />
                    </li>
                    <li>
                        <label for = "address">Adresse : </label>
                        <input type = "text" name = "address" />
                    </li>
                    <li>
                        <label for = "mail">Email : </label>
                        <input type = "mail" name = "mail" />
                    </li>
                    <li>
                        <label for = "phoneNumber">Téléphone : </label>
                        <input type = "text" name = "phoneNumber" />
                    </li>
                    <li>
                        <label for = "grade">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) : </label>
                        <input type = "text" name = "grade" />
                    </li>
                    <li>
                        <label for = "poleEmploiNumber">Numéro pôle emploi : </label>
                        <input type = "text" name = "poleEmploiNumber" />
                    </li>
                    <li>
                        <label for = "badgeNumber">Nombre de badge : </label>
                        <input type = "number" name = "badgeNumber" />
                    </li>
                    <li>
                        <label for = "codecademy">Liens codecademy : </label>
                        <input type = "text" name = "codecademy" />
                    </li>
                    <li>
                        <label for = "superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                        <textarea rows = "4" cols = "50" name = "superHero" ></textarea>
                    </li>
                    <li>
                        <label for = "hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :    </label>
                        <textarea rows = "4" cols = "50" name = "hacks" ></textarea>
                    </li>
                    <li>
                        <label for = "progExp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                        <textarea rows="4" cols="50" name="progExp" ></textarea>
                    </li>
                </ul>
                <input type="submit" value="Envoyer !" />
</form>
    <?php
        } else {
            if(isset($_POST['lastname'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['lastname'])){
                    echo 'Nom : ' . $_POST['lastname'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['firstname'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['firstname'])){
                    echo 'Prénom : ' . $_POST['firstname'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['birthDate'])){
            ?>
            <p>
                <?php
                if(preg_match($regexDate, $_POST['birthDate'])){
                    echo 'Date de naissance : ' . $_POST['birthDate'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['originalCountry'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['originalCountry'])){
                    echo 'Pays de naissance : ' . $_POST['originalCountry'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['nationality'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['nationality'])){
                    echo 'Nationalité : ' . $_POST['nationality'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['address'])){
            ?>
            <p>
                <?php
                if(preg_match($regexAddress, $_POST['address'])){
                    echo 'Adresse : ' . $_POST['address'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['mail'])){
            ?>
            <p>
                <?php
                if(preg_match($regexMail, $_POST['mail'])){
                    echo 'Email : ' . $_POST['mail'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['phoneNumber'])){
            ?>
            <p>
                <?php
                if(preg_match($regexPhoneNumber, $_POST['phoneNumber'])){
                    echo 'Téléphone : ' . $_POST['phoneNumber'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['grade'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['grade'])){
                    echo 'Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) : ' . $_POST['grade'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['poleEmploiNumber'])){
            ?>
            <p>
                <?php
                if(preg_match($regexNumberLetter, $_POST['poleEmploiNumber'])){
                    echo 'Numéro pôle emploi : ' . $_POST['poleEmploiNumber'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['badgeNumber'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['badgeNumber'])){
                    echo 'Nombre de badge : ' . $_POST['badgeNumber'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['codecademy'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['codecademy'])){
                    echo 'Liens codecademy : ' . $_POST['codecademy'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['superHero'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['superHero'])){
                    echo 'Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? ' . $_POST['superHero'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['hacks'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['hacks'])){
                    echo 'Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) ' . $_POST['hacks'];
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['progExp'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['progExp'])){
                    echo 'Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ? ' . $_POST['progExp'];
                }
                ?>
            </p>
            <?php
            }
        }
        ?>
</body>
</html>