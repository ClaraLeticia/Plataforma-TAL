
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


function GERARPDF(){
    botao.style.visibility = 'hidden';
    window.print();function GERARPDF(){
        botao.style.visibility = 'hidden';
        window.print();
        }
        
}
    
