<!DOCTYPE html>
<html>
<head>
    <title>Rekap Transaksi</title>
<style>
.styled-table {
   border-collapse: collapse;
   margin: 25px 0;
   font-size: 18px;
   min-width: 400px;
   border-radius: 5px 5px 0 0;
   overflow: hidden;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
   background-color: #009879;
   color: #ffffff;
   text-align: left;
   font-weight: bold;
}

.styled-table th, .styled-table td {
   padding: 12px 15px;
}

.styled-table tbody tr {
   border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
   background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
   border-bottom: 2px solid #009879;
}

</style>
</head>
<body>
    <h1>Rekap Data Transaksi</h1>
    <p>Periode <?= $startPeriode; ?> Sampai <?= $endedPeriode; ?></p>
    <table class="styled-table">
      <thead>
          <tr>
              <th>No.</th>
              <!-- <th>Nama</th> -->
              <th>Armada</th>
              <th>Pickup</th>
              <th>Dropoff</th>
              <th>Subtotal</th>
          </tr>
      </thead>
      <tbody>
          <?php $totalSubtotal = 0;?>
          <?php foreach ($transactions as $index => $row) :?>
              <tr>
                  <td><?= $index + 1;?></td>
                  <!-- <td><?= $row['first_name'] . " " . $row['last_name']; ?></td> -->
                  <td><?= $row['vehicle_name']; ?></td>
                  <td><?= $row['date_pickup'] . " " . $row['time_pickup'];?></td>
                  <td><?= $row['date_dropoff'] . " " . $row['time_dropoff'];?></td>
                  <td>Rp. <?= number_format($row['total'], 0, '', '.');?></td>
              </tr>
              <?php $totalSubtotal += $row['total'];?>
          <?php endforeach;?>
          <!-- subtotal final -->
           <tr>
               <td colspan="4"><b>Total Subtotal</b></td>
               <td><b>Rp. <?= number_format($totalSubtotal, 0, '', '.');?></b></td>
           </tr>
      </tbody>
    </table>
</body>
</html>
