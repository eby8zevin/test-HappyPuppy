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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Test PHP</title>

    <style>
        p {
            text-align: center;
            font-weight: bold;
        }

        h2 {
            text-align: center;
        }

        footer {
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: flex;
            margin-left: -5px;
            margin-right: -5px;
        }

        .column {
            flex: 50%;
            padding: 5px;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #000000;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <button type="button" onclick="location.href='../'">Back</button>
    <p>PT Surabaya Technology Information <br />
        SLIP GAJI 2021</p>
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

    <p style="text-align:right">
        <a target="_blank" href="export.php">
            <button type="button">Export to Excel</button>
        </a>
    </p>

    <h3>Result:</h3>
    <img src="01.png" width="75%" height="75%">

    <h2>Thank You ~</h2>
    <hr>
    <footer>
        Created &copy;<?php echo date("Y") ?> by - <a href="https://github.com/eby8zevin">Ahmad Abu Hasan</a>
    </footer>
</body>

</html>