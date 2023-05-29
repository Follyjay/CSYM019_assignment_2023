<!DOCTYPE html>
<html>
    <head>
        <title>View Report Page</title>
        <link rel="stylesheet" href="layout.css"/>
        <script src="js_scripts/toggle.js"></script>
    </head>
    <body>
        <header>
            <a href="index.php">
                <img src="image/weblogo.png" alt="School logo" class="weblogo">
            </a>
        </header>

        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="reportpage.php">Report</a></li>
            </ul>
        </nav>

        <main class="addcourse">

            <h3>Report</h3></a>

            <form action="report.php" method="post">

                <div class="mytable">
                    <table>
                        <tr>
                            <th><input type="checkbox" id="cbx" onchange="toggleAll(this)"></th>
                            <th>Title</th>
                            <th>Higlights</th>
                            <th>Details</th>
                            <th>Fees</th>
                        </tr>
                        
                        <?php include('fetch_two.php'); ?>
                    </table>
                </div>

                <div class="btnAction">
                    <button id="btnGenerate" name="getselected">Generate Report</button>
                    <button id="btnCancel">Cancel</button>
                </div>

            </form>

        </main>

        <footer><p>&copy; CSYM019 2023</p></footer>
    </body>
</html>