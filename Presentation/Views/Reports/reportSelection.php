<!--
  ~ Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project 
  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report Selection</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <!-- Include nav bar partial page -->
    <?php include_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/_navigationBar.php" ?>

</head>
<body>

<section class="section">
    <div class="container">

        <div class="title">
            <h1 class="title">Report Center</h1>
        </div>

        <div class="columns">
            <div class="column">
                <form method="get" action="soldProductReport.php">
                    <label class="label" for="startDate">Start Date (Inclusive)</label>
                    <div class="field">
                        <input class="input" type="date" name="startDate" id="startDate" required>
                    </div>

                    <label class="label" for="endDate">End Date (Exclusive)</label>
                    <div class="field">
                        <input class="input" type="date" name="endDate" id="endDate" required>
                    </div>

                    <div class="control is-pulled-right">
                        <input class="button is-primary" type="submit" name="generateReport" id="generateReport" value="Generate Report">
                    </div>
                </form>
            </div>
            <div class="column">
                <div class="title">
                    <h1 class="heading is-2">Report Sample</h1>
                </div>
                <figure class="image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
        </div>
    </div>
</section>

</body>
</html>