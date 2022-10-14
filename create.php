<?php require "config.php"; ?>

<?php

    error_reporting(0);

    if(!isset($_SESSION["name"]) && !isset($_SESSION["lastname"])) {
        header("Location: index.php");
    }

    if(!isset($_GET["edit"])) {
        $imageLabelName = "Select";
        $headerLabelName = "Create";
    }

    if(isset($_GET["edit"])) {
        $imageLabelName = "Update";
        $headerLabelName = "Update";
        $edit_state = true;
        $id = $_GET["edit"];
        $UserLogin = "Updated By " . $_SESSION["login"];

        $result = mysqli_query($conn, "SELECT * FROM `news` WHERE `id` = $id");
        $record = mysqli_fetch_array($result);

        $UpdateHeader = $record["header"];
        $UpdateDescription = $record["description"];
        $UpdateFile = $record["file"];

        if(isset($_POST["update"])) {

            $sendAlreadyUpdatedHeader = mysqli_real_escape_string($conn, $_POST["header"]);
            $sendAlreadyUpdatedDescription = mysqli_real_escape_string($conn, $_POST["description"]);
            $sendAlreadyUpdatedFile = mysqli_real_escape_string($conn, $_FILES["file"]["name"]);

            $result = mysqli_query($conn, "UPDATE `news` SET `header` = '$sendAlreadyUpdatedHeader', `description` = '$sendAlreadyUpdatedDescription', `file` = '$sendAlreadyUpdatedFile', `author` = '$UserLogin' WHERE `id` = '$id'");
    
            if($result) {
                move_uploaded_file($_FILES["file"]["tmp_name"], "img/$sendAlreadyUpdatedFile");
                header("Location: welcome.php");
            }

        }
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
                <h1><?php echo $headerLabelName; ?></h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div>
                    <input type="hidden" name="id">
                </div>
                <div>
                    <input type="text" id="header" name="header" placeholder="Header" value="<?php echo $UpdateHeader?>">
                    <p class="headerError"><?php echo $headerErr?></p>
                </div>
                <div>
                    <textarea name="description" id="description" placeholder="Description"><?php echo $UpdateDescription?></textarea>
                    <p class="descriptionError"><?php echo $descriptionErr?></p>
                </div>
                <div class="fileParent">
                    <label for="file"><?php echo $imageLabelName ?> An Image</label>
                    <input type="file" name="file" id="file" accept=".jpg, .jpeg, .png, .webp">
                </div>
                <div>
                    <?php if($edit_state == false) { ?>
                        <button type="submit" name="create">Create</button>
                    <?php } else { ?>
                        <button type="submit" name="update">Update</button>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/create.js"></script>
</body>
</html>