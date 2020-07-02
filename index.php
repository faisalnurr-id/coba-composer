<?php
require_once 'vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create('id_ID');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penduduk Indonesia</title>
</head>

<body>
    <h1>Daftar Penduduk Indonesia</h1>
    <?php for ($i = 0; $i < 30; $i++) : ?>
        <ul>
            <li>Nama : <?= $faker->name;?></li>
            <li>Email : <?= $faker->email;?></li>
            <li>Alamat : <?= $faker->address;?></li>
        </ul>
    <?php endfor; ?>
</body>

</html>