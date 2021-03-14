<!--
  ~ Copyright (c) 2021. Jared Heeringa - GCU Project
  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <?php include_once "../../../_navigationBar.php"; ?>

</head>
<body>

<section class="section" id="LoginForm">
    <div class="container">
        <h1 class="title">Login</h1>

        <form action="../../Handlers/loginHandler.php" method="post">
            <!-- Username field -->
            <div class="field">
                <label class="label" for="username">Username</label>
                <div class="control">
                    <input class="input" type="text" name="username" id="username" placeholder="Username" required>
                </div>
            </div>

            <!--    Password Field -->
            <div class="field">
                <label class="label" for="password">Password</label>
                <div class="control">
                    <input class="input" type="password" name="password" id="password" placeholder="Password" required>
                </div>
            </div>

            <input class="button" type="reset" value="Clear Fields">
            <input class="button is-primary" type="submit" value="Login">

        </form>
    </div>
</section>


</body>
</html>