 <?php
    require('Animal.php');
    require_once('frog.php');
    require_once('ape.php');
    $sheep = new Animal("shaun");

    echo "Animal Name : " . $sheep->getName() . "<br>"; // "shaun"
    echo "Lots of Legs : " . $sheep->getLegs() . "<br>"; // 2
    echo "Cold Blooded : " . $sheep->getColdBlooded() . "<br><br>"; // false

    $sungokong = new ape("kera sakti");

    echo "Animal Name : " . $sungokong->getName() . "<br>";
    echo "Lots of Legs : " . $sungokong->getLegs() . "<br>";
    echo "Cold Blooded : " . $sungokong->getColdBlooded() . "<br>";
    echo "Yell Func : ";
    $sungokong->yell();
    echo "<br><br>";


    $kodok = new frog("buduk");

    echo "Animal Name : " . $kodok->getName() . "<br>";
    echo "Lots of Legs : " . $kodok->getLegs() . "<br>";
    echo "Cold Blooded : " . $kodok->getColdBlooded() . "<br>";
    echo "Jump Func : ";
    $kodok->jump();
    echo "<br><br>";