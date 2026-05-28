<!-- Un message codé pour Indy
Indiana Jones, le célèbre professeur/archéologue/aventurier, vient de récupérer trois papyrus antiques contenant chacun un message codé !
Heureusement, il a également découvert la manière de le déchiffrer, mais c'est un peu compliqué de le faire à la main.
Il te donne alors les instructions pour que tu développes un petit script permettant d'automatiser le processus.
Cela pourra être d'autant plus utile s'il rencontre à nouveau ce système de chiffrement plus tard.

Voici comment procéder :

Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".
Récupère ensuite la sous-chaîne de la longueur du chiffre-clé en commençant à partir du 6ème caractère.
Remplace les chaînes '@#?' par un espace.
Pour finir, inverse la chaîne de caractères.
Lance ton code sur chacun des messages suivants, et poste ensuite le code PHP que tu as écrit, ainsi que les textes déchiffrés en commentaires.

message 1 : 0@sn9sirppa@#?ia'jgtvryko1
message 2 : q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj
message 3 : aopi?sgnirts@#?sedhtg+p9l! -->

<?php
$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";


//etape 1 : Calculer la longeur de la chaîne et la diviser par 2

$divLenghtMes1 = floor(strlen($message1) / 2);
$divLenghtMes2 = floor(strlen($message2) / 2);
$divLenghtMes3 = floor(strlen($message3) / 2);

//etape 2: La sous chaine du caractére 6 

$subMes1 = substr($message1, 5, $divLenghtMes1);
$subMes2 = substr($message2, 5, $divLenghtMes2);
$subMes3 = substr($message3, 5, $divLenghtMes3);

// etape 3: str-replace() Remplace les chaînes '@#?' par un espace

$replaceMs1 = str_replace ('@#?',' ',$subMes1);
$replaceMs2 = str_replace ('@#?',' ',$subMes2);
$replaceMs3 = str_replace ('@#?',' ',$subMes3);

//etape4: inverser la chaîne de caractére strrev()

$reverseMs1 = strrev($replaceMs1);
$reverseMs2 = strrev($replaceMs2);
$reverseMs3 = strrev($replaceMs3);

echo $reverseMs1;
echo $reverseMs2;
echo $reverseMs3;

