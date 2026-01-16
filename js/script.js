const elVoirPlus = document.querySelectorAll('.btn');

elVoirPlus.forEach(button => {
    button.addEventListener('click', () => {
        const description = button.parentElement.querySelector('.description');
        description.classList.toggle('active');
        
        button.textContent = description.classList.contains('active') ? 'Voir plus' : 'Voir moins';
    });
});

// ---------------------------------------------------------------------------------------------------------------------

const formInscript = () =>{
    let verifLogin = document.getElementById('login-inscription').value;
    let verifEmail = document.getElementById('email-inscription').value;
    let mdp = document.getElementById('mdp-inscription').value;
    let verifmdp = document.getElementById('confMdp-inscription').value;
    let erreur = false

    if(verifLogin === ""){
        alert('Erreur, veuillez renseigner votre login');
        erreur = true
    }
    if(verifEmail === ""){
        alert('Erreur, veuillez renseigner votre email');
        erreur = true
    }
    if(mdp === ""){
        alert('Erreur, veuillez renseigner votre mot de passe');
        erreur = true
    }
    if(verifmdp === ""){
        alert('Erreur, veuillez confirmer votre mot de passe');
        erreur = true
    }
    if(mdp !== verifmdp){
        alert('Erreur, votre mot de passe n\'est pas identique');
        erreur = true
    }
    if(verifLogin === "" && verifEmail === "" && mdp ==="" && verifmdp ===""){
        alert('Erreur, veuillez renseigner tous les champs');
        erreur = true
    }
    if(erreur){
        return false
    }
}

const formInsert = () =>{
    let veriftitre = document.getElementById('title-insert').value;
    let verifDescription = document.getElementById('descript-insert').value;
    let verifDate = document.getElementById('date-insert').value;

    if(veriftitre === ""){
        alert('Erreur, veuillez renseigner un titre');
        erreur = true
    }
    if(verifDescription === ""){
        alert('Erreur, veuillez renseigner une description');
        erreur = true
    }
    if(verifDate === ""){
        alert('Erreur, veuillez renseigner la date d\'aujourd\'hui');
        erreur = true
    }
    
    if(veriftitre === "" && verifDescription === "" && verifDate ===""){
        alert('Erreur, veuillez renseigner tous les champs');
        erreur = true
    }
    if(erreur){
        return false
    }
}

const formConnexion = () =>{
    let verifLogin = document.getElementById('login-connexion').value;
    let verifEmail = document.getElementById('email-connexion').value;
    let mdp = document.getElementById('mdp-connexion').value;
    let erreur = false

    if(verifLogin === ""){
        alert('Erreur, veuillez renseigner votre login');
        erreur = true
    }
    if(verifEmail === ""){
        alert('Erreur, veuillez renseigner votre email');
        erreur = true
    }
    if(mdp === ""){
        alert('Erreur, veuillez renseigner votre mot de passe');
        erreur = true
    }
    if(verifmdp === ""){
        alert('Erreur, veuillez confirmer votre mot de passe');
        erreur = true
    }
    if(mdp !== verifmdp){
        alert('Erreur, votre mot de passe n\'est pas identique');
        erreur = true
    }
    if(verifLogin === "" && verifEmail === "" && mdp ==="" && verifmdp ===""){
        alert('Erreur, veuillez renseigner tous les champs');
        erreur = true
    }
    if(erreur){
        return false
    }
}

const formModifProfil = () =>{
    let verifLogin = document.getElementById('login-modif').value;
    let acMdp = document.getElementById('acMdp-modif').value;
    let newMdp = document.getElementById('newMdp-modif').value;
    let erreur = false;

    if(verifLogin === ""){
        alert('Erreur, veuillez renseigner votre login');
        erreur = true
    }

    if(acMdp === ""){
        alert('Erreur, veuillez renseigner votre ancien mot de passe');
        erreur = true
    }
    if(newMdp === ""){
        alert('Erreur, veuillez rensigner un nouveau mot de passe');
        erreur = true
    }

    if(verifLogin === "" && acMdp === "" && newMdp ===""){
        alert('Erreur, veuillez renseigner tous les champs');
        erreur = true
    }
    if(erreur){
        return false
    }
}

const formUpdateArticle = () =>{
    let veriftitre = document.getElementById('title-update').value;
    let verifDescription = document.getElementById('descript-update').value;
    let verifDate = document.getElementById('majDate-update').value;

    if(veriftitre === ""){
        alert('Erreur, veuillez renseigner un titre');
        erreur = true
    }
    if(verifDescription === ""){
        alert('Erreur, veuillez renseigner une description');
        erreur = true
    }
    if(verifDate === ""){
        alert('Erreur, veuillez renseigner la date d\'aujourd\'hui');
        erreur = true
    }
    
    if(veriftitre === "" && verifDescription === "" && verifDate ===""){
        alert('Erreur, veuillez renseigner tous les champs');
        erreur = true
    }
    if(erreur){
        return false
    }
}