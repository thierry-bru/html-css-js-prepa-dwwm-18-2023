let nbEtoiles = parseInt(prompt(`Nb étoiles?`));
let texte ="";
// if (!((nbEtoiles<1)||((nbEtoiles>=11)))) {
if ((nbEtoiles>=1)&&((nbEtoiles<11))) {
    for(let i=1; i<=nbEtoiles;i++)
    {
        texte+="*";
    }
    console.log(texte);
    document.write(texte);
    document.title="Bravo";
} else {
    console.log(`le nombre d'etoile n'est pas correct`);
}
