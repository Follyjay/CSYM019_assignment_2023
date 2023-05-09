<!DOCTYPE html>
<html>
    <head>
        <title>Addnewcourse</title>
        <link rel="stylesheet" href="layout.css"/>
    </head>
    <body>
        <header>
            <a href="index.html">
                <img src="weblogo.png" alt="School logo" class="weblogo">
            </a>
        </header>

        <nav>
            <ul>
                <li><a href="addcourse.html">New Course</a></li>
                <li><a href="updatecourse.html">Update/Delete Course</a></li>
                <li><a href="courseSelectionForm.html">Course Report</a></li>
            </ul>
        </nav>

        <main class="addcourse">

            <h3>Add New Courses</h3>

            <div class="mytable">
                <?php include('php_scripts/loadcourse.php'); ?>
            </div>

        </main>

        <footer><p>&copy; CSYM019 2023</p></footer>
    </body>
</html>