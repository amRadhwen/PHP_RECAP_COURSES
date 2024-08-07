window.onload = () => {
    let btn = document.getElementById("btn");
    // Declare the XMLHttpRequest variable
    function getXMLHttp() {
        let xmlHttp;
        try {
            xmlHttp = new XMLHttpRequest();
        }
        catch (e) {
            // for old Internet Explorer users it is different than the others
            try {
                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e) {
                try {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e) {
                    alert("Old browser? Upgrade today so you can use AJAX!")
                    return false;
                }
            }
        }
        return xmlHttp;
    }
    function AjaxRequest() {
        var xmlHttp = getXMLHttp();
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4) {
                HandleResponse(xmlHttp.responseText);
            }
        }
        xmlHttp.open("GET", "sync.php", true);
        xmlHttp.send(null);
    }
    function HandleResponse(response) {
        document.getElementById('AjaxResponse').innerHTML = response;
    }

    btn.onclick = () => AjaxRequest();
}