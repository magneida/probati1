function imprime_zone(obj){
    // Définie la zone à imprimer
    var z = document.getElementById(obj).innerHTML;

    // Ouvre une nouvelle fenetre
    var f = window.open("", "ZoneImpr", "height=700, width=1000,toolbar=0, menubar=0, scrollbars=1, resizable=1,status=0, location=0, left=10, top=10");

    // Définit le Style de la page
    f.document.body.style.color = '#000000';
    f.document.body.style.backgroundColor = '#999999';
    f.document.body.style.padding = "10px";
    f.document.body.style.textAlign = 'center';

    // Ajoute les Données
    //f.document.title = titre;
    f.document.body.innerHTML += " " + z + " ";

    // Imprime et ferme la fenetre
    f.window.print();
    f.window.close();
    return true;
}