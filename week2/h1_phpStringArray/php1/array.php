<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
    $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
    echo "<pre>";
    print_r($kids);
    print_r($adults);
    echo "</pre>";
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    // Lanjutkan
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";

    echo "</ol>";

    echo "Total Adults: " . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    // Lanjutkan
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";

    echo "</ol>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
    $data = array(
        array('Name1' => 'Will Byers', 'Name2' => 'Mike Wheeler', 'Name3' => 'Jim Hopper', 'Name4' => 'Eleven'),
        array('Age1' => '12', 'Age2' => '12', 'Age3' => '43', 'Age4' => '12'),
        array('Aliases1' => 'Will the Wise', 'Aliases2' => 'Dungeon Master', 'Aliases3' => 'Chief Hopper', 'Aliases4' => 'El'),
        array('Status1' => 'Alive', 'Status2' => 'Alive', 'Status3' => 'Deceased', 'Status4' => 'Alive')
    );
    echo "<pre>";
    print_r($data);
    echo "</pre>";


    ?>
    <h3>Biodata</h3>
    <ul style="list-style-type: none;">
        <li>Nama: <?php echo $data[0]['Name1'] ?></li>
        <li>Age: <?php echo $data[1]['Age1'] ?></li>
        <li>Aliases: <?php echo $data[2]['Aliases1'] ?></li>
        <li>Status: <?php echo $data[3]['Status1'] ?></li>
    </ul>
    <ul style="list-style-type: none;">
        <li>Nama: <?php echo $data[0]['Name2'] ?></li>
        <li>Age: <?php echo $data[1]['Age2'] ?></li>
        <li>Aliases: <?php echo $data[2]['Aliases2'] ?></li>
        <li>Status: <?php echo $data[3]['Status2'] ?></li>
    </ul>
    <ul style="list-style-type: none;">
        <li>Nama: <?php echo $data[0]['Name3'] ?></li>
        <li>Age: <?php echo $data[1]['Age3'] ?></li>
        <li>Aliases: <?php echo $data[2]['Aliases3'] ?></li>
        <li>Status: <?php echo $data[3]['Status3'] ?></li>
    </ul>
    <ul style="list-style-type: none;">
        <li>Nama: <?php echo $data[0]['Name4'] ?></li>
        <li>Age: <?php echo $data[1]['Age4'] ?></li>
        <li>Aliases: <?php echo $data[2]['Aliases4'] ?></li>
        <li>Status: <?php echo $data[3]['Status4'] ?></li>
    </ul>

</body>

</html>