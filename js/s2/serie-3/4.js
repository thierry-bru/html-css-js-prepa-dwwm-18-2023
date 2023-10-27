const minimum = 1;
const maximum = 5;

let random=Math.round(Math.random()*(maximum-minimum))+minimum;
let reponse = 0;
let tentatives =1;
console.log(random);
document.write(random);
do
{
    reponse = parseInt(prompt('votre proposition entre 1 et 5 ('+random));
    tentatives+=1;
    if (reponse<random)
        alert('trop petit');
    if (reponse>random)
        alert('trop grand');
}
while ((reponse!=random)&&(tentatives<4));
if (reponse!=random)
document.write("YOU LOOSE PLAYER 1 ");
else
document.write("bravo! tu as trouvé! ");