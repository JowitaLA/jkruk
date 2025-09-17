var deadScene = {
	extend: {
		revive() {
			// Zachowaj referencję do obiektu sceny
			const self = this;
	
			$.ajax({
				url: "../js/database.php",
				method: "POST",
				data: {
					action: "REVIVE",
					playerHp: playerMaxHp,
					playerX: 1040,
					playerY: 488,
				},
				contentType: "application/x-www-form-urlencoded; charset=UTF-8",
				success: function(response) {
					// Użyj self zamiast this
					
					console.log("Data updated successfully:", response);
				},
				error: function(error) {
					console.log("Error updating data:", error);
				},
			});
		},
	},

	create: function() {
		this.timer = 60000;
		this.seconds = 60;

		this.keys = this.input.keyboard.addKeys({
			esc: Phaser.Input.Keyboard.KeyCodes.ESC, // Klawisz do powrotu do menu
		  });

		const titleText = this.add.text(this.game.renderer.width/2, this.game.renderer.height * 0.4, 'Jestes nieprzytomny!', {
            fontSize: '32px',
            fontFamily: 'Alagard',
            align: 'center',
            color: '#ffffff',
            wordWrap: { width: this.game.renderer.width/2 - 100 }
        }).setOrigin(0.5);
		
		const descriptionText = this.add.text(this.game.renderer.width/2, this.game.renderer.height * 0.6, 'Ktos przenosi Cie do wioski...', {
            fontSize: '32px',
            fontFamily: 'Alagard',
            align: 'center',
            color: '#ffffff',
            wordWrap: { width: this.game.renderer.width/2 - 100 }
        }).setOrigin(0.5);
		
		// Utwórz tekst timer'a
		this.timerText = this.add.text(this.game.renderer.width/2, this.game.renderer.height * 0.5, this.seconds + ' sec', {
            fontSize: '32px',
            fontFamily: 'Alagard',
            align: 'center',
            color: '#ffffff',
            wordWrap: { width: this.game.renderer.width/2 - 100 }
        }).setOrigin(0.5);
	},

	update: function() {
		/* Powrót do menu po kliknięciu ESC */
		if (this.keys.esc.isDown === true) {
			this.scene.start("menu");
		  }
		// Aktualizacja timer'a
		if (this.timer > 0) {
			this.timer -= 16;  // Odejmujemy czas od timer'a (przybliżona wartość dla jednej klatki gry w milisekundach)
			this.seconds = Math.floor(this.timer / 1000);  // Zamieniamy milisekundy na sekundy

			// Aktualizujemy tekst timer'a
			this.timerText.setText(this.seconds + ' sec');

			if (this.timer <= 0) {
				this.revive();
				playerHp = playerMaxHp;
				this.scene.start("play");
			}
		}
	},
};
