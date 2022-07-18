<?php
require "./partials/head.php"

?>
    <title>Login</title>
<?php
include("./partials/header.php")
?>
    <main>
        <form class="w-50" action="../controller/checkLogin.php" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="email" class="form-control" name="usuario" id="usuario" value="1@2.com">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="1234">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
<?php
require("./partials/footer.php")
?>