// Pobranie danych z bazy danych
$.ajax({
    url: '../js/database.php', // Ścieżka do pliku PHP
    method: 'SEARCH',
    success: function(response) {
        var data = JSON.parse(response);
        var id_player = data.id; // Pobieramy ID gracza
        console.log("ID gracza:", id_player);

        if (id_player == null) {
            // Przekierowanie na index.html gdy sesja gracza nie została odnaleziona
            window.location.href = '../index.html';
        }
    },
    error: function(error) {
        console.log('Error fetching data:', error);
    }
});
function updateGameSize() {
    config.width = window.innerWidth;
    config.height = window.innerHeight;
    
    // Zrestartowanie skalowania gry
    game.scale.resize(config.width, config.height);
}

window.addEventListener('resize', updateGameSize);
/* Konfiguracja Gry w Phaserze */
const config = {   
    type: Phaser.CANVAS,                // Rodzaj renderowania (czy Canvas czy WebGL - zależy od przeglądarki ale Canvas przeglądarka obsługuje zawsze, nie tak jak WebGL)
    width: window.innerWidth,           // Szerokość renderowanego obrazu ustawiona zostaje tutaj na szerokość przeglądarki
    height: window.innerHeight,         // Wysokość renderowanego obrazu ustawiona zostaje tutaj na wysokość przeglądarki
    dom: {
        createContainer: true
    },
    pixelArt: true,                     // Zapobiega rozmywaniu się pikselowej grafiki podczas skalowania/
    transparent: true,                  // Wartość logiczna, ustawiająca przeźroczyste tło
    autoCenter: Phaser.Scale.CENTER_BOTH,
    physics: {
        default: 'arcade',
        arcade: {
            gravity: { y: 0 },
            debug: false,
        }
    },
};
/* Stworzenie Gry w Phaserze */
const game = new Phaser.Game(config); //x,y,,?

// Dodanie scen
game.scene.add('menu',      menuScene);
game.scene.add('load',      loadScene);
game.scene.add('dead',      deadScene);
game.scene.add('play',      playScene);
game.scene.add('option',    optionScene);
game.scene.add('logout',    logoutScene);
game.scene.add('help',      helpScene);
game.scene.add('management',managementScene);

// Wyrenderowanie pierwszej sceny
game.scene.start('load');

