function sorteia(){
    let numero=Math.random();
    let pHtml=document.createElement("p");
    pHtml.innerHTML=numero;

    let divNumeros=document.getElementById("numeros");
    divNumeros.appendChild(pHtml);
}
function MudaCor(){
    let ps=document.getElementsByTagName("p");
    for (let i = 0; i <ps.length; i++) {
        ps[i].style.backgroundColor=sorteioCor2();
        
    }
}
function soteioCor(){
    color ="#"+Math.floor(Math.random()*16777215);
    return color;
}
function sorteioCor2(){
    let digitosHexa="0123456789ABCDEF";
    // #AABBCC
    let color = "#";
    for (let i = 0; i < 6; i++) {
        color+=digitosHexa[Math.floor(Math.random()*16)];
    }
    return color;
}