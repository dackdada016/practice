<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  </style>
</head>
<body>
  
    <table border="1">
      <?php for($k=1; $k<=9; $k++): ?>
        <tr>
          <?php for($i=1; $i<=9; $i++): ?>
          <!-- <td><?= $i. '*' . $k. ' = ' . ($i*$k) ?></td> -->
          <td><?= sprintf('%s * %s = %s', $i, $k, $i*$k)?></td>
          <?php endfor ?>
        </tr>
        <?php endfor ?>
    </table>

  <?php /*
  <table>
    <?php for($k=0; $k<256; $k+=17):?>
      <tr>
        <?php for($i=0; $i<256; $i+=17):?>
        <td style="background-color: rgb(<?= $i?>,0,<?= $k?>)"></td>
        <?php endfor?>
      </tr>
    <?php endfor?>
  </table>
  */ ?>
</body>
</html>