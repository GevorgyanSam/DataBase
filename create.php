<?php require "config.php"; ?>

<?php

    if(!isset($_SESSION["name"]) && !isset($_SESSION["lastname"])) {
        header("Location: index.php");
    }

    $Name = $_SESSION["name"];
    $LastName = $_SESSION["lastname"];
    $Login = $_SESSION["login"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/create.css">
    <title>Create News</title>
</head>
<body>





                                        <!-- Navigation -->





    <header>
        <?php require "section/nav.php";?>
    </header>





                                        <!-- Form -->




                                        
    <div class="formParent">
        <form action="config.php" method="POST" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="id">
            </div>
            <div>
                <input type="text" name="header" placeholder="Header" value="<?=$header?>">
            </div>
            <div>
                <input type="text" name="description" placeholder="Description" value="<?=$description?>">
            </div>
            <div>
                <input type="file" name="file" accept=".jpg, .jpeg, .png, .webp">
            </div>
            <div>
                <button type="submit" name="create">Create</button>
            </div>
        </form>
    </div>
</body>
</html>