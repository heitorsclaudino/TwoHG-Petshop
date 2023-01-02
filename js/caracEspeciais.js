let cpfAdm = document.getElementById('cpfAdm');
let telAdm = document.getElementById('telAdm');

cpfAdm.addEventListener('keypress', () =>{
    let comprimento = cpfAdm.value.length;
    if(comprimento == 3 || comprimento == 7){
        cpfAdm.value += '.';
    } else if (comprimento == 11){
        cpfAdm.value += '-';
    }
})

telAdm.addEventListener('keypress', () =>{
    let comprimento = telAdm.value.length;
    if (comprimento == 0){
        telAdm.value += '(';
    } else if (comprimento == 3){
        telAdm.value += ')';
    } else if (comprimento == 9){
        telAdm.value += '-';
    }
})