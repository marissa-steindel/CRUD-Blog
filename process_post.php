<!----------------

    Final Project
    Name: Marissa Steindel
    Date: July 1, 2022
    Description: CMS
  Description: Inserts, updates, or deletes rows in the database according to the command value supplied in the POST superglobal.

------------------>


 <?php
    require('connect.php');

    $confirmation = false;

    if($_POST)
    {
        if(isset($_POST['title'])
        {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if(isset($_POST['content'])
        {
            $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if()
        {

        }
        if()
        {

        }
        if()
        {

        }
        if()
        {

        }

    }

    // CREATE: if new post, INSERT into DB
    if (    $_POST
            && !isset($_POST['id'])
            && !empty($_POST['title'])
            && !empty($_POST['content'])
            && strlen($_POST['title']) > 0
            && strlen($_POST['content']) > 0
            && !ctype_space($_POST['title'])
            && !ctype_space($_POST['content'])
            && $_POST['command'] == "Create"
        )
    {
        //  Sanitize user input
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        //  build the parameterized INSERT query
        $query = "INSERT INTO blog (title, content) VALUES (:title, :content)";
        $statement = $db->prepare($query);

        //  bind values to the parameters
        $statement->bindValue(':title', $title);
        $statement->bindValue(':content', $content);

        //  Execute the statement.
        if ($statement->execute())
        {
            $confirmation = "Blog entry succesfully posted.";
        }

    }

    // UPDATE: if updating existing post
    if(
            $_POST
            && isset($_POST['id'])
            && isset($_POST['title'])
            && isset($_POST['content'])
            && $_POST['command'] == "Update"
        )
    {
        // sanitize
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if(!$id)
        {
            header("Location: index.php");
            exit;
        }

        // build the UPDATE query with placeholders
        $query = "UPDATE blog SET title=:title, content=:content WHERE id=:id";

        // Prepare a PDO statement
        $statement = $db->prepare($query);

        // bind the sanitized values to the placeholders
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':content', $content);

        //  Execute the statement.
        if ($statement->execute())
        {
            $confirmation = "Blog entry successfully updated";
        }

    }


    // DELETE: if delete
    if(
            $_POST
            && isset($_POST['id'])
            && isset($_POST['title'])
            && isset($_POST['content'])
            && $_POST['command'] == "Delete"
        )
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $query = "DELETE FROM blog WHERE id=:id LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        if(!$id)
        {
            header("Location: index.php");
            exit;
        }

        //  Execute the statement.
        if ($statement->execute())
        {
            $confirmation = "Blog entry deleted.";
        }

    }

?>


<!DOCTYPE html>
<html>

<head>
    <title>My Blog - New Post</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

 <body>
    <?php if($confirmation): ?>
        <h2><?= $confirmation ?></h2>
    <?php else: ?>
        <h1>An error occured while processing your post.</h1>
        <h6>Both the title and content must be at least one character.</h6>
    <?php endif ?>
        <a href="index.php">Return Home</a>
 </body>

 </html>
