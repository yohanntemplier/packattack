var compteur = 120;
decompte();

function decompte() {
    compteur -= 1;
    document.getElementById('compteur').innerHTML = compteur;

    if (compteur == 2) {
        document.location.href = "../../Game/GameOver";
    }
    setTimeout(decompte, 1000);
}
