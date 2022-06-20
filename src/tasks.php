<?php
include "header.php";
?>
<div class="container">
    <h2>TASK LIST</h2>
    <h3>Add Item</h3>
    <form action="" method="post">
        <p>
            <input id="new-task" name="new_task" type="text">
            <button id="btn" type="submit">Add</button>
        </p>
    </form>

    <?php
    if (!isset($_SESSION["todo"])) {
        $_SESSION["todo"] = array();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $task = $_POST["new_task"];

        array_push($_SESSION["todo"], $task);
    };
    ?>

    <h3>Todo</h3>
    <ul id="incomplete-tasks">

        <?php
        foreach ($_SESSION["todo"] as $key => $value) {
            echo "<li>
                <form action='checkbox.php' method='post'>
                <input type='checkbox' onclick='form.submit()' value='$key' name='chk_$key'></form>  
                <label>$value</label><input type='text'>
                <a href='edit.php?id=$key'><button id='btn' class='edit'>Edit</button></a>
                <a href='remove.php?id=$key'><button id='btn' class='delete'>Delete</button></a> 
                </li>";
        };
        ?>

    </ul>

    <h3>Completed</h3>
    <ul id="completed-tasks">
        <?php
        foreach ($_SESSION["complete_todo"] as $key => $value) {
            echo "<li>
                <form action='uncheck.php' method='post'>
                    <input type='checkbox' onclick='form.submit()' value='$key' name='unchk_$key'>
                </form>  
                <label>$value</label><input type='text'> 
                <a href='delete.php?id=$key'><button id='btn' class='delete'>Delete</button></a>
                 </li>";
        };
        ?>
    </ul>
</div>
<?php
?>
</body>

</html>