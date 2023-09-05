<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="font/DTGetaiGroteskDisplay-Black.ttf">
    <script src="js/plus-knop-function.js"></script>
    <link rel="icon" href="images/Screenshot 2023-08-29 at 12.07.12.png" type="image/x-icon"/>
    <title>CheckList</title>
</head>
<body>
    <?php 
    include_once "php/data.php";
    ?>
    <div id="full_body">
        <p id="header">checklist</p>
        

        <Div id="motherDiv">
            <div id="addbutton" onclick="add()">+</div>
            <div id="completedbutton" onclick="">
            <p id="spin">^</p>
            <p id="comtext">Completed</p>
            </div>

            <?php
$sql = "SELECT * FROM kaaslist";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
    
        <div id="NewItem">
                <div id=checkbutton onclick="check()"></div>
                <div id="text-wrapper">
                    <p id="totel"><?php echo $row["titel"]; ?></p>
                    <p id="descrption"><?php echo $row["beschrijving"]; ?></p>
                </div>
            </div>
        <?php
}
        } else { ?>
    <h>Geen projecten gevonden</h>
        <?php
    }
?>


        </Div>

        <div id="createmenu">
            <form name="createform"method="post" action="php/form.php">
                <label class="formu" for="title">Title:</label><br>
                <input class="formu" type="text" id="title" name="title"><br>
                <label class="formu" for="Description">Description:</label><br>
                <input class="formu" type="text" id="Description" name="Description">
                <input id="Done"type="submit" value="Done" onclick="close()">
            </form>
            
        </div>


    </div>
</body>
</html>