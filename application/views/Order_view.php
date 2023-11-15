<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
        /* Tambahkan CSS sesuai kebutuhan */
        body {
            padding: 20px; /* Menambahkan padding pada body */
        }

        .table-container {
            margin-top: 20px; /* Menambahkan margin-top pada container tabel */
        }

        .btn-container {
            margin-top: 10px; /* Menambahkan margin-top pada container tombol */
        }
    </style>
<body>
<div class="container">
        <h1>Order List</h1>
        <div class="btn-container">
            <a class="btn btn-primary" href="User" role="button">User List</a>
            <a class="btn btn-primary" href="Menu" role="button">Menu List</a>
        </div>

        <div class="table-container">
            <table class="table">
                <thead class="thead-dark">
        <tr>
            <th>ID-Order</th>
            <th>Order-Data</th>
            <th>ID-User</th>
            <th>ID-Menu</th>
            <th>Status-Payment</th>
        </tr>
        <?php foreach ($order as $orders) { ?>
            <tr>
            <td><?php echo $orders->id_order; ?></td>
            <td><?php echo $orders->order_data; ?></td>
            <td><?php echo $orders->id_user; ?></td>
            <td><?php echo $orders->id_menu; ?></td>
            <td><?php echo $orders->status_payment; ?></td>

            </tr>

        <?php } ?>
    </table>
    
</body>
</html>