<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Test MySQL - Query Statemnet</title>

    <style>
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
    <h1>Test MySQL - Query Statemnet</h1>
    <div class="row">
        <div class="column">
            <?php
            $sqlArtis = "SELECT id_artis, nama_artis, gender, award, negara FROM tabel_artis";
            $resultArtis = $conn->query($sqlArtis);

            // echo "<b>Tabel Artis</b>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>id_artis</th>";
            echo "<th>Nama_Artis</th>";
            echo "<th>gender</th>";
            echo "<th>award</th>";
            echo "<th>negara</th>";
            echo "</tr>";
            if ($resultArtis->num_rows > 0) {
                // output data of each row
                while ($row = $resultArtis->fetch_assoc()) {
                    echo "<tr><td>" . $row["id_artis"] .
                        "</td><td>" . $row["nama_artis"] .
                        "</td><td>" . $row["gender"] .
                        "</td><td align='right'>" . $row["award"] .
                        "</td><td>" . $row["negara"] .
                        "</td></tr>";
                }
            } else {
                echo "0 results";
            }
            echo "</table>";
            ?>
        </div>
        <div class="column">
            <?php
            $sqlFilm = "SELECT id_film, nama_film, genre, artis, pendapatan, nominasi FROM tabel_film";
            $resultFilm = $conn->query($sqlFilm);

            // echo "<b>Tabel Film</b>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>id_film</th>";
            echo "<th>nama_film</th>";
            echo "<th>genre</th>";
            echo "<th>artis</th>";
            echo "<th>pendapatan</th>";
            echo "<th>nominasi</th>";
            echo "</tr>";
            if ($resultFilm->num_rows > 0) {
                // output data of each row
                while ($row = $resultFilm->fetch_assoc()) {
                    echo "<tr><td>" . $row["id_film"] .
                        "</td><td>" . $row["nama_film"] .
                        "</td><td>" . $row["genre"] .
                        "</td><td>" . $row["artis"] .
                        "</td><td align='right'>" . number_format($row["pendapatan"], 0, ",", ".") .
                        "</td><td align='right'>" . $row["nominasi"] .
                        "</td></tr>";
                }
            } else {
                echo "0 results";
            }
            echo "</table>";
            ?>
        </div>
    </div>

    <br />
    <p><b>01. menampilkan nama film yang artisnya bukan berasal dari negara yang tidak mengandung huruf A</b></p>
    <pre><code>SELECT tabel_film.nama_film, tabel_film.artis, tabel_artis.id_artis, tabel_artis.nama_artis, tabel_artis.negara 
        FROM tabel_film 
        INNER JOIN tabel_artis 
        ON tabel_film.artis = tabel_artis.id_artis 
        WHERE tabel_artis.negara LIKE '%a%';</code>
    </pre>
    <img src="01.png">
    <hr>
    <p><b>02. menampilkan nama film dan artis yang memiliki award terbanyak</b></p>
    <pre><code>SELECT tabel_film.nama_film, tabel_film.artis, tabel_artis.id_artis, tabel_artis.nama_artis, tabel_artis.award
        FROM tabel_film 
        LEFT JOIN tabel_artis 
        ON tabel_film.artis = tabel_artis.id_artis 
        WHERE tabel_artis.award = (SELECT MAX(tabel_artis.award) FROM tabel_artis);</code>
    </pre>
    <img src="02.png">
    <hr>
    <p><b>03. menampilakn nama artis yang tidak pernah bermain film</b></p>
    <pre><code>SELECT tabel_artis.nama_artis, tabel_artis.id_artis, tabel_film.artis, tabel_film.nama_film 
        FROM tabel_film 
        RIGHT JOIN tabel_artis  
        ON tabel_film.artis = tabel_artis.id_artis 
        WHERE tabel_film.nama_film IS NULL;</code>
    </pre>
    <img src="03.png">

    <h2>Thank You ~</h2>
    <hr>
    <footer>
        Created &copy;<?php echo date("Y") ?> by - <a href="https://github.com/eby8zevin">Ahmad Abu Hasan</a>
    </footer>
</body>

</html>