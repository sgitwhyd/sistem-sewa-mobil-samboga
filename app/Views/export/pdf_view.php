<!DOCTYPE html>
<html>

<head>
    <title>Rekap Transaksi</title>
    <style>
        .table_component {
            overflow: auto;
            width: 100%;
        }

        .table_component table {
            border: 1px solid #dededf;
            height: 100%;
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            border-spacing: 1px;
            text-align: center;
        }

        .table_component caption {
            caption-side: top;
            text-align: left;
        }

        .table_component th {
            border: 1px solid #dededf;
            background-color: #eceff1;
            color: #000000;
            padding: 5px;
        }

        .table_component td {
            border: 1px solid #dededf;
            background-color: #ffffff;
            color: #000000;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Rekap Data Transaksi</h1>
        <p>Periode <?= $startPeriode; ?> Sampai <?= $endedPeriode; ?></p>
        <div class="table_component">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Armada</th>
                        <th>Pickup</th>
                        <th>Dropoff</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $totalSubtotal = 0; ?>
                    <?php foreach ($transactions as $index => $row) : ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><?= $row['vehicle_name']; ?></td>
                            <td><?= $row['date_pickup'] . " " . $row['time_pickup']; ?></td>
                            <td><?= $row['date_dropoff'] . " " . $row['time_dropoff']; ?></td>
                            <td>Rp. <?= number_format($row['total'], 0, '', '.'); ?></td>
                        </tr>
                        <?php $totalSubtotal += $row['total']; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"><b>Total Subtotal</b></td>
                        <td><b>Rp. <?= number_format($totalSubtotal, 0, '', '.'); ?></b></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>