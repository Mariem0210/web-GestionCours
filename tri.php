<?php 
require_once '../../config.php';
$conn = config::getConnexion();
try {
    // Prepare and execute the SQL query to select all records from the 'formation' table
    $query = $conn->prepare("SELECT * FROM cours");
    $query->execute();
    // Fetch all records as an associative array
    $result = $query->fetchAll();

    // Function to sort sessions by the number of students (nbrE) in descending order
    function sortCoursByNbrEDesc($cours) {
        // Define a custom comparison function
        function compareByNbrEDesc($a, $b) {
            return $b['prix'] - $a['prix']; // Compare in descending order
        }
        
        // Sort the sessions array using the custom comparison function
        usort($cours, 'compareByNbrEDesc');
        
        return $cours;
    }

    // Sort sessions by the number of students (nbrE) in descending order
    $result = sortCoursByNbrEDesc($result);
} catch (PDOException $e) {
    // Catch any exceptions and display an error message
    echo 'Connection failed: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <title>Courses | Lincoln High School</title>
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->
    <style>
        /* Your CSS styles here */
        
        /* CSS styles */
        body {
            font-family: 'Arvo', serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center; /* Center the content horizontally */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td {
            padding: 10px; /* Adjust cell padding */
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #fff;
        }
        td a {
            text-decoration: none;
            color: #007bff;
        }
        td a:hover {
            text-decoration: underline;
        }
        .button-form {
            margin-top: 10px; /* Add margin to separate buttons */
        }
        .button-form {
            display: flex; /* Use flexbox */
            justify-content: space-between; /* Distribute space between buttons */
            align-items: center; /* Center vertically */
        }
        .button-form form {
            margin-right: 10px; /* Add some space between buttons */
        }
        .button-form form:last-child {
            margin-right: 0; /* Remove margin from the last button */
        }
        .button-form input[type="submit"] {
            font-size: 14px; /* Adjust the font size */
            padding: 5px 10px; /* Adjust the padding */
        }
    </style>
</head>
<body>
<div class="container">
    <table>
        <tr>
            <th>ID Cours</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Date</th>
            <th>Durée</th>
            <th>Prix</th>
        </tr>
        <?php
        // Place your PHP code here
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['idC'] . '</td>';
            echo '<td>' . $row['titre'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>' . $row['duree'] . '</td>';
            echo '<td>' . $row['prix'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>
</body>
</html>
