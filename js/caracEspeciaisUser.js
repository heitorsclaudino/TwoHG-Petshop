let cpf = document.getElementById('cpf');
let cnpj = document.getElementById('cnpj');
let tel = document.getElementById('tel');

cpf.addEventListener('keypress', () => {
    let comprimento = cpf.value.length;

    if (comprimento == 3 || comprimento == 7){
        cpf.value += '.';
    } else if (comprimento == 11){
        cpf.value += '-';
    }
})

cnpj.addEventListener('keypress', () => {
    let comprimento = cnpj.value.length;

    if (comprimento == 2 || comprimento == 6){
        cnpj.value += '.';
    } else if (comprimento == 10){
        cnpj.value += '/';
    } else if (comprimento == 15){
        cnpj.value += '-';
    }
})

tel.addEventListener('keypress', () => {
    let comprimento = tel.value.length;

    if (comprimento == 0){
        tel.value += '(';
    } else if (comprimento == 3){
        tel.value += ')';
    } else if (comprimento == 9){
        tel.value += '-';
    }
})