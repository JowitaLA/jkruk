var optionScene = {
    extend: {
        // Funkcja aktualizująca pasek głośności
     updateVolumeBar(volume) {
        this.volumeBar.clear(); // Wyczyść pasek
        this.volumeBar.fillStyle(0xffffff, 1); // Ustaw kolor i przezroczystość
        let barWidth = 100; // Szerokość paska
        let barHeight = 10; // Wysokość paska
        this.volumeBar.fillRect(this.game.renderer.width / 2 - barWidth / 2, this.game.renderer.height * 0.50 + 50, barWidth * volume, barHeight); // Narysuj pasek w zależności od głośności
    }
    },

    create: function() {
        

        this.input.setDefaultCursor(('url(assets/addons/sword.png, pointer'));
		//var music = this.sound.add("bg_music");

		this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.20,"title").setDepth(1);
		this.add.image(0,0,"menu_background").setOrigin(0).setDepth(0);
		
		this.background = this.add.image(0, 0, 'menu_background').setOrigin(0).setDepth(0).setSize(window.innerWidth, window.innerHeight);
		this.background.displayWidth = window.innerWidth;
		this.background.displayHeight = window.innerHeight;

        // Dodaj przycisk powrotu do menu
        let backButton = this.add.image(this.game.renderer.width / 2, this.game.renderer.height * 0.30, "back_button").setDepth(1);
        backButton.setInteractive();
        backButton.setScale(0.1);
        backButton.on("pointerup", () => {
            this.scene.start('menu');
        });

        // Dodaj przycisk do wyciszenia
        let muteButton = this.add.image(this.game.renderer.width / 2, this.game.renderer.height * 0.50, "mute").setDepth(1);
        muteButton.setInteractive();
        muteButton.setScale(0.1);
        muteButton.on("pointerup", () => {
            // Sprawdź, czy muzyka jest odtwarzana, i zatrzymaj ją lub wznow ją
            if (this.sound.get("bg_music").isPaused) {
                this.sound.get("bg_music").resume();
                muteButton.setTexture("mute");
            } else {
                this.sound.get("bg_music").pause();
                muteButton.setTexture("unmute");
            }
        });
        var volumeBG = this.sound.get("bg_music").volume;

        // Dodaj przycisk do regulacji głośności
        let volumeUpButton = this.add.image(this.game.renderer.width / 2 - 100, this.game.renderer.height * 0.50, "volume_up").setDepth(1);
        volumeUpButton.setInteractive();
        volumeUpButton.setScale(-0.1);
        volumeUpButton.on("pointerup", () => {
            if (this.sound.get("bg_music").volume + 0.1 <= 1){
                volumeBG = volumeBG + 0.1;
                this.sound.get("bg_music").setVolume(volumeBG);            
                //this.sound.volume += 0.1; // Zwiększ głośność o 10%
            this.updateVolumeBar(volumeBG);
            console.log(volumeBG);
            }
            else{
                this.sound.get("bg_music").setVolume(1);
            }
        });

        let volumeDownButton = this.add.image(this.game.renderer.width / 2 + 100, this.game.renderer.height * 0.50, "volume_down").setDepth(1);
        volumeDownButton.setInteractive();
        volumeDownButton.setScale(0.1);
        volumeDownButton.on("pointerup", () => {
            if (this.sound.get("bg_music").volume - 0.1 >= 0){
                volumeBG = volumeBG - 0.1;
                this.sound.get("bg_music").setVolume(volumeBG);
                this.updateVolumeBar(volumeBG);
                console.log(volumeBG);
            }
            else{
                this.sound.get("bg_music").setVolume(0);
            }
        });

        // Dodaj pasek głośności
        this.volumeBar = this.add.graphics(); // Zapisz pasek głośności jako właściwość obiektu optionScene
        this.updateVolumeBar(this.sound.volume); // Aktualizacja paska głośności
    },

    
};
