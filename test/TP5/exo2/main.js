$(document).ready(function () {
    $('#studentsTableBody').DataTable();
});

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
        <td></td>
        <td></td>
    </tr>`);
    $("#studentsTableBody").DataTable(

    );
}