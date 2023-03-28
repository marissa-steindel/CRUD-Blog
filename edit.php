<!----------------

  Assignment 3 - Blog Application
  Name: Marissa Steindel
  Date: June 8, 2022
  Description: Displays the contents of a row for editting.

------------------>


<?php
    require('connect.php');

    // build query
    $query = "SELECT * FROM blog WHERE id = :id LIMIT 1";

    // Prepare a PDO statement
    $statement = $db->prepare($query);

    // sanitize the input
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if(!$id)
    {
        header("Location: index.php");
        exit;
    }

    // bind validated $id to the :id placeholder
    $statement->bindValue('id', $id, PDO::PARAM_INT);

    // Execute the statement on the DB
    $statement->execute();

    // fetch the row specified by the query
    $row = $statement->fetch();

 ?>

 <!DOCTYPE html>
 <html>

<head>
    <title>My Blog - Editting <?= $row['title'] ?></title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <!-- import the common HTML -->
    <?php include('common.php') ?>
    <?php require('authenticate.php') ?>

        <form id="updatepost" method="post" action="process_post.php" >

            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div>
                <label for="title">Title</label>
                <input id="title" name="title" value="<?= $row['title'] ?>">
            </div>

            <div>
                <label for="content"></label>
                <textarea id="content" name="content" rows="10" cols="80" maxlength="5000" ><?= $row['content'] ?></textarea>
            </div>

            <div>
                <input type="submit" name="command" value="Update">
                <input type="submit" name="command" value="Delete" onclick="return confirm('Are you sure you wish to delete this post?')">
            </div>

        </form>
 </body>
 </html>
