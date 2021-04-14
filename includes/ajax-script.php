<script>
// Create new XMLTHttpRequest object
var xhttp = new XMLHttpRequest();

// Creating function so this code fragment can be re-used easily
function repetitive_loading(){
    xhttp.onreadystatechange = function () {
        // Replace element with received data if the request is finished, the response is ready and the status is OK
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax-container").innerHTML = this.responseText;
        }
    };
}

function load_next_image() {
    repetitive_loading();
    // Making a get request to a file on the same server with async true
    xhttp.open("GET", "ajax-pictures.php", true);
    // Sends off the request
    xhttp.send();
}

function load_next_quote() {
    repetitive_loading();
    // Making a get request to a file on the same server with async true
    xhttp.open("GET", "ajax-quotes.php", true);
    // Sends off the request
    xhttp.send();
}
</script>