var helpScene = {
    extend: {
    },
    create: function () {
        
        this.input.setDefaultCursor('url(../assets/addons/sword.png), pointer');

        this.add.image(this.game.renderer.width / 2, this.game.renderer.height * 0.20, "title").setDepth(1);
        this.add.image(0, 0, "menu_background").setOrigin(0).setDepth(0);
        
        this.background = this.add.image(0, 0, 'menu_background').setOrigin(0).setDepth(0).setSize(window.innerWidth, window.innerHeight);
        this.background.displayWidth = window.innerWidth;
        this.background.displayHeight = window.innerHeight;

        // Dodanie białego prostokąta
        const rectWidth = this.game.renderer.width *0.60; // Szerokość prostokąta
        const rectHeight = this.game.renderer.height * 0.45; // Wysokość prostokąta
        const rectX = this.game.renderer.width / 2; // Pozycja X prostokąta
        const rectY = this.game.renderer.height * 0.60; // Pozycja Y prostokąta

        const rectangle = this.add.rectangle(rectX, rectY, rectWidth, rectHeight, 0xDDCEAF); // Kolor biały
        rectangle.setStrokeStyle(2, 0x000000); // Ramka czarna
        rectangle.setDepth(0); // Głębokość

        // Dodanie tekstu wewnątrz prostokąta
        const mainText = this.add.text(rectX, rectY - rectHeight / 2 + 32, 'Witaj poszukiwaczu przygod w krainie Monwiz!', {
            fontSize: '32px',
            fontFamily: 'Alagard',
            align: 'center',
            color: '#000000',
            wordWrap: { width: rectWidth - 100 }
        }).setOrigin(0.5);

        const description = this.add.text(rectX, rectY - rectHeight / 2 + (32*2) + (18*6), 'Monwiz, ktory kiedys byl miejscem, pelnym harmonii i spokoju, po smierci owczesnego krola Kuertza, zamienil sie w arene smierci, chaosu i zniszczenia. Z jego odejsciem zakonczyła się epoka stabilnosci i jednosci, jaka przez lata panowala w krolestwie, sprawiajac, ze teraz tron Monwizu byl obiektem pozadania dla wielu zastepcow, ktorzy chcieli przejac wladzę nad kraina.\nZastepcy, probujac zapanowac nad sytuacja, zamiast przywrocic porzadek, przyczynili sie do jeszcze wiekszego chaosu, sprawiajac, ze walki o wladze, intrygi i spory miedzy frakcjami staly sie codziennoscia. Ludnosc zaczela zyc w strachu przed niekonczacym sie konfliktem, ktory grozil zniszczeniu wszystkiego, co kiedys bylo dla nich domem.\nW tym nowym, niebezpiecznym swiecie, musisz stanac twarza w twarz z licznymi wyzwaniami. Twoja misja jest jasna: przywrócić porzadek i pokoj w krainie. By to zrobic musisz zdobyc zaufanie ludnosci i stac sie silniejszy, by zapanowac nad niebezpieczenstwem.\nTo twoja rozgrywka, pełna przygód, niebezpieczeństw i tajemnic. Powodzenia!', {
            fontSize: '18px',
            fontFamily: 'Alagard',
            color: '#000000',
            align: 'center',
            wordWrap: { width: rectWidth - 100 }
        }).setOrigin(0.5);

        const controlsText = this.add.text(rectX, rectY - rectHeight / 2 + (32*2) + (18*6) + (24*6), 'Klawiszologia', {
            fontSize: '24px',
            fontFamily: 'Alagard',
            color: '#000000',
            underline: true
        }).setOrigin(0.5);

        const controlsList = this.add.text(rectX, rectY - rectHeight / 2 + (32*2) + (18*6) + (24*6) + (18*3), 'Q: Wyswietlanie listy zadan\nK: Wyswietlenie statystyk gracza\nS: Zapisanie postepu w grze\nEsc: Powrot do menu', {
            fontSize: '18px',
            fontFamily: 'Alagard',
            color: '#000000',
            align: 'center'
        }).setOrigin(0.5);

        let backButton = this.add.image(this.game.renderer.width / 2, this.game.renderer.height * 0.30, "back_button").setDepth(1);
        backButton.setInteractive();
        backButton.setScale(0.1);
        backButton.on("pointerup", () => {
            this.scene.start('menu');
        });
    },
};
