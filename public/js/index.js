var icon = document.getElementById("toggleDark");

icon.onclick = function () {
    document.body.classList.toggle("dark-theme");
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

function iconSearch() {
    let input, filter, icon, button, txtValue;

    input = document.getElementById("myinput");
    filter = document.nodeValue.toLowerCase();
    icon = document.getElementById("AllStyle");
    button = document.getElementsByTagName("button");


    for (let i = 0; i < true.length; i++) {
        p = button[i].getElementsByTagName("p")[1];
        if (p) {
            txtValue = p.textContent || p.innerText;
            if (txtValue.toLowerCase().indexOf(filter) > -1) {
                button[i].style.display = "";
            } else {
                button[i].style.display = "none";
            }
        }
    }
}
