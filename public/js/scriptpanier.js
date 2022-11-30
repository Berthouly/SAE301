

liste = recupCookie("panier")
if (liste!="")montab = JSON.parse(liste)
else montab =Array() //recupere le cookie  sous forme de chaine de caractere 
// si il n'y a pas de tableau dans le cookie alors créer le tableau

function recupCookie(nom){

    if(document.cookie.length == 0)return null;

   var cookies = document.cookie.split("; "); //separe chaque parametre contenu dans le cookie
   cookies.forEach(element => { 
       ligne=element.split("=");
       if(ligne[0]===nom) sortie =ligne[1] 
           else sortie=null;
       })
       return sortie
}
console.log(montab)

document.getElementById('liste').value=JSON.stringify(montab); // sauver montab pour le formulaire


var totalgeneral=0
montab.forEach(uneinfo => {  

    html = `<tr id="${uneinfo.id}">
    <td>${uneinfo.article}</td>
    <td><button class="moins">-</button><span>${uneinfo.quantite}</span><button class="plus">+</button></td>
    <td ><span class="unitaire">${uneinfo.prix}</span>€</td>
    <td><span class="prix">${uneinfo.prix * uneinfo.quantite}</span>€</td>
    </tr>`;

    document.getElementById('zone').innerHTML += html
    totalgeneral += uneinfo.prix * uneinfo.quantite
    })
    document.getElementById('total').innerHTML = totalgeneral


    document.querySelectorAll('.plus').forEach(clickplus)
    document.querySelectorAll('.moins').forEach(clickmoins)


function clickplus(tag){
    tag.addEventListener('click',function() { 
    qte=this.parentNode.querySelector('span').innerHTML// il va chercher le balise au dessus du bouton et il selectionne le contenu du span
    qte++
    this.parentNode.querySelector('span').innerHTML=qte
    prix=this.parentNode.parentNode.querySelector('.unitaire').innerHTML
    total= prix*qte
    this.parentNode.parentNode.querySelector('.prix').innerHTML=total

    id = this.parentNode.parentNode.id; // recupere l'id de l'article cliqué
    index = montab.findIndex(element => element.id ==id); //trouver l'article dans la liste du panier
    montab[index].quantite	= parseInt(montab[index].quantite) +1; //incrementer la quantité
    document.cookie = "panier="+JSON.stringify(montab)+"; path=/"; //sauvegarde des infos dans le cookies
    document.getElementById('liste').value=JSON.stringify(montab); // sauver montab pour le formulaire
        
    totalgeneral += 1*prix
    document.querySelector('#total').innerHTML=totalgeneral
       })
      }

      function clickmoins(tag){
        tag.addEventListener('click',function() { 
        qte=this.parentNode.querySelector('span').innerHTML// il va chercher le balise au dessus du bouton et il selectionne le contenu du span
        if(qte>0){
        qte--
        this.parentNode.querySelector('span').innerHTML=qte
        prix=this.parentNode.parentNode.querySelector('.unitaire').innerHTML
        total= prix*qte
        this.parentNode.parentNode.querySelector('.prix').innerHTML=total
    
        id = this.parentNode.parentNode.id; // recupere l'id de l'article cliqué
        index = montab.findIndex(element => element.id ==id); //trouver l'article dans la liste du panier
        montab[index].quantite	= parseInt(montab[index].quantite) -1; //décrementer la quantité
        document.cookie = JSON.stringify(montab); //sauvegarde des infos dans le cookies
        document.getElementById('liste').value=JSON.stringify(montab); // sauver montab pour le formulaire
        totalgeneral -= 1*prix
        document.querySelector('#total').innerHTML=totalgeneral
        }
           })
          }