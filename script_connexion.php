<?php

session_start();
$login = $_POST['Login'];
//$pass = password_hash($_POST['Pass'], PASSWORD_DEFAULT);
$pass = $_POST['Pass'];
$salt = "Sh0wU5C4D3f0nc3S4M3r39"; // 22 caractères: a-z A-Z 0-9 . /
$cost = "12";                    // Entre "04" et "21"
$pass=crypt($pass, '$2a$' . $cost . '$' . $salt . '$');
$existe = false;
$dbh = new PDO('mysql:host=showus.fr.mysql;dbname=showus_fr', showus_fr, mysqlshowus);
$stmt = $dbh->prepare("Select count(*) from Membre where pseudoMembre = :login and passMembre = :pass");
$stmt->execute(array(':login' => '' . $login . '', ':pass' => '' . $pass . ''));
$row = $stmt->fetch();

if ($row[0] > 0) {
    $dbh = new PDO('mysql:host=showus.fr.mysql;dbname=showus_fr', showus_fr, mysqlshowus);
    $stmt = $dbh->prepare("Select idMembre from Membre where pseudoMembre = :login and passMembre = :pass");
    $stmt->execute(array(':login' => '' . $login . '', ':pass' => '' . $pass . ''));
    $row = $stmt->fetch();
    $id = $row[0];
    $_SESSION['id'] = $id;
    header("Location: /gestion");
} else {
    header("Location: " . "http://www.showus.fr/connexion.php");

}



                            $members=$dbh->query("Select lastname From members");
                            while ($member = $members->fetch())
                            {
                                echo '<p class="test">'.utf8_decode($member['lastname']).'</p>'.'<br>';
                            }

?>
