<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css" media="print">
        @page {
    /* size: landscape; */
    margin: 0;

  }

  .body {
    margin:0in 0.2in 0in 0.3in;
    /* margin: 1.6cm;
    mso-header-margin:.5in;
    mso-footer-margin:.5in;
    mso-paper-source:4; */
    font-family: Arial, Helvetica, sans-serif;
   }

   .footer{
    position:absolute;
    /* right:0; */
    bottom:0;
  }
  p, td{
      font-size: 12px;
  }

    </style>
</head>
<!--  -->
<body >
<h5 style="text-align:center;">SA'ID HASAN FARMA<br>Jln. KH. Abdul Aziz No. 12345 <br> Kauman - Tempurejo, Tempurejo, Jember</h5>
<?php foreach ($data as $inv) { ?>
        <table>
            <tr>
                <td>No Nota </td>
                <td> : <?php echo $inv->id_penjualan ?></td>
            </tr>
            <tr>
                <td>Tanggal & Waktu </td>
                <td> : <?php echo date('d-m-y h:m:s') ?></td>
            </tr>
            <tr>
                <td>Kasir</td>
                <td> : <?php echo $this->session->userdata("nama") ?></td>
            </tr>
        </table>
        <hr style="border-top : dotted 1px;">
        <br>
        <table>
            <?php foreach ($detail as $det) { ?>
                <tr>
                    <td><?php echo $det->id_obat ?> | <?php echo $det->nama_paten ?></td>
                </tr>
                <tr>
                    <td><?php echo number_format($det->harga) ?> X <?php echo number_format($det->qty) ?> = <?php echo number_format($det->sub_total) ?></td>
                </tr>
            <?php } ?>
        </table>
        <hr style="border-top : dotted 1px;">
        <table>
            <tr>
                <td>Total :</td>
                <td>Rp. <?php echo number_format($inv->total_harga) ?></td>
            </tr>
            <tr>
                <td>Tunai :</td>
                <td>Rp. <?php echo number_format($inv->bayar) ?></td>
            </tr>
            <tr>
                <td>Kembali :</td>
                <td>Rp. <?php echo number_format($inv->kembalian) ?></td>
            </tr>
        </table>
    <?php } ?>
    <hr style="border-top : dotted 1px;">    
    <p style="text-align:center;">Layanan Konsumen : 0812-1625-2415</p>

</body>
<script>
    window.print();
    window.history.back();
     
</script>
</html>