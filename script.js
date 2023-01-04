var i=0, j=0, k=0;


function calcular1(){
    var pagar = document.getElementById("dado1").value * 1299;
    document.getElementById("p1").innerHTML = pagar + "MZM";
    return pagar;
}
input1=document.getElementById("dado1");
input1.addEventListener('input', function () {
    total();
});
input2=document.getElementById("dado2");
input2.addEventListener('input', function () {
    total();
});
input3=document.getElementById("dado3");
input3.addEventListener('input', function () {
    total();
});

function calcular2(){
    var pagar = document.getElementById("dado2").value * 899;
    document.getElementById("p2").innerHTML = pagar +"MZM";
    return pagar;
    
}
function calcular3(){
    var pagar = document.getElementById("dado3").value * 3000;
    document.getElementById("p3").innerHTML=pagar + "MZM";
    return pagar;
}


document.getElementById("compra").onclick = function compra(){
    var t =calcular1()+calcular2()+calcular3();
    if(t === 0){
        alert("compra um item");
    }
}
function total(){
    var price=calcular1()+calcular2()+calcular3();
    document.getElementById("p4").innerHTML=price + "MZM";
    
}
