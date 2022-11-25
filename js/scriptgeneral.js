liste = document.cookie //recupere le cookie  sous forme de chaine de caractere 
if (liste.length!=0)montab = JSON.parse(liste) // transforme la chaine  en tableau JSON
else montab =Array() // si il n'y a pas de tableau dans le cookie alors créer le tableau
console.log(montab)

panier = 0
montab.forEach(element => {   panier += 1*element.quantite })
document.getElementById('panier').innerHTML = panier
