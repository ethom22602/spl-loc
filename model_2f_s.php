<html>
<head>
    <title>Scranton Public Library Location Assistant</title>
    <link rel="stylesheet" href="style.css">
    <!-- Model viewer source -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
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
    model-viewer {
        width: 800px;
        height: 700px;
        margin-left: auto;
        margin-right: auto;
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
    <!-- Display model -->
<table>
    <tr>
        <td style="width:50%">
        <h1 style="color: white; text-align: center;">Albright Memorial Library - Second Floor Stacks</h1>
        <model-viewer src="https://cdn.glitch.global/c7166fd0-3cb6-443c-a4ff-091a4b64df4b/model_2f_s.glb?v=1713794669162" 
        camera-controls></model-viewer></td>
    </tr>
</table>

</body>
</html>
