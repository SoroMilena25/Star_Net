// Affiche la fenêtre modale lorsque le bouton "+" est cliqué
document.getElementById("sideButton").addEventListener("click", function() {
    var myModal = new bootstrap.Modal(document.getElementById('createPostModal'));
    myModal.show();
});
