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
        background-color: #172e55;
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
    <!-- Table for processing user input keyword -->
<table>
    <tr>
        <td style="width:50%"><img src="Scranton_Public_Library.jpg" width="600px" height="400px"></td>
        <td style="color:white; text-align:center">
            <h1>Scranton Public Library<br>Location Assistant</h1>
            <h3>Search for an item</h3>
            <div>
                <form action="search.php" method="POST">
                    <label>Item</label>
                    <input type="text" id="search" name="search"><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </td>
    </tr>
</table>
</body>
</html>