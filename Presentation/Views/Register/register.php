<!--
  ~ Copyright (c) 2021. Jared Heeringa - GCU Project
  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <?php include_once "../../../_navigationBar.php"; ?>

</head>
<body>


<section class="section" id="registrationForm">
    <div class="container">
        <h1 class="title">Register</h1>

        <form action="../../Handlers/registerHandler.php" method="post">
            <!-- First Name -->
            <div class="field">
                <label class="label" for="firstName">First Name</label>
                <div class="control">
                    <input class="input" type="text" name="firstName" id="firstName" placeholder="First Name" required>
                </div>
            </div>

            <!-- Last Name -->
            <div class="field">
                <label class="label" for="lastName">Last Name</label>
                <div class="control">
                    <input class="input" type="text" name="lastName" id="lastName" placeholder="Last Name" required>
                </div>
            </div>

            <!-- Username -->
            <div class="field">
                <label class="label" for="username">Username</label>
                <div class="control">
                    <input class="input" type="text" name="username" id="username" placeholder="Username" required>
                </div>
            </div>

            <!-- Email Address -->
            <div class="field">
                <label class="label" for="email">Email Address</label>
                <div class="control">
                    <input class="input" type="email" name="email" id="email" placeholder="Email Address" required>
                </div>
            </div>

            <!-- Password -->
            <div class="field">
                <label class="label" for="password">Password</label>
                <div class="control">
                    <input class="input" type="password" name="password" id="password" placeholder="Password" required>
                </div>
            </div>

            <!-- Date of Birth -->
            <div class="field">
                <label class="label" for="dateOfBirth">Date of Birth (MM-DD-YYYY)</label>
                <div class="control">
                    <input class="input" type="date" name="dateOfBirth" id="dateOfBirth" required>
                </div>
            </div>

            <!-- Buttons -->
            <input class="button" type="reset" value="Clear Fields">
            <input class="button is-primary" type="submit" value="Register">

        </form>
    </div>
</section>

</body>

<footer class="footer">
    <div class="content has-text-centered">
        <p>(C) 2021 - Jared Heeringa Test</p>
    </div>
</footer>
</html>