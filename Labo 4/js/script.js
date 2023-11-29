$(document).ready(function () {
    // Attache un gestionnaire d'événements de clic à tous les éléments avec la classe "clickable"
    $('.clickable').on('click', function () {
        // Récupère l'index actuel stocké dans l'attribut "data-index" de l'élément cliqué
        var currentIndex = $(this).data('index');
        // Calcule un nouvel index en alternant entre 1 et 2 à chaque clic
        var newIndex = (currentIndex % 2) + 1; 
        // Vérifie si l'élément cliqué est une balise <img>
        if ($(this).is('img')) {
            // Si c'est une image, met à jour l'attribut src pour changer l'image affichée
            $(this).attr('src', 'img/image_' + newIndex + '.jpg').addClass('small-image');
        } else {
            // Change le texte de l'élément en utilisant le code ASCII pour les lettres (A, B, C, ...)
            $(this).text(chr(64 + newIndex));
        }
    });
});