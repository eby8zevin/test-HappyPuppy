<?php
$direktur = 3000000;
$manager = 2000000;
$karyawan = 1000000;
$pekerja_lain = 800000;

// Tunjangan 10%
$tunjangan1 = (10 * $direktur) / 100;
$tunjangan2 = (10 * $manager) / 100;
$tunjangan3 = (10 * $karyawan) / 100;
$tunjangan4 = (10 * $pekerja_lain) / 100;

// PPN 20%
$ppn1 = (20 * $direktur) / 100;
$ppn2 = (20 * $manager) / 100;
$ppn3 = (20 * $karyawan) / 100;
$ppn4 = (20 * $pekerja_lain) / 100;

// Total: Gaji Bersih + Tunjangan - PPN
$total1 = $direktur + $tunjangan1 - $ppn1;
$total2 = $manager + $tunjangan2 - $ppn2;
$total3 = $karyawan + $tunjangan3 - $ppn3;
$total4 = $pekerja_lain + $tunjangan4 - $ppn4;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test PHP</title>
</head>

<body>
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=testPHP.xls");
    ?>

    <center>
        <h3>PT Surabaya Technology Information <br />
            SLIP GAJI 2021</h3>
    </center>
    <table border='1'>
        <tr>
            <th>No.</th>
            <th>Nama Karyawan</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Tunjangan</th>
            <th>PPn</th>
            <th>Total</th>
        </tr>
        <tr>
            <td align='right'>1</td>
            <td>Danang</td>
            <td>Direktur</td>
            <td align='right'><?php echo number_format($direktur, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($tunjangan1, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($ppn1, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($total1, 0, ",", ".") ?></td>
        </tr>
        <tr>
            <td align='right'>2</td>
            <td>Nana</td>
            <td>Manager</td>
            <td align='right'><?php echo number_format($manager, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($tunjangan2, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($ppn2, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($total2, 0, ",", ".") ?></td>
        </tr>
        <tr>
            <td align='right'>3</td>
            <td>Joko Susilo</td>
            <td>Karyawan</td>
            <td align='right'><?php echo number_format($karyawan, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($tunjangan3, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($ppn3, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($total3, 0, ",", ".") ?></td>
        </tr>
        <tr>
            <td align='right'>4</td>
            <td>Putri</td>
            <td>Pekerja Lain</td>
            <td align='right'><?php echo number_format($pekerja_lain, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($tunjangan4, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($ppn4, 0, ",", ".") ?></td>
            <td align='right'><?php echo number_format($total4, 0, ",", ".") ?></td>
        </tr>
    </table>
</body>

</html>