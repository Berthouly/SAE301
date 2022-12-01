
document.getElementById('ajout').addEventListener('click',function() { 
    liste = recupCookie("panier"); //recupere le cookie  sous forme de chaine de caractere 
if (liste!=null)montab = JSON.parse(liste); // transforme la chaine  en tableau JSON
else montab =Array()                                                             
    var id = document.getElementById('id').value
    var article = document.getElementById('article').innerHTML
    var prix = document.getElementById('prix').innerHTML
    // console.log( id + " " + article + " " + prix )

    index = montab.findIndex(element => (element.id ==id)); //trouver l'article dans la liste du panier
    if(index>-1){		
                montab[index].quantite	= parseInt(montab[index].quantite) + parseInt(document.getElementById('qte').value)
                console.log(montab)
                }
    else        {
                montab.push({'id': id, 'article': article, 'quantite': document.getElementById('qte').value, 'prix': prix, })
                console.log(montab)
                }

    panier+=parseInt(document.getElementById('qte').value); // incrementation de la valeur du panier
    document.getElementById('panier').innerHTML=panier; 
    document.cookie = "panier="+JSON.stringify(montab)+"; path=/";

    })


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