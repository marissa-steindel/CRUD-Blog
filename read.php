<!----------------

  Assignment 3 - Blog Application
  Name: Marissa Steindel
  Date: June 8, 2022
  Description: Fetches a row from the database determined by the id supplied in the GET superglobal.

------------------>


<?php

    require('connect.php');

    // sanitize $_POST['id']
    if($_GET && !empty($_GET['id']))
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if(!$id)
        {
            header("Location: index.php");
            exit;
        }

        $query = "SELECT * FROM blog WHERE id ="."{$id}";

        // Prepare a PDO statement
        $statement = $db->prepare($query);

        // Execute the statement on the DB
        $statement->execute();

        // fetch the entire DB
        $row = $statement->fetch();
    }

 ?>

 <!DOCTYPE html>
 <html>

<head>
    <title>My Blog - <?= $row['title'] ?></title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <!-- import the common HTML -->
    <?php include('common.php') ?>

    <?php if($_GET && !empty($_GET['id'])): ?>
        <div class="entry">
            <h2><?= $row['title'] ?></h2>
            <a href="edit.php?id=<?= "{$row['id']}" ?>">edit</a>
            <p><?= $row['content'] ?></p>
        </div>
    <?php endif ?>
 </body>
 </html>
