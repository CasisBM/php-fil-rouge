function update(id) {
    let hiddenButton = document.querySelector("input[value='"+id+"']");
    let ligne = hiddenButton.closest("tr"); 

/*     console.dir(hiddenButton.closest("tr").querySelector("input[name='nom']")); 
    console.dir(hiddenButton.closest("tr").querySelector("input[name='prenom']").value); 
    console.dir(hiddenButton.closest("tr").querySelector("input[name='mail']").value);   */

    let nom = ligne.querySelector("input[name='nom']");
    let prenom = ligne.querySelector("input[name='prenom']");
    let mail = ligne.querySelector("input[name='mail']");

    if(nom.disabled === false)
    {
        alert("<?php update("+nom.value+","+prenom.value+","+mail.value+") ?>");
    }

    nom.disabled = !nom.disabled; 
    prenom.disabled = !prenom.disabled;
    mail.disabled = !mail.disabled;



};