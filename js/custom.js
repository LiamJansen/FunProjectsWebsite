var $pageTitle = document.title;
$(document.body).addClass($pageTitle);

if (document.title == "Pictures") {
    $(".firstMenNavbar").append('<li class="nav-item"><a class="nav-link" href="insertpics.php">Update images...</span></a></li>');
} 