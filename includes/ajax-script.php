<script>
// Create new XMLTHttpRequest object
var xhttp = new XMLHttpRequest();

// Creating function so this code fragment can be re-used easily
function repetitiveLoading(){
    xhttp.onreadystatechange = function () {
        // Replace element with received data if the request is finished, the response is ready and the status is OK
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax-container").innerHTML = this.responseText;
        }
    };
}

function loadNextImage() {
    repetitiveLoading();
    // Making a get request to a file on the same server with async true
    xhttp.open("GET", "ajax-pictures.php", true);
    // Sends off the request
    xhttp.send();
}
</script>