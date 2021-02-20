<?php

require './controller.php';

$data_customer = lihatData("SELECT * FROM customers");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h2>Data Customer</h2>
    <a href="#" type="button" class="btn btn-primary">Tambah data</a>
    </div>
    <hr class="w-100">
    <div class="table-wrapper w-75 m-auto p-3">
        <table class="table m-auto text-center">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Customer Email</th>
            <th scope="col">Customer Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data_customer as $customer) : ?>
                <tr>
                    <th scope="row"><?= $customer['id_customer'] ?></th>
                    <td><?= $customer['name_customer'] ?></td>
                    <td><?= $customer['email'] ?></td>
                    <td><?= $customer['customer_address'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
        </table>
    </div>
</main>
</body>
</html>