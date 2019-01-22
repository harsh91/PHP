<html>
    <body>

        <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
            Name:<input type="text" name="fname" />
            <input type="submit" name="submit" value="Submit"/>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if($_POST == null || $_POST["fname"] == null) {
                    echo "No data!!";
                } else {
                    echo $_POST["fname"];
                }
            }
        ?>

    </body>
</html>