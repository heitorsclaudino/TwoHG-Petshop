let senha = document.getElementById('senha');
let conSenha =document.getElementById('conSenha');
let alerta = document.getElementById('alerta');

function verifica(){
    if(senha.value != conSenha.value){
        alerta.innerHTML = "As senhas não estão iguais!";
    } else {
        alerta.innerHTML = "";
    }
}

let senhaAdm = document.getElementById('senhaAdm');
let conSenhaAdm = document.getElementById('conSenhaAdm');
let alertaAdm = document.getElementById('alertaAdm');

function verificaAdm(){
    if(senhaAdm.value != conSenhaAdm.value){
        alertaAdm.innerHTML = "As senhas não estão iguais!";
    } else {
        alertaAdm.innerHTML = "";
    }
}