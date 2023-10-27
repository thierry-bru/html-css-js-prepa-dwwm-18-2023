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
    texte ="";
   for(let j=1;j<=i;j++)
   {
    texte+="*";
   }
   document.write('<p>'+texte+'</p>');
   console.log(texte);
}
