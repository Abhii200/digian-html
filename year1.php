
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            float: left;
            margin: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body >
    <table>
        <tr>
            <th>Year</th>
            <th>Semester</th>
            <th>Subject</th>
            <th>Unit</th>
            <th>NOTES</th>
        </tr>

        <?php
        // ... Your PHP code for the first table ...$servername = "localhost";
        $servername = "localhost"; $username = "root";
        $password = "";
        $dbname = "fullstack";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM notes WHERE year = 1 ORDER BY sem,sub,unit";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["year"] . "</td>";
                echo "<td>" . $row["sem"] . "</td>";
                echo "<td>" . $row["sub"] . "</td>";
                echo "<td>" . $row["unit"] . "</td>";
                echo "<td><a download href='upl/" . $row["pdf"] . "'>Download PDF</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>
    
    <table>
        <tr>
            <th>Year</th>
            
            <th>SYLLABUS</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fullstack";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM syllabus WHERE year = 1 ";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["year"] . "</td>";
               
                
                echo "<td><a download href='upl/" . $row["pdfs"] . "'>Download PDF</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }

        $conn->close();
        // ... Your PHP code for the second table ...
        ?>
    </table>
    
</body>
</html>



