'use strict';

/* ===== Enable Bootstrap Popover (on element  ====== */
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

/* ==== Enable Bootstrap Alert ====== */
//var alertList = document.querySelectorAll('.alert')
//alertList.forEach(function (alert) {
//  new bootstrap.Alert(alert)
//});

const alertList = document.querySelectorAll('.alert')
const alerts = [...alertList].map(element => new bootstrap.Alert(element))


/* ===== Responsive Sidepanel ====== */
const sidePanelToggler = document.getElementById('sidepanel-toggler'); 
const sidePanel = document.getElementById('app-sidepanel');  
const sidePanelDrop = document.getElementById('sidepanel-drop'); 
const sidePanelClose = document.getElementById('sidepanel-close'); 

window.addEventListener('load', function(){
	responsiveSidePanel(); 
});

window.addEventListener('resize', function(){
	responsiveSidePanel(); 
});


function responsiveSidePanel() {
    let w = window.innerWidth;
	if(w >= 1200) {
	    // if larger 
	    //console.log('larger');
		sidePanel.classList.remove('sidepanel-hidden');
		sidePanel.classList.add('sidepanel-visible');
		
	} else {
	    // if smaller
	    //console.log('smaller');
	    sidePanel.classList.remove('sidepanel-visible');
		sidePanel.classList.add('sidepanel-hidden');
	}
};

sidePanelToggler.addEventListener('click', () => {
	if (sidePanel.classList.contains('sidepanel-visible')) {
		console.log('visible');
		sidePanel.classList.remove('sidepanel-visible');
		sidePanel.classList.add('sidepanel-hidden');
		
	} else {
		console.log('hidden');
		sidePanel.classList.remove('sidepanel-hidden');
		sidePanel.classList.add('sidepanel-visible');
	}
});



sidePanelClose.addEventListener('click', (e) => {
	e.preventDefault();
	sidePanelToggler.click();
});

sidePanelDrop.addEventListener('click', (e) => {
	sidePanelToggler.click();
});



/* ====== Mobile search ======= */
const searchMobileTrigger = document.querySelector('.search-mobile-trigger');
const searchBox = document.querySelector('.app-search-box');

searchMobileTrigger.addEventListener('click', () => {

	searchBox.classList.toggle('is-visible');
	
	let searchMobileTriggerIcon = document.querySelector('.search-mobile-trigger-icon');
	
	if(searchMobileTriggerIcon.classList.contains('fa-magnifying-glass')) {
		searchMobileTriggerIcon.classList.remove('fa-magnifying-glass');
		searchMobileTriggerIcon.classList.add('fa-xmark');
	} else {
		searchMobileTriggerIcon.classList.remove('fa-xmark');
		searchMobileTriggerIcon.classList.add('fa-magnifying-glass');
	}
	
		
	
});


// Cria uma variável para armazenar a hora atual
function atualizarRelogio() {
	const relogioElement = document.getElementById("relogio");
	const agora = new Date();
	const horas = agora.getHours().toString().padStart(2, '0');
	const minutos = agora.getMinutes().toString().padStart(2, '0');
	const segundos = agora.getSeconds().toString().padStart(2, '0');

	const horaFormatada = `${horas}:${minutos}:${segundos}`;
	relogioElement.textContent = horaFormatada;
}

// Atualizar o relógio a cada segundo
setInterval(atualizarRelogio, 1000);

// Chamar a função para exibir o horário atual imediatamente
atualizarRelogio();