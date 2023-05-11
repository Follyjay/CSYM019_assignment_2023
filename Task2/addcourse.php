<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Addnewcourse</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="layout.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js_scripts/insertdata.js"></script>
    </head>
    <body>
        <header>
            <a href="index.html">
                <img src="image/weblogo.png" alt="School logo" class="weblogo">
            </a>
        </header>

        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="report.php">Report</a></li>
            </ul>
        </nav>

        <main class="addcourse">

            <h3 id="add_new">New Course</h3>

            <form class="form" id="courseregistration">
                <div class="row">
                    <label>Course Title:</label><br>
                    <input class="acourse_input" type="text" name="ttl" required>
                </div><br>

                <div class="row">
                    <label>Course Overview:</label><br>
                    <textarea class="acourse_input" name="ovv" rows="5" cols="50" required></textarea><br>
                </div><br>

                <div class="row">
                    <label>Course Highlights:</label><br>
                    <textarea class="acourse_input" name="hlt" rows="6" cols="50" required></textarea><br>
                </div><br>

                <div class="row">
                    <label>Course Details:</label><br>
                    <textarea class="acourse_input" name="dtl" rows="4" cols="50" required></textarea><br>
                </div>
                
                <hr>

                <p><b>Course Modules</b></p>Please fill in the module title and codes appropriately
                <div class="modules">
                    <label id="mod_title">Module Title</label>
                    <label id="mod_code">Code</label>
                    <label id="mod_unit" style="color: red; margin-left: 17%;">Units</label>

                    <div>
                        <label>1:</label>
                        <input class="module_input modt" type="text" name="mt1" required>
                    
                        <input class="module_input modc" type="text" name="mc1" required>
                        <input class="module_input modu" style="width: 5%;" type="text" name="mu1" required>
                    </div><br>

                    <div>
                        <label>2:</label>
                        <input class="module_input modt" type="text" name="mt2" required>
    
                        <input class="module_input modc" type="text" name="mc2" required>
                        <input class="module_input modu" style="width: 5%;" type="text" name="mu2" required>
                    </div><br>

                    <div>
                        <label>3:</label>
                        <input class="module_input modt" type="text" name="mt3" required>

                        <input class="module_input modc" type="text" name="mc3" required>
                        <input class="module_input modu" style="width: 5%;" type="text" name="mu3" required>
                    </div><br>

                    <div>
                        <label>4:</label>
                        <input class="module_input modt" type="text" name="mt4" required>

                        <input class="module_input modc" type="text" name="mc4" required>
                        <input class="module_input modu" style="width: 5%;" type="text" name="mu4" required>
                    </div><br>
                    
                    <div>
                        <label>5:</label>
                        <input class="module_input modt" type="text" name="mt5" required>

                        <input class="module_input modc" type="text" name="mc5" required>
                        <input class="module_input modu" style="width: 5%;" type="text" name="mu5" required>
                    </div>
                </div><hr>

                <p><b>Entry Requirements</b></p>
                <div class="row">
                    <label>1:</label>
                    <input class="er_input" type="text" name="er1" required><br>
                
                    <label>2:</label>
                    <input class="er_input" type="text" name="er2" required>    
                </div><br><hr>
                
                <div class="row">
                    <label>Fees(&pound;):</label>
                    <input class="fee_input" type="text" name="fee" required><br>
                </div><br>

                <div class="row">
                    <label>Style of Teaching:</label><br>
                    <textarea class="acourse_input" name="faq" rows="4" cols="50" required></textarea><br>
                </div>

                <button class="ac_submit" id="addcourse" type="submit">Add Course</button>
                
            </form>

        </main>

        <footer><p>&copy; CSYM019 2023</p></footer>
    </body>
</html>