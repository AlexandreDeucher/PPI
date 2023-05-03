function mudaBotao(){

    var button = document.getElementById("btn");

    button.style.left = Math.random() * window.innerWidth + "px";
    button.style.top = Math.random() * window.innerHeight + "px";
    }