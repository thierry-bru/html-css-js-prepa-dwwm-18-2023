let x= parseInt(prompt('x'));

let n = parseInt(prompt('n'));
let resultat = 1;
// for(let i=0;i<n;i++)
for(let i=1;i<=n;i++)
{
    resultat*=x;
}
console.log(`${x}^${n}=${resultat}`);