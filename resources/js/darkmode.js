// const toggle = document.getElementById('toggleDark');
// const body = document.querySelector('body');

// toggle.addEventListener('click', function(){
//     this.classList.toggle('fa-sun');
//     if(this.classList.toggle('fa-moon')){
//         body.style.background = 'white';
//         body.style.color = 'black';
//         body.style.color = '#000';
//     }else{
//         body.style.background = 'black';
//         body.style.color = 'white';
//         body.style.color = '#fff';
//     }
// })

var icon = document.getElementById("toggleDark");

icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
}