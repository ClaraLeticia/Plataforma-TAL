
// EVENTO PARA O CARD DE TUTOR NA PAGINA DE VISUALIZAR TUTORES
var btn_ver_mais = document.querySelectorAll('.ver-mais');
var btn_ver_menos = document.querySelectorAll('.ver-menos');

var card_tutor_pequeno = document.querySelectorAll('.card-tutor-pequeno')
var card_tutor_grande = document.querySelectorAll('.card-tutor-grande');

for (let numbtn = 0; numbtn < btn_ver_mais.length; numbtn++) {
    btn_ver_mais[numbtn].addEventListener("click", function() {
        card_tutor_pequeno[numbtn].classList.toggle('invisivel');
        card_tutor_grande[numbtn].classList.toggle('visivel');
    });
    btn_ver_menos[numbtn].addEventListener("click", function() {
        card_tutor_pequeno[numbtn].classList.toggle('invisivel');
        card_tutor_grande[numbtn].classList.toggle('visivel');
    });
}

// GERADOR DE PDF
function GERARPDF(){
    botao.style.visibility = 'hidden';
    window.print();function GERARPDF(){
        botao.style.visibility = 'hidden';
        window.print();
        }
}

// HABILITAR E DESABILITAR INPUTS DOS HORARIOS NO CADASTRO DE TUTOR
function HABILITAR_HORARIOS_SEGUNDA(checkboxSegunda){
    var horariosSegunda = document.querySelectorAll('.horario_segunda');
    if(!checkboxSegunda.checked == true){
        horariosSegunda[0].value = '';
        horariosSegunda[1].value = '';
        horariosSegunda[0].setAttribute('disabled','disabled');
        horariosSegunda[1].setAttribute('disabled','disabled');
    } else {
        horariosSegunda[0].removeAttribute('disabled','disabled');
        horariosSegunda[1].removeAttribute('disabled','disabled');
    }
}
function HABILITAR_HORARIOS_TERCA(checkboxTerca){
    var horariosTerca = document.querySelectorAll('.horario_terca');
    if(!checkboxTerca.checked == true){
        horariosTerca[0].value = '';
        horariosTerca[1].value = '';
        horariosTerca[0].setAttribute('disabled','disabled');
        horariosTerca[1].setAttribute('disabled','disabled');
    } else {
        horariosTerca[0].removeAttribute('disabled','disabled');
        horariosTerca[1].removeAttribute('disabled','disabled');
    }
}
function HABILITAR_HORARIOS_QUARTA(checkboxQuarta){
    var horariosQuarta = document.querySelectorAll('.horario_quarta');
    if(!checkboxQuarta.checked == true){
        horariosQuarta[0].value = '';
        horariosQuarta[1].value = '';
        horariosQuarta[0].setAttribute('disabled','disabled');
        horariosQuarta[1].setAttribute('disabled','disabled');
    } else {
        horariosQuarta[0].removeAttribute('disabled','disabled');
        horariosQuarta[1].removeAttribute('disabled','disabled');
    }
}
function HABILITAR_HORARIOS_QUINTA(checkboxQuinta){
    var horariosQuinta = document.querySelectorAll('.horario_quinta');
    if(!checkboxQuinta.checked == true){
        horariosQuinta[0].value = '';
        horariosQuinta[1].value = '';
        horariosQuinta[0].setAttribute('disabled','disabled');
        horariosQuinta[1].setAttribute('disabled','disabled');
    } else {
        horariosQuinta[0].removeAttribute('disabled','disabled');
        horariosQuinta[1].removeAttribute('disabled','disabled');
    }
}
function HABILITAR_HORARIOS_SEXTA(checkboxSexta){
    var horariosSexta = document.querySelectorAll('.horario_sexta');
    if(!checkboxSexta.checked == true){
        horariosSexta[0].value = '';
        horariosSexta[1].value = '';
        horariosSexta[0].setAttribute('disabled','disabled');
        horariosSexta[1].setAttribute('disabled','disabled');
    } else {
        horariosSexta[0].removeAttribute('disabled','disabled');
        horariosSexta[1].removeAttribute('disabled','disabled');
    }
}

// VERIFICA SE NO FORMULARIO TEM NO MINIMO 3 DIAS MARCADOS
function VALIDAR_DIAS(){
    
}

function ALTERAR_SENHA(){
    if(window.confirm('Tem certeza que deseja alterar a senha?\nO campo da senha atual será apagado mas você poderá recuperar recarregando a página ;)')){
        var input_senha = document.querySelectorAll('.senha');
        input_senha[0].value = '';
        input_senha[1].value = '';
        input_senha[0].removeAttribute('readonly','readonly');
        input_senha[1].removeAttribute('readonly','readonly');
        input_senha[0].focus();
    }
}



    

