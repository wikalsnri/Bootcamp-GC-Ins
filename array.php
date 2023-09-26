<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Wika</title>
</head>
<body>
    <h1>Berlatih Array</h1>
    <?php
    echo "<h3> Soal 1 </h3>";
    /* SOAL NO 1
    Kelompokkan nama-nama di bawah ini ke dalam Array. Kids: "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
    Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" */
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

    echo "Daftar Kids: <br>";
    echo "<ul>";
    foreach ($kids as $kid) {
        echo "<li>$kid</li>";
    }
    echo "</ul>";

    echo "Daftar Adults: <br>";
    echo "<ul>";
    foreach ($adults as $adult) {
        echo "<li>$adult</li>";
    }
    echo "</ul>";

    echo "<h3> Soal 2</h3>";
    /* SOAL NO 2
    Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
    echo "Panjang Array Kids: " . count($kids) . "<br>";
    echo "Panjang Array Adults: " . count($adults) . "<br>";

    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids) . "<br>";
    echo "<ol>";
    foreach ($kids as $kid) {
        echo "<li>$kid</li>";
    }
    echo "</ol>";

    echo "Total Adults: " . count($adults) . "<br>";
    echo "<ol>";
    foreach ($adults as $adult) {
        echo "<li>$adult</li>";
    }
    echo "</ol>";


    echo "<h3> Soal 3</h3>";
    /* SOAL No 3
    Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
    Name: "Will Byers" Age: 12, Aliases: "Will the Wise" Status: "Alive"
    Name: "Mike Wheeler" Age: 12, Aliases: "Dungeon Master" Status: "Alive"
    Name: "Jim Hopper" Age: 43, Aliases: "Chief Hopper" Status: "Deceased"
    Name: "Eleven" Age: 12, Aliases: "El" Status: "Alive"
    */
    $strangerThingsCast = [
        [
            "Name" => "Will Byers",
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive"
        ],
        [
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive"
        ],
        [
            "Name" => "Jim Hopper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased"
        ],
        [
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive"
        ]
    ];

    echo "Daftar Cast Stranger Things: <br>";
    echo "<ul>";
    foreach ($strangerThingsCast as $cast) {
        echo "<li>";
        echo "Name: " . $cast["Name"] . ", ";
        echo "Age: " . $cast["Age"] . ", ";
        echo "Aliases: " . $cast["Aliases"] . ", ";
        echo "Status: " . $cast["Status"];
        echo "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>