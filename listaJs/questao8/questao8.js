let add = document.getElementById('add');
let button = document.getElementById('button');
let celsius = document.getElementById('celsius');


function scalcCelsius() {
    let newItem = document.createElement('li');
    newItem.innerText = add.value;
    celsius.appendChild(newItem);
}

function calcFahrenheit(){
    
}