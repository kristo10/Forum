<?php
  include 'db.php';

 $id = $_GET['id'];

  $result = 'SELECT * FROM topics WHERE id = ' . $id;
  $queryRow = mysqli_query($con, $result);

    $topicData = mysqli_fetch_assoc($queryRow);

    $query = 'SELECT * FROM replies WHERE topic_id = ' . $id;



    if (isset($_POST['Submit'])) {
        $content = $_POST['content'];
        $result = mysqli_query($con, "INSERT INTO replies( topic_id,content) VALUES ('$id','$content')");
    }

    $repliesQuery = mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>Topic</h2>

<a href="index.php"> Go back </a><br>
<h2>Title: <?php echo $topicData['title']; ?></h2>
<p><?php echo $topicData['content']; ?></p>

<form method="POST" action="show.php?id=<?php echo $_GET['id']; ?>">
    <textarea name="content" value=<?php echo $topicData['content']; ?>></textarea>

    <button type="submit" name="Submit">Save Reply</button>

<table>
    <tr>
        <th>ID</th>
        <th>Content</th>
    </tr>
    <?php

        while (($reply = mysqli_fetch_array($repliesQuery))){
    ?>
        <tr>
            <td><?php echo $reply['id'] ?></td>
            <td><?php echo $reply['content']; ?></td>
        </tr>
    <?php
            }
    ?>
</table>
</form>


</body>
</html>


