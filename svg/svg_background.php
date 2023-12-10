<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body, html {
            margin: 0;
            overflow: hidden;
            background-color: #000;
        }

        #background-lines {
            position: fixed;
            width: 100%;
            height: 100%;
            pointer-events: none;
            opacity: 0.5; /* Ajustez l'opacité des scanlines selon vos préférences */
        }

        .line {
            position: absolute;
            width: 100%;
            height: 2px; /* Ajustez la hauteur des scanlines selon vos préférences */
            background: repeating-linear-gradient(180deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1) 1px, transparent 1px, transparent 2px);
        }
    </style>
    <title>Scanlines CRT Effect</title>
</head>
<body>
    <div id="background-lines"></div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var backgroundLines = document.getElementById("background-lines");

        function createBackgroundLines() {
            for (var i = 0; i < window.innerHeight; i += 4) { /* Ajustez l'espacement des scanlines selon vos préférences */
                var line = document.createElement("div");
                line.className = "line";
                line.style.top = i + "px";
                backgroundLines.appendChild(line);
            }
        }

        createBackgroundLines();
    });
</script>
</html>
