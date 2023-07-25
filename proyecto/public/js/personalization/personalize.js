// BOTONES ACTIVE PAR APARTADOS PERSONALIZACION
const tabLink=document.querySelectorAll('.tab-link');
const formularios=document.querySelectorAll('.formulario');

for (let x = 0; x < tabLink.length; x++) {
    
    tabLink[x].addEventListener('click',()=>{
        tabLink.forEach((tab)=> tab.classList.remove('active'));
        tabLink[x].classList.add('active');
        formularios.forEach((form)=>form.classList.remove('active'));
        formularios[x].classList.add('active');
      
    })
}
const tabs = document.querySelectorAll('.tab-link');
const tabContents = document.querySelectorAll('.tab-content');

tabs.forEach(tab => {
tab.addEventListener('click', () => {
const target = tab.getAttribute('data-target');

tabs.forEach(tab => tab.classList.remove('active'));
tabContents.forEach(content => content.classList.remove('active'));

tab.classList.add('active');
document.querySelector(`.${target}`).classList.add('active');
});
});

// BOTONES PARA SELECCIONAR TIPO BUTTON TYPE
const btn = document.querySelectorAll('.buttonT');
const containerView = document.querySelector('.container-view');

btn.forEach(button => {
button.addEventListener('click', () => {
btn.forEach(btn => btn.classList.remove('selected'));
button.classList.add('selected');

const tipo = button.textContent.trim().toUpperCase();
if (tipo === 'CURVA') {
containerView.innerHTML = '<img src="imgs/curve-default.png" alt="Curva" class="imgpers">';
} else if (tipo === 'PLANA') {
containerView.innerHTML = '<img src="imgs/flat-default.jpg" alt="Plana" class="imgpers">';
} else {
containerView.innerHTML = '';
}
});
});

// BOTONES PARA SELECCIONAR TAMAÑO, BUTTON SIZE
const buttons = document.querySelectorAll('.buttonS');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        buttons.forEach(btn => btn.classList.remove('selected'));
        button.classList.add('selected');
      });
    });

// FUNCIONES SELECTED PARA ELEGIR COLOR  
const colorPalette = document.getElementById('color-palette');
const colors = colorPalette.getElementsByClassName('containercolor');
    for (let containercolor of colors) {
      containercolor.addEventListener('click', () => {
        for (let containercolor of colors) {
          containercolor.classList.remove('selected');
        }
        containercolor.classList.add('selected');
      });
    }
