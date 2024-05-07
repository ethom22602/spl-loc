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
        $search = $_POST["search"];
        $connection = pg_connect("host=localhost user=postgres password=Taffy8719#1234");
        $result = pg_query($connection, "SELECT * FROM items WHERE title ILIKE '%$search%';");
    ?>

    <!-- Table for displaying DB results -->
    <table>
        <tr>
            <th>Call Number</th>
            <th>It Type</th>
            <th>Barcode</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Location</th>
            <th>View Model</th>
        </tr>
        <?php
            while($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[call_num]</td>";
                echo "<td>$row[it_type]</td>";
                echo "<td>$row[barcode]</td>";
                echo "<td>$row[title]</td>";
                echo "<td>$row[author]</td>";
                echo "<td>$row[isbn]</td>";
                echo "<td>$row[loc]</td>";
                echo "<td><a href=$row[file].php>View</a></td>";
                echo "</tr>";
            }

        ?>

    </table>
    <div>
    
    <!-- Form for processing new user keyword -->
    <form action="search.php" method="POST">
        <label>Looking for something else?</label>
        <input type="text" id="search" name="search"><br>
        <input type="submit" value="Submit">
    </form>
    </div>        
</body>
</html>