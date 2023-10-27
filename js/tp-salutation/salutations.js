function saluer(event) {
    event.preventDefault();
    //recuperer les valeurs nom et prenom
    let prenom = document.querySelector('#prenom').value;
    let nom = document.querySelector('#nom').value;
    // construire le message de salutation
    let message = genererSalutation(prenom, nom);
    //afficher le message
    //
    alert(message);
    //recuperer la race
    let race = document.querySelector('#race').value;
    // construire le message
    let emoteRaciale = genererEmoteRaciale(race);
    // afficher le message
    alert(emoteRaciale);
    //recuperer la classe sociale
    let rang = document.querySelector('input[name=rank]:checked').value;
    //construire le message
    let emoteRank = genererEmoteSociale(rang);
    //afficher le message
    alert(emoteRank);
    let nbClasses = getNombreClasses();
    let paragrapheClasse = document.querySelector('#classes');
    paragrapheClasse.innerHTML = listerLesClasses();
}
function saluerSansAlertes(event) {
    event.preventDefault();
    let prenom = document.querySelector('#prenom').value;
    let nom = document.querySelector('#nom').value;
    let message = genererSalutation(prenom, nom);
    //afficher le message
    let salutations = document.querySelector('#salutations');
    salutations.innerHTML=message;

    let race = document.querySelector('#race').value;
    let emoteRaciale = genererEmoteRaciale(race);
    let rang = document.querySelector('input[name=rank]:checked').value;
    let emoteRank = genererEmoteSociale(rang);
    //afficher le message
    let emotes = document.querySelector('#emotes');
    emotes.innerHTML = emoteRaciale+emoteRank;

    let nbClasses = getNombreClasses();
    let paragrapheClasse = document.querySelector('#classes');
    paragrapheClasse.innerHTML = listerLesClasses();

    if (getNombreClasses()>0 && getNombreClasses()<=3)
{
  document.querySelector('#message').style.display='block';
  document.querySelector('#error').style.display='none';
}
else
{
  document.querySelector('#message').style.display='none';
  document.querySelector('#error').style.display='block';
  document.querySelector('#error').innerHTML="Vous devez prendre entre une et 3 classes maximum";
}
}
function genererEmoteSociale(rang) {
    let emoteRank = "";
    switch (rang) {
        case 'noble': emoteRank = emoteNoblesse();

            break;
        case 'royal': emoteRank = emoteRoyaute();

            break;
        default:
            emoteRank = emoteRoture();
            break;
    }
    return emoteRank;
}

function genererEmoteRaciale(race) {
    let emoteRaciale = "";
    switch (race) {
        case 'elf': emoteRaciale = emoteElfe();
            break;
        case 'ork': emoteRaciale = emoteOrque();
            break;
        default: emoteRaciale = emoteHumain();
            break;
    }
    return emoteRaciale;
}

function genererSalutation(prenom, nom) {
    let message = "";
    if ((prenom.length == 0) && (nom.length == 0)) {
        message = `Bonjour illustre inconnu. `;
    }
    else {
        message = `Bonjour ${prenom} ${nom}. `;
    }
    return message;
}

//#region gestion des classes
function getNombreClasses()
{
    //selection de la liste des classes
    let classes = document.querySelectorAll('.classe:checked')
    // retourner le nombre de classes
    console.log(classes);
    return classes.length;
}
function listerLesClasses()
{
    let classes = document.querySelectorAll('.classe:checked');
    let message = "<ul>";
    classes.forEach(classe => {
        message+=`<li>classe: ${classe.name}</li>`      
    });
    message+='</ul>';
    return message;
}
//#endregion
//#region les emotes
function emoteHumain()
{
    return "l'ordinateur observe la personne qui approche";
}
function emoteElfe()
{
    return 'L\'ordinateur observe l\'individu gracieux qui approche. ';
}
function emoteOrque()
{
    return `L'ordinateur observe l'individu repoussant, plissant le nez. `;
}
function emoteRoture()
{
return 'Signe de tête.';
}
function emoteNoblesse()
{
    return 'S\'incline. ';
}
function emoteRoyaute()
{
    return 'Tout le monde s\'incline. ';
}
//#endregion