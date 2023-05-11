<!DOCTYPE html>
<html>
    <head>
        <title>Addnewcourse</title>
        <link rel="stylesheet" href="layout.css"/>
    </head>
    <body>
        <header>
            <a href="index.html">
                <img src="image/weblogo.png" alt="School logo" class="weblogo">
            </a>
        </header>

        <nav>
            <ul>
            <li>
                <a href="home.php">Home</a></li>
                <li><a href="report.php">Report</a></li>
            </ul>
        </nav>

        <main class="addcourse">

            <a id="link" href="addcourse.php"><h3>Add Course</h3></a>

            <div class="mytable">
                <?php include('fetch_one.php'); ?>
            </div>

        </main>

        <footer><p>&copy; CSYM019 2023</p></footer>
    </body>
</html>