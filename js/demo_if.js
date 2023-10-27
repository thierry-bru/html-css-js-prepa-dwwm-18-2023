let x = parseInt(prompt('Saisir un nombre svp'));
if (!isNaN(x))
{// ce bloc est exécuté quand un nombre écrit en chiffre est saisi
    if (x > 5) {
        console.log('x est plus grand que 5 strictement');
    }
    else {
        console.log('x est plus petit ou égal à 5 ');
    }
}
else {// ce bloc est exécuté quand ce n'est pas un nombre écrit avec des chiffres
    console.log('je veux un NOMBRE WESH');
}

// if (isNaN(x)!=true)
// if (isNaN(x)==false)