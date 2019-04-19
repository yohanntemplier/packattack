var compteur = 70000;
decompte();

function decompte() {
    compteur -= 1;
    document.getElementById('compteur').innerHTML = compteur;

    if (compteur == 2) {
        document.location.href = "../../Game/GameOver";
    }
    setTimeout(decompte, 1000);
}

function incrementValue(nombre)
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value= value+nombre;
    if(value<=0){
        value=0;
    }
    document.getElementById('number').value = value;

}