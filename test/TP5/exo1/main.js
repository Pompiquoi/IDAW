function onFormSubmit() {
    // prevent the form to be sent to the server
    event.preventDefault();
    let nom = $("#inputNom").val();
    let prenom = $("#inputPrenom").val();
    let date = $("#inputDate").val();
    let aime = $("#inputAime").val();
    let rmq = $("#inputRmq").val();
    $("#studentsTableBody").append(`
            <tr>
                <td class="fields">${nom} </td>
                <td class="fields">${prenom}</td>
                <td class="fields">${date}</td>
                <td class="fields">${aime}</td>
                <td class="fields">${rmq}</td>
                <td><button onclick="deleteRow(this)">Supprimer</button>
                <button onclick="modifyRow(this)" class="modi">Modifier</button>
                <button onclick="validerModification(this)" style="display:none;" class="vali">Valider</button></td>
            </tr>`);
}

function deleteRow(button) {
    // Supprimer la ligne parente de ce bouton
    $(button).closest("tr").remove();
}

function modifyRow(button) {
    // Supprimer la ligne parente de ce bouton
    let ligne = button.parentNode.parentNode;
    button.style.display = 'none';
    ligne.getElementsByClassName('vali')[0].style.display = 'inline';
    champs = ["nom", "prenom", "date", "aime", "rmq"];
    i = 0
    champs.forEach(champ => {
        field = ligne.getElementsByClassName('fields')[i];
        field.innerHTML = `<input type="text" id="input` + champ + `" value="${field.innerHTML}">`;
        i = i + 1;
    });

}

function validerModification(button) {
    // Supprimer la ligne parente de ce bouton
    let ligne = button.parentNode.parentNode;
    button.style.display = 'none';
    ligne.getElementsByClassName('modi')[0].style.display = 'inline';
    champs = ["nom", "prenom", "date", "aime", "rmq"];
    i = 0
    console.log(typeof (ligne.getElementsByClassName('fields')));
    console.log(typeof (champs));
    champs.forEach(champ => {
        field = ligne.getElementsByClassName('fields')[i];
        field.innerHTML = field.querySelector("input").value;
        i = i + 1;
    });
}
