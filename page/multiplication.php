<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
<table>
        <thead>
            <tr>
                <th>&times;</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
            </tr>
        </thead>
        <tbody>
            <!-- Generate rows for each number -->
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>