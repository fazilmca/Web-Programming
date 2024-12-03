<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        h1{
                text-align: center ;
                color:#e3a805;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            }

        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }

        th {
            background-color: #f5eccb;
        }
        td {
            background-color: #ded6b8;
        }
    </style>
</head>
<body>
    <h1>Indian Cricket Players</h1>
    <table>
        <thead>
            <tr>
                <th>Player Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $players = array(
                "Virat Kohli",
                "Rohit Sharma",
                "Hardik Pandya",
                "Jasprit Bumrah",
                "Rishabh Pant",
            );

            foreach ($players as $player) {
                echo "<tr><td>$player</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>