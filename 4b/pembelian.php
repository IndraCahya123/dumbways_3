<?php 

require './controller.php';

$data_pembelian = lihatData("SELECT * FROM customers 
                    JOIN pembelian ON (customers.id_customer = pembelian.customer_id)
                    JOIN cars ON (cars.id_cars = pembelian.car_id)
");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumbways Otomotive</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./pembelian.php">Data Pembelian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./customer.php">Data Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./brand.php">Data Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./mobil.php">Data Mobil</a>
            </li>
        </ul>
    </div>
</nav>
    
<main class="d-flex flex-column align-items-center p-4">
    <div class="top d-flex w-75 justify-content-between">
    <h2>Data Pembelian</h2>
    <a href="#" type="button" class="btn btn-primary">Tambah data</a>
    </div>
    <hr class="w-100">
    <div class="card-wrapper w-75 d-flex justify-content-around">
    <?php foreach ($data_pembelian as $data) : ?> 
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">
            Pembeli (customer) : <?= $data['name_customer'] ?>
            <br>
            mobil : <?= $data['name_car'] ?>
            </p>
        </div>
        <div class="card-footer">
            <p class="card-text">
            stock : <?= $data['customer_address'] ?>
            </p>
        </div>
        </div>
        <?php endforeach ?>

    </div>
</main>
</body>
</html>