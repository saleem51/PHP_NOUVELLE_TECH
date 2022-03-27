let notes = [15 , 10 , 20 , 5]
let note = 20 ;

function moyenne(valeur = []){
    
    if(typeof valeur === "object")
    {
        console.log(valeur) ;
        let somme = null ;
        for(index in valeur){
            console.log(valeur[index]) ;
            somme += valeur[index] ;
        }
        console.log(somme / valeur.length)
    }else{
        console.log('attention !!')
    }
}

moyenne(notes) ;
moyenne(note) ;