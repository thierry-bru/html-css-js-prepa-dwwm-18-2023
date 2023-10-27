let resultat = 1;
let nombre = parseInt(prompt('nombre?'));
for (i = 1; i <= nombre; i++)
    resultat *= i;
console.log(`${nombre}!=${resultat}`);