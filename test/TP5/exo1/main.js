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
                <td>${nom}</td>
                <td>${prenom}</td>
                <td>${date}</td>
                <td>${aime}</td>
                <td>${rmq}</td>
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
    button.parentNode.getElementsByClassName('modi')[0].style.display = 'none';
    button.parentNode.parentNode.getElementsByClassName('vali')[0].style.display = 'inline';

}