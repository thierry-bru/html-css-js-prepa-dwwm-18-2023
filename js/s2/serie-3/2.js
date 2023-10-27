let nombreEtoiles = 0;
do
{
    nombreEtoiles =parseInt(prompt('nb etoile?'));
   if ((isNaN(nombreEtoiles))||(nombreEtoiles<1)||(nombreEtoiles>11))
    console.log(`le nombre d'etoile n'est pas correct`);
}
while ((isNaN(nombreEtoiles))||(nombreEtoiles<1)||(nombreEtoiles>11))
let texte ="";
for(let i=1;i<=nombreEtoiles;i++)
{
    texte+="*";
}
console.log(texte);
document.writeln(texte);
/**
 *  autre variante
 */
// do
// {
//     nombreEtoile =parseInt(prompt('nb etoile?'));
//    if ((isNaN(nbEtoiles))||(nbEtoiles<1)||(nbEtoiles>11))
//     console.log(`le nombre d'etoile n'est pas correct`);
// }
// while ((!isNaN(nbEtoiles))&&(nbEtoiles>1)&&(nbEtoiles<=11))

// 
/**
 * autre variante
 */
// let mauvaiseSaisie = true;
// do
// {
//     mauvaiseSaisie = (isNaN(nombreEtoile))||(nombreEtoile<1)||(nbEtoiles>1);
//     nombreEtoile =parseInt(prompt('nb etoile?'));
//    if (mauvaiseSaisie)
//     console.log(`le nombre d'etoile n'est pas correct`);
// }
// while (mauvaiseSaisie)
