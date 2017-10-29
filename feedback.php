<head>
    <!-- feedback.css -->
    <link rel="stylesheet" type="text/css" href="./includes/resources/css/feedback.css">
    <title>WDA feedback</title>
    <!--favicon-->
    <link href="includes/resources/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
    <?php
        //Connect to the db
        require_once('mysqli_connect.php'); 
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        //returns all records from db
        $allComments = mysqli_query($dbc,"SELECT * FROM webacademydb.contact");
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Comments</th>
        <th>Date</th>
        </tr>";
        while($row = mysqli_fetch_array($allComments)){
            echo "<tr>";
            echo "<td>" . $row['User_id'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Comment'] . "</td>";
            echo "<td>" . $row['Comment_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        //end db connection
        mysqli_close($dbc);
    ?>
</body>

</html>