var compteur = 60;
decompte();

function decompte() {
    compteur -= 1;
    document.getElementById('compteur').innerHTML = compteur;

    if (compteur == 2) {
        document.location.href = "../../Game/GameOver";
    }
    setTimeout(decompte, 1000);
}

function incrementValue(nombre) {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value = value + nombre;
    if (value >= 30) {
        document.location.href = "../../Game/Success1";
    }
    if (value <= 0) {
        value = 0;
    }
    document.getElementById('number').value = value;

}

function toggle_visibility(id) {
    var e = document.getElementById(id);
    if (e.style.display == 'block')
        e.style.display = 'hide';
    else
        e.style.display = 'block';
}

function hideStuff(id) {
    document.getElementById(id).style.visibility = 'hidden';

}
