<?php
include 'db.php';

$result = mysqli_query($con, "SELECT * FROM topics ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Forum</title>
</head>
<body>

    <a href="create.php"> Add New Topic </a>
    <br><br>
    <table width="80%" border="1">
        <tr>
            <th>ID</th>
            <th>Tittle</th>
            <th>Content</th>
            <th>Created_At</th>
            <th>Updated_At</th>
        </tr>

        <?php
        while ($topic = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<td>".$topic['id']."</td>";
                echo "<td>".$topic['title']."</td>";
                echo "<td>".$topic['content']."</td>";
                echo "<td>".$topic['created_at']."</td>";
                echo "<td>".$topic['updated_at']."</td>";
                echo "<td><a href='show.php?id=$topic[id]'>Show </a> | <a href='delete.php?id=$topic[id]'>Delete </a></td></tr>";

        }


        ?>
    </table>

</body>
</html>