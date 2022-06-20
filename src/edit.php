<?php
include "header.php"
?>
<div class="container">
    <h2>TODO LIST</h2>
    <h3>Add Item</h3>
    <form action="" method="post">
        <p>
            <input id="new-task" name="new_task" value="<?php echo $_SESSION['todo'][$_GET['id']] ?>" type="text">
            <button id="btn" type="submit">update</button>
        </p>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $task = $_POST["new_task"];
        $_SESSION['todo'][$_GET['id']] = $task;
        header("Location:tasks.php");
    };
    ?>
</div>
</body>

</html>