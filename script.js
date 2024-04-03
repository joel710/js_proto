document.addEventListener("DOMContentLoaded", function() {
    // Sélectionnez toutes les divs avec la classe "show"
    const animeContainers = document.querySelectorAll(".show");

    // Parcourez chaque div d'anime
    animeContainers.forEach(function(animeContainer) {
        // Ajoutez un écouteur d'événements de clic à chaque div d'anime
        animeContainer.addEventListener("click", function(event) {
            // Récupérez les données de l'anime à partir des éléments HTML
            const thumbnailImage = animeContainer.querySelector("img");
            const thumbnailAlt = thumbnailImage.getAttribute("alt");
            const thumbnailTitle = animeContainer.querySelector(".text-info p:first-child").textContent; // Sélectionnez le premier paragraphe de la div "text-info" pour obtenir le titre de l'anime

            // Stockez les données de l'anime dans le stockage local
            localStorage.setItem("thumbnailAlt", thumbnailAlt);
            localStorage.setItem("thumbnailTitle", thumbnailTitle);

            // Redirigez l'utilisateur vers la page de présentation
            window.location.href = "Html1.html";

            // Empêchez le comportement par défaut du clic sur le lien
            event.preventDefault();
        });
    });
});
