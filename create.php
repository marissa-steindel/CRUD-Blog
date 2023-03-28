<!----------------

  Assignment 3 - Blog Application
  Name: Marissa Steindel
  Date: June 8, 2022
  Description: Form for database insertion.

------------------>



<!DOCTYPE html>
<html>

<head>
    <title>My Blog - Post a New Entry</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <!-- import the common HTML -->
    <?php include('common.php') ?>
    <?php require('authenticate.php') ?>

        <form id="newpost" method="post" action="process_post.php" >

                <label for="title">Title</label>
                <input id="title" name="title" autofocus>

            <div>
                <label for="content"></label>
                <textarea id="content" name="content" rows="10" cols="80" maxlength="5000" placeholder="Wadda ya wanna say?" ></textarea>
            </div>

            <div>
                <input type="submit" name="command" value="Create">
            </div>

        </form>

</body>
</html>
