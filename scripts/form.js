let formCrear = document.querySelector(".crear");
let formEliminar = document.querySelector(".eliminar");
let formModificar = document.querySelector(".modificar");

let createBtn = document.querySelector(".create");
let deleteBtn = document.querySelector(".delete");
let updateBtn = document.querySelector(".update");

createBtn.addEventListener("click", ()=>{
    formCrear.classList.toggle("abrirForm");

});

deleteBtn.addEventListener("click", ()=>{
    formEliminar.classList.toggle("abrirForm");
});

updateBtn.addEventListener("click", ()=>{
    formModificar.classList.toggle("abrirForm");
});

