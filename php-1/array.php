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
// Soal No 1
echo "<h3>Soal 1</h3>";


// Membuat array untuk kelompok Kids dan Adults
$kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
$adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

// Menampilkan hasil isi array untuk memverifikasi
echo "<h3>Kids</h3>";
print_r($kids);

echo "<h3>Adults</h3>";
print_r($adults);
?>

// Soal No 2
echo "<h3>Soal 2</h3>";

<?php
// Deklarasi array untuk Kids dan Adults
$kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
$adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

// Menampilkan total elemen dan isi array Kids
echo "Cast Stranger Things: <br>";
echo "Total Kids: " . count($kids) . "<br>";
echo "<ol>";
foreach ($kids as $kid) {
    echo "<li>$kid</li>"; // Menampilkan setiap elemen array $kids
}
echo "</ol>";

// Menampilkan total elemen dan isi array Adults
echo "Total Adults: " . count($adults) . "<br>";
echo "<ol>";
foreach ($adults as $adult) {
    echo "<li>$adult</li>"; // Menampilkan setiap elemen array $adults
}
echo "</ol>";
?>

// Soal No 3
echo "<h3>Soal 3</h3>";

<?php
// Membuat array multidimensi asosiatif
$characters = [
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

// Menampilkan array multidimensi
echo "<pre>";
print_r($characters);
echo "</pre>";
?>

</body>
</html>
