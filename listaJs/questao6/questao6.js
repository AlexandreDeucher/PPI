let add = document.getElementById('add');
let button = document.getElementById('button');
let list = document.getElementById('list');


function salvar() {
    let newItem = document.createElement('li');
    newItem.innerText = add.value;
    list.appendChild(newItem);
}