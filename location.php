<html>
<head>
    <title>Scranton Public Library Location Assistant</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    table {
        margin-left: auto;
        margin-right: auto;
        border: 1px solid;
        width: 75%;
    }
    th, td {
        border: 1px solid;
    }
    button {
        font-size: 0.857em;
        padding: 5px;
        color: white;
        margin-right: 5px;
    }
</style>
<body>
    <!-- Header -->
<img src="Scranton Public Library 1.jpg" height="128" width="200" style="float:left">
    <a href="https://lclshome.org/my-account/"><button style="background-color:#f4802e;">MY ACCOUNT</button></a>
    <a href="https://lclshome.org/join/"><button style="background-color:#61779c;">JOIN</button></a>
    <h3>Looking for an item in the library? Searching for a library location? Seeking a service the library can provide?</h3>
    <nav style="margin-top:50px">
        <a href="capstone.php"><button style="background-color:#f4802e;">HOME</button></a>
        <a href="item_search.php"><button style="background-color:#f4802e;">ITEM</button></a>
        <a href="service_search.php"><button style="background-color:#f4802e;">SERVICE</button></a>
        <a href="location_search.php"><button style="background-color:#f4802e;">LOCATION</button></a>
    </nav>
    <!-- Establish connection to DB -->
    <?php
        $location = $_POST["location"];
        $connection = pg_connect("host=localhost user=postgres password=Taffy8719#1234");
        $result = pg_query($connection, "SELECT * FROM location WHERE name ILIKE '%$location%';");
    ?>
    <!-- Table for processing DB results-->
    <table>
        <tr>
            <th>Name</th>
            <th>See Floor Plan</th>
        </tr>
        <?php
            while($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[name]</td>";
                echo "<td><a href=$row[file].php>View</a></td>";
                echo "</tr>";
            }

        ?>

    </table>
    <!-- Form for processing new user request -->
    <form action="location.php" method="POST">
        <label>Looking for something else?</label>
        <input type="text" id="location" name="location"><br>
        <input type="submit" value="Submit">
    </form>
        </div>
</body>
</html>