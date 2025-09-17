window.addEventListener('resize', function (event) {

	game.scale.resize(window.innerWidth, window.innerHeight);
	
	}, false);
	
var menuScene = {
    extend: {
        getRole(callback) {
            $.ajax({
                url: "../js/database.php",
                method: "GET",
                success: (response) => {
                    var data = JSON.parse(response);
                    playerRole = data.role;
                    callback(playerRole); // Wywołanie funkcji zwrotnej z playerRole
                },
                error: (error) => {
                    console.log("Error fetching data:", error);
                    callback(null, error); // Wywołanie funkcji zwrotnej z błędem
                },
            });
        },
    },

    create: function() {
		this.getRole((role) => {
            if (role == "admin") {
				let controlPanelButton = this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.70,"panel_control").setDepth(1);
				controlPanelButton.setInteractive();
				controlPanelButton.on("pointerover", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.70,"panel_control_click").setDepth(1);})
				controlPanelButton.on("pointerout", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.70,"panel_control").setDepth(1);})
				controlPanelButton.on("pointerup", ()=>{window.location.href = '../management/management.html';})
            }
        });

		this.sound.pauseOnBlur = false;
		this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.20,"title").setDepth(1);
		this.add.image(0,0,"menu_background").setOrigin(0).setDepth(0);
		
		this.background = this.add.image(0, 0, 'menu_background').setOrigin(0).setDepth(0).setSize(window.innerWidth, window.innerHeight);
		this.background.displayWidth = window.innerWidth;
		this.background.displayHeight = window.innerHeight;

		// Dopasowanie rozmiaru obrazu do szerokości i wysokości przeglądarki		
        let discordButton = this.add.image(this.game.renderer.width-100, 100,"discord").setDepth(1).setScale(5);

		let playButton = this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.40,"play").setDepth(1);
		let optionsButton = this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.50,"options").setDepth(1);
		let helpButton = this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.60,"help").setDepth(1);
		
		let logoutButton = this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.80,"logout").setDepth(1);

        discordButton.setInteractive();
		playButton.setInteractive();
		optionsButton.setInteractive();
		helpButton.setInteractive();
		logoutButton.setInteractive();
		
		playButton.on("pointerover", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.40,"play_click").setDepth(1);})
		optionsButton.on("pointerover", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.50,"options_click").setDepth(1);})
		helpButton.on("pointerover", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.60,"help_click").setDepth(1);})
		
		logoutButton.on("pointerover", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.80,"logout_click").setDepth(1);})

		playButton.on("pointerout", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.40,"play").setDepth(1);})
		optionsButton.on("pointerout", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.50,"options").setDepth(1);})
		helpButton.on("pointerout", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.60,"help").setDepth(1);})
		logoutButton.on("pointerout", ()=>{this.add.image(this.game.renderer.width/2, this.game.renderer.height*0.80,"logout").setDepth(1);})

        discordButton.on("pointerup", ()=>{window.open("https://discord.gg/xRCvHrSaP3", "_blank")})
		playButton.on("pointerup", ()=>{this.scene.start('play')})
		optionsButton.on("pointerup", ()=>{this.scene.start('option')})
		helpButton.on("pointerup", ()=>{this.scene.start('help')})
		logoutButton.on("pointerup", ()=>{this.scene.start('logout')})
    },

    update: function() {
			
    },
};
