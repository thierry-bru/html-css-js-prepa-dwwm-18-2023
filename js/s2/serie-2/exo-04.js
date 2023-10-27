let x = parseInt(prompt('x?'))
let texte = "";
let u = document.querySelector('#u1');
for (i = 1; i <= 10; i++) {
    texte += `<li>${x}x${i}=${x * i}</li>`
}
u.innerHTML = texte;
