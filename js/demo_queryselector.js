let nombre = (Math.random()*10).toFixed(0);
console.log(nombre);
let paragraphes = document.querySelectorAll("p");
console.log(paragraphes);
paragraphes.forEach(paragraphe => {
    paragraphe.innerHTML=nombre;
});


