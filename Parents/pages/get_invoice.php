<?php
// print_r($_GET);
// exit;

$pid = $_GET['pid'];
$cid = $_GET['cid'];
$date = $_GET['date'];
$month = $_GET['month'];
$amount = $_GET['amount'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .invoice {
      max-width: 800px;
      margin: 50px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .invoice h2 {
      margin-top: 0;
    }
    .invoice p {
      margin: 5px 0;
    }
    .invoice table {
      width: 100%;
      border-collapse: collapse;
    }
    .invoice table th, 
    .invoice table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    .invoice .total {
      margin-top: 20px;
      text-align: right;
    }
    @media print {
      body * {
        visibility: hidden;
      }
      .invoice, .invoice * {
        visibility: visible;
      }
      .invoice {
        position: absolute;
        left: 0;
        top: 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="invoice">
      <h2>Invoice</h2>
      <p>Invoice Number: #<?= $pid.$cid?></p>
      <p>Date: <?= $date?></p>
      <b style="color:red">Note : Every Month Payment Date will be from 1st - 10th, After that we will charge fine Rs 10/day</b>
      <hr>
      <table>
        <thead>
          <tr>
            <th>Vehicle Charge</th>
            <th>Service Charge</th>
            <th>Late Fine</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Rs <?= $amount ?></td>
            <td>Rs 101</td>
            <td>Rs 0</td>
            <td>Rs <?= $amount +101 ?></td>
          </tr>
                    
          <tr>
            <td colspan="3" class="text-right">GST 18%</td>
            <td>345.78</td>
          </tr>
          <!-- <tr>
            <td colspan="3" class="text-right">Total</td>
            <td>$38.50</td>
          </tr> -->
        </tbody>
      </table>
      <div class="total">
        <p><strong>Total Paid Amount: <?= $amount +101+345.78 ?></strong></p>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS (optional, for some functionalities) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
