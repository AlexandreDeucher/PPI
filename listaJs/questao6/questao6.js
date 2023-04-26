let add = document.getElementById('add');
let button = document.getElementById('button');
let lista = document.getElementById('list');

button.addEventListener('click', function() {
    let newItem = document.createElement('li');
    newItem.innerText = input.value;
    list.appendchild(newItem);
    input.value='';
});