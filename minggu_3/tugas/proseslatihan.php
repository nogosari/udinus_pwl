<!DOCTYPE HTML>  
<html>

<head>
    <title>Latihan</title>
</head>
<style type="text/css">
    th {
      text-align: center;
    }

    .tg  {
      border-collapse:collapse;border-spacing:0;
    }
    .tg td{
      border-color:grey;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;text-align: center;
    }

    .ta{
      background-color: black;color: white;
    }
</style>

<body> 
<?php  
  if (isset($_POST['nim'])) {
    $nim=$_POST['nim'];
  }

  if (isset($_POST['pstudi'])) {
    $pstudi = $_POST['pstudi'];
  }

  if (isset($_POST['nuas'])) {
    $nuas = $_POST['nuas'];
  }

  if (isset($_POST['nuts'])) {
    $nuts = $_POST['nuts'];
  }

  if (isset($_POST['ntgs'])) {
    $ntgs = $_POST['ntgs'];
  }

  if (isset($_POST['notes'])) {
    $notes = $_POST['notes'];
  }

  $nakhir = 40/100*$ntgs + 30/100*$nuts + 30/100*$nuas;

  if ($nakhir >= 85) {
    $status = 'A';
  } elseif ($nakhir >= 70 and $nakhir <= 84) {
    $status = 'B';
  } elseif ($nakhir >= 60 and $nakhir <= 69) {
    $status = 'C';
  } elseif ($nakhir >= 50 and $nakhir <= 59) {
    $status = 'D';
  } else {
    $status = 'E';
  }

  if ($status == 'D' or $status == 'E'){
    $status1 = 'Tidak Lulus';
  } else {
    $status1 = 'Lulus';
  }
?>

<table class="tg">
  <tbody>
    <tr class="ta">
      <td>Program Studi</td>
      <td>NIM</td>
      <td>Nilai Akhir</td>
      <td>Status</td>
      <td>Catatan Khusus</td>
    </tr>
    <tr>
      <td>
        <?=$pstudi?>
      </td>
      <td>
        <?=$nim?>
      </td>
      <td>
        <?=$nakhir?>
      </td>
      <td>
        <?=$status1?>
      </td>
      <td>
        <?=$notes?>
      </td>
    </tr>
  </tbody>
</table>
    
</body>
</html>




