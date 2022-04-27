<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
</head>
<body>

    <a href="index.php"> Go back</a> <br><br>
    <form method="post" action="create.php">
        <table width="25%" border="0">
            <tr>
                <td>Tittle</td>
                <td> <input type="text" name="title"></td>
            </tr>

            <tr>
                <td>Content</td>
                <td> <input type="text" name="content"></td>
            </tr>

            <td></td>
                <td><button type="submit" name="Submit">Add</button> </td>
            </tr>
        </table>
    </form>
    <?php
    include_once ('db.php');

    if (isset($_POST['Submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $create_at = time();
        $updated_at = time();

        $result = mysqli_query($con, "INSERT INTO topics(title, content, created_at, updated_at) VALUES
                    ('$title', '$content', NOW(), NOW())");
        echo '<script>alert("Topic i rri u shtua")</script>';
    }
    ?>

</body>
</html>