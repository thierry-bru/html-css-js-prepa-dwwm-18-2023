
let boutons = document.querySelectorAll('.bouton');
boutons.forEach(bouton => {
    bouton.addEventListener('click',getValeur);
});

let boutonEgal = document.querySelector('#egal');
boutonEgal.addEventListener('click',calculer)

function getValeur(event)
{
    console.log(event.target.value);
    let tampon = document.querySelector('#tampon');
    tampon.value+=event.target.value;
}

function calculer(event)
{
    let tampon = document.querySelector('#tampon');
    let ecran = document.querySelector('#ecran');
    ecran.innerHTML = eval(tampon);
}