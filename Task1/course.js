var xhr = ""; //variable used for holding AJAX request

/*the function below checks if the browser supports AJAX request or not, 
sets the xhr variable to the appropriate request type based on the 
response and then go on to access the JSON file*/
function makeAjaxRequest() {
    // below is the conditional statement that checks if the request
    // type is supported by the browser or not.
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else {
        if (window.ActiveXObject) {
            xhr = new ActiveObject("MICROSOFT.XMLHTTP");
        }
    }
    //below is the conditional statement that accesses the course.json file
    //after the confirmation of the request type supported by the browser
    if (xhr){
        xhr.open("GET", "course.json", true);// AJAX request configuration to access course.json file
        xhr.send();//sends the configured request to the server
        xhr.onreadystatechange = showContents;//determines the success of the request through xhr readystate
    } else {
        document.getElementById("errormessage").innerHTML = "Error Fetching Response";//targets an element in course.html to display the error message
    }
}

/*the function below checks the state of the AJAX request and status to see
if it is successful and then parse the response out to be loaded into an 
html table in course.html*/
function showContents() {
    if (xhr.readyState == 4) { // checks if a response has been returned
        if (xhr.status == 200) {// checks if the request is successful
            let data = JSON.parse(xhr.responseText);//parsing the returned response in JSON format
            let table = document.getElementById("table");//targeting a table element in course.html
            let txt = "";//variable that takes in the resultant markup with the manipulated response
            txt += "<tr><th></th><th>id</th><th>Course Title</th><th>Overview</th><th>Course Highlights</th></tr>";//concantinates html-markup for table-head into variable named txt
            for (let i in data.courses){//looping through the returned response
                txt += "<tr><td>" + "<input type=checkbox />" + "</td><td>" + data.courses[i].id + "</td><td>" + data.courses[i].title + "</td><td>" + data.courses[i].overview + "</td><td>" + data.courses[i].highlights + "</td></tr>";//concantinates the returned response and html-markup into a variable named txt 
            }
            table.innerHTML = txt;// injects the resultant markup into the DOM
        } else {
            document.getElementById("errormessage") = "Error Populating Table";//targets an element in course.html to display the error message
        }
    }
}
setInterval(showContents, 100000);// sets the interval for the function to re-execute

document.addEventListener("DOMContentLoaded", makeAjaxRequest)//executes the code after loading the course.html document