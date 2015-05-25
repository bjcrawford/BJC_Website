/**
 * Calls the neccessary functions for page initialization. Called
 * from the close of every page.
 */
function initPage() {
    initCurrentPage();
}

/**
 * Determines the current page and takes the appropriate actions
 * for that page's initialization.
 */
function initCurrentPage() {
    
    if (document.getElementById("page").className.indexOf("home") > -1) {
        document.title = "Home | BJC";
        document.getElementById("nav-home").className = "active";
    }
    else if (document.getElementById("page").className.indexOf("resume") > -1) {
        document.title = "Resume | BJC";
        document.getElementById("nav-resume").className = "active";
    }
    else if (document.getElementById("page").className.indexOf("projects") > -1) {
        document.title = "Projects | BJC";
        document.getElementById("nav-projects").className = "active";
    }
    else if (document.getElementById("page").className.indexOf("contact") > -1) {
        document.title = "Contact | BJC";
        document.getElementById("nav-contact").className = "active";
    }
}