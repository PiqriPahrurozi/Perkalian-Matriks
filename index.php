<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP Dasar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>1. Bilangan Genap dari 1 sampai 10</h2>
    <div class="even-numbers">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "<span>$i </span>";
            }
        }
        ?>
    </div>

    <h2>2. Tabel Perkalian Matriks 1-10</h2>
    <table>
        <tr>
            <th>bilangan</th>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <th><?= $i ?></th>
            <?php endfor; ?>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j;
                $class = ($i == $j) ? 'highlight' : '';
                echo "<td class='$class'>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
