<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa com Marcador</title>
    
    <!-- Inclua os arquivos do Leaflet -->
    <link rel = "folha de estilo" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
</head>
<body>
    <div id="map" style="width: 800px; height: 600px;"></div>
    
    <script>
        var map = L.map('map').setView([-23.5505, -46.3656], 13); // Defina as coordenadas iniciais e o nível de zoom

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Adicione um marcador com as coordenadas desejadas
        L.marker([-23.5505, -46.3656]).addTo(map)
            .bindPopup('Ponto de interesse')
            .openPopup();
    </script>
</body>
</html>
