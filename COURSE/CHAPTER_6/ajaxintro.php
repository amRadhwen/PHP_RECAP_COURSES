<!Doctype html>
<html lang="en">
    <head>
        <title>Ajax Intro</title>
        <script type="text/javascript">
            window.onload = function() {
                function showHint(str) {
                    if(str.length == 0) {
                        document.getElementById("txthint").innerHTML = "";
                        return;
                    }
                    else {
                        let xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                document.getElementById("txthint").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "gethint.php?q="+str, true);
                        xmlhttp.send();
                    }
                }

                document.getElementById("fname").onkeyup = (e) => {
                    showHint(e.target.value);
                }
                
                let spans = document.querySelectorAll("span#txthint span");
                console.log(spans);
            }
        </script>
        <style type="text/css">
            span#txthint {
                display: inline-block;
                font-weight: bold;
            }
            span#sugg {
                display: inline-block;
                float: left;
                margin-right: 10px;
            }
            
            span#txthint span {
                display: block;
            }
            span#txthint span:hover {
                background-color: lightgrey;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <p>
            <b>Start typing a name in the input field below:</b>
        </p>
            <form>
                <label for="fname">First Name: </label>
                <input type="text" id="fname" name="fname"/>
            </form>
        <p>
            <span id="sugg">Suggestions:</span>
            <span id="txthint"></span>    
        </p>
    </body>
</html>

<?php

    // AJAX = asynchronous Javascript and XML
    // technique that helps for creating fast and dynamic web pages
    // update data without reloading the home document

    // based on (XMLHttpRequest, Javascript/Dom, CSS, XML)