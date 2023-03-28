<!----------------

  Assignment 3 - Blog Application
  Name: Marissa Steindel
  Date: June 8, 2022
  Description: Connects to the database and fetches all content.

------------------>


<?php

    require('connect.php');

    $query = "SELECT * FROM blog ORDER BY id DESC";

    // Prepare a PDO statement
    $statement = $db->prepare($query);

    // Execute the statement on the DB
    $statement->execute();

    // fetch the entire DB
    $rows = $statement->fetchAll();

 ?>


<!DOCTYPE html>
<html>

<head>
    <title>My Blog - Home Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <!-- import the common HTML -->
    <?php include('common.php') ?>

        <h2><a id="newpost" href="create.php">New Post</a></h2>

        <?php if($statement->rowCount() > 0): ?>

                <h1>Recently Posted Blog Entries</h1>
                <!-- traverse the rows of the tweets table -->

                <?php  for ($i=0; $i < 5; $i++): ?>
                    <div class="entry">
                        <h2><a href="read.php?id=<?= "{$rows[$i]['id']}" ?>" ><?= $rows[$i]['title'] ?></a></h2>
                        <a href="edit.php?id=<?= "{$rows[$i]['id']}" ?>">edit</a>
                        <h5><?= date( "F j, Y, g:i a", strtotime($rows[$i]['timestamp'])) ?></h5>

                        <?php if (strlen($rows[$i]['content']) > 200 ): ?>
                            <p>
                                <?= substr($rows[$i]['content'], 0, 200) ?>...<a class="toolong" href= "read.php?id=<?= "{$rows[$i]['id']}" ?>"> Read Full Post</a>
                            </p>
                            <?php else: ?>
                                <p><?= $rows[$i]['content'] ?></p>
                            <?php endif ?>
                    </div>
                <?php endfor ?>
        <?php else: ?>
            <h1>There are no posts.</h1>
        <?php endif ?>

</body>
</html>
