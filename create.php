<?php require "config.php"; ?>

<?php

    if(!isset($_SESSION["name"]) && !isset($_SESSION["lastname"])) {
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/create.css">
    <link rel="stylesheet" href="css/createMedia.css">
    <title>Create News</title>
</head>
<body>





                                        <!-- Navigation -->





    <header>
        <nav>
            <div class="navParent">
                <div class="navChild">
                    <h2>
                        <a href="welcome.php">Back</a>
                    </h2>
                </div>
                <div class="navChild">
                    <a href="logout.php">
                    <div class="logout">
                        <h3>Log Out</h3>
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </div>
                    </a>
                </div>
            </div>
        </nav>
    </header>





                                        <!-- Form -->




                                        
    <div class="formParent">
        <div>
            <div class="header">
                <h1>Create</h1>
            </div>
            <form action="config.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div>
                    <input type="hidden" name="id">
                </div>
                <div>
                    <input type="text" id="header" name="header" placeholder="Header" value="<?=$header?>">
                    <p class="headerError"><?=$headerErr?></p>
                </div>
                <div>
                    <textarea name="description" id="description" placeholder="Description" value="<?=$description?>"></textarea>
                    <p class="descriptionError"><?=$descriptionErr?></p>
                </div>
                <div class="fileParent">
                    <label for="file">Select An Image</label>
                    <input type="file" name="file" id="file" accept=".jpg, .jpeg, .png, .webp">
                </div>
                <div>
                    <button type="submit" name="create">Create</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/create.js"></script>
</body>
</html>