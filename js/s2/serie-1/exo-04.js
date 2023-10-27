let texte = "";
for(i=0;i<=16;i++)
{
    texte+=`2^${i} = ${Math.pow(2,i)}|`;
    // texte+=`2^${i} = ${2**i}|`;
}
console.log(texte);