var loadScene = {
	

	preload: function(){
		console.log('Załadowanie assetsów w loadScene');

		/* Załadowanie wtyczki RexQuest */
		this.load.plugin('rexquestplugin', 'https://raw.githubusercontent.com/rexrainbow/phaser3-rex-notes/master/dist/rexquestplugin.min.js', true);
		
		/* Załadowanie wtyczki RexDialogQuest */
		this.load.scenePlugin({
            key: 'rexuiplugin',
            url: 'https://raw.githubusercontent.com/rexrainbow/phaser3-rex-notes/master/dist/rexuiplugin.min.js',
            sceneKey: 'rexUI'
        });
        this.load.script('rexdialogquest', 'https://raw.githubusercontent.com/rexrainbow/phaser3-rex-notes/master/dist/rexdialogquest.min.js');

		/* MENU */
		this.load.image('title', 				'../assets/menu/title.png'); 
		this.load.image('menu_background', 		'../assets/menu/forest.jpg'); 

		//https://fontmeme.com/pixel-fonts/
		this.load.image('play', 				'../assets/menu/button_play.png'); 
		this.load.image('play_click', 			'../assets/menu/button_play_click.png'); 

		this.load.image('options',				'../assets/menu/button_options.png'); 
		this.load.image('options_click',		'../assets/menu/button_options_click.png'); 

		this.load.image('help', 				'../assets/menu/button_help.png'); 
		this.load.image('help_click', 			'../assets/menu/button_help_click.png');

		this.load.image('panel_control', 		'../assets/menu/button_control_panel.png'); 
		this.load.image('panel_control_click', 	'../assets/menu/button_control_panel_click.png'); 

		this.load.image('logout', 				'../assets/menu/button_logout.png'); 
		this.load.image('logout_click', 		'../assets/menu/button_logout_click.png'); 

        this.load.image('discord', 				'../assets/menu/discord.png'); 

		
		/* OPTION */
		this.load.image('back_button', 			'../assets/addons/back.png'); 
		this.load.image('mute',				 	'../assets/addons/volume-mute.png'); 
		this.load.image('unmute', 				'../assets/addons/volume.png'); 
		this.load.image('volume_up', 			'../assets/addons/high-volume.png'); 
		this.load.image('volume_down',	 		'../assets/addons/low-volume.png'); 

		/* GAME */
		this.load.spritesheet('hero', 				'../assets/characters/hero.png',		{frameHeight : 48, frameWidth : 32}); //Załadowanie Gwiazdki (Bohatera) z folderu assets
		this.load.image("terrain",					'../assets/addons/terrain_atlas.png');
		this.load.tilemapTiledJSON("demo",			'../assets/maps/demo.tmj');

		this.load.image("lvl",						'../assets/addons/lvl.png');
		this.load.image("lvl_frame",				'../assets/addons/frame.png');
		this.load.image("hp",						'../assets/addons/hp.png');
		this.load.image("hp_frame",					'../assets/addons/frame.png');

		this.load.image("question_mark",			'../assets/addons/questionMark.png');


		// NPC
		this.load.spritesheet("ryan",				'../assets/characters/ryan.png',		{frameHeight : 48, frameWidth : 32});
		this.load.spritesheet("ann",				'../assets/characters/ann.png',			{frameHeight : 48, frameWidth : 32});
		this.load.spritesheet("orn",				'../assets/characters/orn.png',			{frameHeight : 48, frameWidth : 32});
		this.load.spritesheet("nora",				'../assets/characters/nora.png',		{frameHeight : 48, frameWidth : 32});

		
		// Enemy
		this.load.spritesheet("blue_slime",			'../assets/enemy/blue_slime.png',		{frameHeight: 48, frameWidth: 32});
		this.load.spritesheet("picku",				'../assets/enemy/picku.png',			{frameHeight: 48, frameWidth: 32});
		this.load.spritesheet("robber_1",			'../assets/enemy/robber_1.png',			{frameHeight: 48, frameWidth: 32});
		this.load.spritesheet("robber_2",			'../assets/enemy/robber_2.png',			{frameHeight: 48, frameWidth: 32});
		this.load.spritesheet("robber_boss",		'../assets/enemy/robber_boss.png',		{frameHeight: 48, frameWidth: 32});

		// Flowers
		this.load.image("rose", 					'../assets/objects/rose.png'); 
		this.load.image("malwa",					'../assets/objects/malwa.png');
		this.load.image("cornflower",				'../assets/objects/cornflower.png');
	
		/* AUDIO */
		this.load.audio("bg_music",				"../assets/menu/menu_music.mp3");
		this.load.image('mouse',				'../assets/addons/sword.png')
	},

	create: function() {	
		this.input.setDefaultCursor('url(../assets/addons/sword.png), pointer');
		this.sound.play("bg_music", { loop: true });
		this.scene.start('menu');
	}
}