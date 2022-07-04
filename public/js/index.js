var icon = document.getElementById("toggleDark");

icon.onclick = function () {
    document.body.classList.toggle("dark-theme");
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

const copyBtn = document.getElementById('copyButton1')
const copyText = document.getElementById('text1')

copyBtn.onclick = () => {
    copyText.select(); // Selects the text inside the input
    document.execCommand('copy'); // Simply copies the selected text to clipboard
    Swal.fire({ //displays a pop up with sweetalert
        icon: 'success',
        title: 'Text copied to clipboard',
        showConfirmButton: false,
        timer: 1000
    });
}


// function copy(copyId) {
//     var $inp = $("<span>");
//     $("body").append($inp);
//     $inp.val($("" + copyId).text()).select();
//     document.execCommand("copy");
//     $inp.remove();
// }

// $(document).ready(function () {
//     $("#copyButton1").click(
//         function () {
//             copy('#text1');
//         });
//     $("#copyButton2").click(
//         function () {
//             copy('#text2');
//         });
//     $("#copyButton3").click(
//         function () {
//             copy('#text3');
//         });
//     $("#copyButton4").click(
//         function () {
//             copy('#text4');
//         });
//     $("#copyButton5").click(
//         function () {
//             copy('#text5');
//         });
//     $("#copyButton6").click(
//         function () {
//             copy('#text6');
//         });
// });
