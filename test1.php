<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .photo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #000;
            width: 200px;
            height: 200px;
            cursor: pointer; /* Ajout de la propriété pour indiquer que le texte est cliquable */
            /* overflow: hidden; Empêche le débordement de l'image */
        }
        /* Style pour cacher l'input de type file */
        #fileInput {
            display: none;
        }
        /* Style pour afficher l'image sélectionnée */
        #selectedImage {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <!-- Balise div avec l'image -->
    <div class="photo-container" onclick="document.getElementById('fileInput').click();">
        <p id="text">PHOTO 4 * 4</p>
        <!-- Input de type file caché -->
        <input id="fileInput" type="file" accept="image/*" onchange="handleFileSelect(event)">
        <!-- Affichage de l'image sélectionnée -->
        <img id="selectedImage" src="" alt="">
    </div>

    <!-- Script pour afficher l'image sélectionnée -->
    <script>
        function handleFileSelect(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                // Afficher l'image sélectionnée
                document.getElementById('selectedImage').src = URL.createObjectURL(selectedFile);
                document.getElementById("text").style.display = "none";
            }
        }
    </script>
</body>
</html>
