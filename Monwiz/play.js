var nickname;
var playerExp; // Aktualny Exp Gracza
var playerMaxExp = 1000; //Ile gracz potrzebuje Exp do następnego LvL
var playerMinExp = 0; //Ile gracz potrzebuje Exp do następnego LvL
var playerLvl = 0; // Poziom Gracza
var playerHp; // Życie Gracza
var playerMaxHp; // Maksymalne Życie Gracza
var playerDmg;
var levelText; // Funkcja odpowiadająca za wyświetlenie poziomu Gracza

var mapX; // Wielkość danej mapy
var mapY; // Wysokość danej mapy
var camX; // Współrzędna X głównej kamery
var camY; // Współrzędna Y głównej kamery

let unstartedQuests = [];
let activeQuests = [];

const questsAnn = [];
const questsRyan = [];
const questsOrn = [];
const questsNora = [];

const slimes = [];
const pickus = [];

const robber_1 = [];
const robber_2 = [];
const robber_boss = [];


this.questionMarks = [];

var playScene = {
  preload: function () {
    this.load.scenePlugin({
      key: "rexuiplugin",
      url: "https://raw.githubusercontent.com/rexrainbow/phaser3-rex-notes/master/dist/rexuiplugin.min.js",
      sceneKey: "rexUI",
    });
  },

  extend: {
    /* Funkcja sprawdzająca czy gracz posiada w tabeli status wszystkie questy, jeżeli nie, questy zostają dodane wraz z domyślnym statusem i progresem */
    check_status() {
      $.ajax({
        url: "../js/database.php",
        method: "CHECK_STATUS",
        data: {},
        success: function (response) {
          console.log("Data updated successfully:", response);
        },
        error: function (error) {
          console.log("Error updating data:", error);
        },
      });
    },

    showKnowledge() {
      let knowledge =
        "LVL: " +
        playerLvl +
        "\nHP: " +
        playerHp +
        "/" +
        playerMaxHp +
        "\nEXP: " +
        (playerExp - playerMinExp) +
        "/" +
        (playerLvl * 1000 + 1000) +
        "\nDMG: " +
        playerDmg;

      CreateDialog(this, "STATYSTYKI", knowledge, "list")
        .setPosition(camX, camY)
        .layout()
        .modalPromise({
          manaulClose: true,
          duration: {
            in: 500,
            out: 500,
          },
        })
        .then(
          function (data) {
            if (`${data.text}` == "") {
            } else {
              console.log(`${data.index}`);
              console.log(`${data.text}`);
              console.log(`${data.button}`);
              console.log(`${data.dialog}`);
            }
            this.dialogOpen = false;
          }.bind(this)
        );
    },

    load_quests() {
      $.ajax({
        url: "../js/database.php",
        method: "LOAD_UNACTIVE_QUESTS",
        success: function (response) {
          var data = JSON.parse(response);
          unstartedQuests = data;

          console.log(
            "Ładowanie możliwych i niezaczętych questów...\n",
            unstartedQuests
          );

          if (data.status === "error") {
            console.log(
              "unstartedQuests lub unstartedQuests.quests jest pusty"
            );
            unstartedQuests.quests = [];
          }

          if (unstartedQuests) {
            questsAnn.quests = unstartedQuests.quests.filter(
              (quests) => quests.id_npc === "Ann"
            );
            console.log("Znalezione questy dla Ann:", questsAnn);

            questsRyan.quests = unstartedQuests.quests.filter(
              (quests) => quests.id_npc === "Ryan"
            );
            console.log("Znalezione questy dla Ryan:", questsRyan);

            questsOrn.quests = unstartedQuests.quests.filter(
              (quests) => quests.id_npc === "Orn"
            );
            console.log("Znalezione questy dla Orn:", questsOrn);

            questsNora.quests = unstartedQuests.quests.filter(
              (quests) => quests.id_npc === "Nora"
            );
            console.log("Znalezione questy dla Nora:", questsNora);
          }
        },
        error: function (error) {
          console.log("Error fetching data:", error);
        },
      });

      $.ajax({
        url: "../js/database.php",
        method: "LOAD_INPROGRESS_QUESTS",
        success: function (response) {
          var data = JSON.parse(response);
          activeQuests = data;

          console.log("Ładowanie aktywnych questów...\n", activeQuests);

          //Sprawdzenie czy target i progress są sobie równe(lub progress jest większy), jak tak to tytuł zamień na "Wróć do " + nazwa NPC
          if (activeQuests && activeQuests.quests) {
            const questsArray = Object.values(activeQuests.quests);

            const questsToUpdate = questsArray.filter(
              (quest) => quest.progress >= quest.target
            );

            questsToUpdate.forEach((questToUpdate) => {
              const idToUpdate = questToUpdate.id;

              Object.keys(activeQuests.quests).forEach((key) => {
                if (activeQuests.quests[key].id === idToUpdate) {
                  activeQuests.quests[key].target = -1;
                  activeQuests.quests[key].title =
                    "Porozmawiaj z " + activeQuests.quests[key].id_npc;
                }
              });
            });
          }
        },
      });
      this.removeQuestionMarks();
    },

    save() {
      console.log("Zapisywanie postępu w grze...");
      console.log("EXP:", playerExp);
      console.log("HP:", playerHp);
      console.log("DMG:", playerDmg);
      console.log("X:", this.player.x);
      console.log("Y:", this.player.y);

      var playerX = this.player.x;
      var playerY = this.player.y;

      $.ajax({
        url: "../js/database.php",
        method: "POST",
        data: {
          action: "SAVE",
          newExp: playerExp,
          newHp: playerHp,
          newDMG: playerDmg,
          newX: playerX,
          newY: playerY,
        },
        success: function (response) {
          console.log("Data updated successfully:", response);
        },
        error: function (error) {
          console.log("Error updating data:", error);
        },
      });
    },

    loading() {
      const self = this; // Zapisujemy kontekst this w zmiennej self

      $(document).ready(function () {
        // Pobranie danych z bazy danych
        $.ajax({
          url: "../js/database.php", // Ścieżka do pliku PHP
          method: "GET",
          success: function (response) {
            var data = JSON.parse(response);
            nickname = data.nickname;
            playerExp = data.exp;
            playerHp = data.hp;
            playerDmg = data.dmg;

            self.player.x = data.x; // Używamy self zamiast this
            self.player.y = data.y; // Używamy self zamiast this

            for (; playerMaxExp <= playerExp; ) {
              /*console.log(
                "playerExp >= playerMaxExp (",
                playerExp,
                ">=",
                playerMaxExp,
                ") więc:"
              );*/
              ++playerLvl;
              playerMinExp = playerMaxExp;
              playerMaxExp = playerMaxExp + playerLvl * 1000 + 1000;
            }

            playerMaxHp = 100 + playerLvl * 100;

            if (playerHp > playerMaxHp) {
              playerHp = playerMaxHp;
            }

            console.log(
              "Ładowanie podstawowych danych dla gracza",
              data.nickname
            );
            console.log("EXP:", playerExp);
            console.log("MAX EXP:", playerMaxExp);
            console.log("MIN EXP:", playerMinExp);
            console.log("LVL:", playerLvl);

            console.log("HP:", playerHp);
            console.log("DMG:", playerDmg);
            console.log("X:", self.player.x);
            console.log("Y:", self.player.y);
          },
          error: function (error) {
            console.log("Error fetching data:", error);
          },
        });
      });
    },

    showActiveQuests() {
      let dialogContent = "";

      // Sprawdzamy, czy odpowiedź zawiera status "success" i czy zawiera questy
      if (
        activeQuests.status === "success" &&
        activeQuests.quests &&
        activeQuests.quests.length > 0
      ) {
        // Przechodzimy przez każdy quest w tablicy quests
        activeQuests.quests.forEach((quest) => {
          // Dodajemy tytuł i dialog questu do treści dialogu
          if (quest.target != 1 && quest.target != -1) {
            dialogContent +=
              quest.title + ": " + quest.progress + "/" + quest.target + "\n";
          } else {
            dialogContent += quest.title + "\n";
          }
        });
      } else {
        dialogContent = "Brak aktywnych Questów";
      }
      CreateDialog(this, "LISTA ZADAN", dialogContent, "list")
        .setPosition(camX, camY)
        .layout()
        .modalPromise({
          manaulClose: true,
          duration: {
            in: 500,
            out: 500,
          },
        })
        .then(
          function (data) {
            if (`${data.text}` == "") {
            } else {
              console.log(`${data.index}`);
              console.log(`${data.text}`);
              console.log(`${data.button}`);
              console.log(`${data.dialog}`);
            }
            this.dialogOpen = false;
          }.bind(this)
        );
    },

    attack(dmg, hpEnemy) {
      hpEnemy -= dmg;
      return hpEnemy;
    },

    collectFlower(type, player, flower) {
      if (activeQuests && activeQuests.quests) {
        const questsArray = Object.values(activeQuests.quests);

        const quest = questsArray.filter((quest) => quest.name_target === type);
        this.progressQuest(quest);
      }

      switch (type) {
        case "rose":
          changeHp(20, "remove"); // Zmniejsz punkty życia
          break;

        case "cornflower":
          gainExp(100); // Zdobądź doświadczenie
          break;
        
        case "malwa":
          changeHp(10, "gain"); // Zwiększ punkty życia
          break;
        default:
          break;
      }

      flower.destroy(); // Zniszcz kwiat

      this.timerEvent = this.time.addEvent({
        delay: 60000,
        callback: this.addFlower.bind(this, type), // Dodaj kwiatek tego samego rodzaju
        callbackScope: this,
        loop: false,
      });
    },

    addFlower(type) {
      // Funkcja dodająca nowy kwiatek tego samego rodzaju w losowej lokalizacji
      var newFlower;
      switch (type) {
        case "rose":
          newFlower = this.rosesGroup.create(
            Phaser.Math.Between(16, 1872),
            Phaser.Math.Between(24, 1544),
            "rose"
          );
          break;
        case "cornflower":
          newFlower = this.cornflowersGroup.create(
            Phaser.Math.Between(16, 1872),
            Phaser.Math.Between(24, 1544),
            "cornflower"
          );
          break;
        case "malwa":
          newFlower = this.malwasGroup.create(
            Phaser.Math.Between(16, 1872),
            Phaser.Math.Between(24, 1544),
            "malwa"
          );
          break;
        default:
          break;
      }
    },

    addEnemy(name) {
      // Dodaj nową różę w losowej lokalizacji
      if (name == "slime") {
        this.enemyCreate(
          1298,
          1872,
          741,
          1033,
          "blue_slime",
          "stayslime",
          200,
          50,
          5000,
          100
        );
      } else if (name == "picku") {
        this.enemyCreate(
          8,
          600,
          13,
          500,
          "picku",
          "staypicku",
          1000,
          250,
          5000,
          700
        );
      } else if (name == "robber_1") {
        this.enemyCreate(92, 92, 1416, 1416, "robber_1", "stayrobber_1", 600, 100, 7500, 1500);
      } else if (name == "robber_2") {
        this.enemyCreate(275, 275, 1534, 1534, "robber_2", "stayrobber_2", 500, 200, 3500, 1000);
      } else if (name == "robber_boss") {
        this.enemyCreate(136, 136, 1448, 1448, "robber_boss", "stayrobber_boss", 750, 150, 5000, 2000);
      }
    },

    enemyCreate(
      x_s,
      x_f,
      y_s,
      y_f,
      enemy_name,
      enemy_anim,
      enemy_hp,
      enemy_dmg,
      enemy_attackSpeed,
      enemy_exp
    ) {
      let x = Phaser.Math.Between(x_s, x_f);
      let y = Phaser.Math.Between(y_s, y_f);

      let enemy = this.physics.add.sprite(x, y, enemy_name).setDepth(0);
      enemy.hp = enemy_hp;
      enemy.dmg = enemy_dmg;
      enemy.attackSpeed = enemy_attackSpeed;
      enemy.exp = enemy_exp;

      enemy.play(enemy_anim, true);

      // Mapowanie nazw tablic na referencje
      const arrays = {
        blue_slime: slimes,
        picku: pickus,
        robber_1: robber_1,
        robber_2: robber_2,
        robber_boss: robber_boss,
      };

      // Dodawanie wroga do odpowiedniej tablicy
      if (arrays[enemy_name]) {
        arrays[enemy_name].push(enemy);
        console.log(`Aktualna ilość ${enemy_name}:`, arrays[enemy_name].length);
      } else {
        console.error(`Nieprawidłowa nazwa tablicy: ${enemy_name}`);
      }
    },

    animations() {
      /* BLUE SLIME */
      this.anims.create({
        key: "stayslime",
        frames: this.anims.generateFrameNumbers("blue_slime", {
          frames: [0, 1, 2],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "attackslime",
        frames: this.anims.generateFrameNumbers("blue_slime", {
          frames: [4, 5, 6],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "runslime",
        frames: this.anims.generateFrameNumbers("blue_slime", {
          frames: [4, 5, 6],
        }),
        frameRate: 3,
        repeat: -1,
      });

      /* PICKU */
      this.anims.create({
        key: "staypicku",
        frames: this.anims.generateFrameNumbers("picku", {
          frames: [0, 1, 2],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "runpicku",
        frames: this.anims.generateFrameNumbers("picku", {
          frames: [4, 5],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "attackpicku",
        frames: this.anims.generateFrameNumbers("picku", {
          frames: [8, 9],
        }),
        frameRate: 3,
        repeat: -1,
      });

      /* ROBBER */
      this.anims.create({
        key: "stayrobber_1",
        frames: this.anims.generateFrameNumbers("robber_1", {
          frames: [0, 1, 2],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "runrobber_1",
        frames: this.anims.generateFrameNumbers("robber_1", {
          frames: [4, 5, 6],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "attackrobber_1",
        frames: this.anims.generateFrameNumbers("robber_1", {
          frames: [8, 9],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "stayrobber_2",
        frames: this.anims.generateFrameNumbers("robber_2", {
          frames: [0, 0, 1],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "runrobber_2",
        frames: this.anims.generateFrameNumbers("robber_2", {
          frames: [4, 5, 6],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "attackrobber_2",
        frames: this.anims.generateFrameNumbers("robber_2", {
          frames: [8, 9],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "stayrobber_boss",
        frames: this.anims.generateFrameNumbers("robber_boss", {
          frames: [0, 0, 1],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "runrobber_boss",
        frames: this.anims.generateFrameNumbers("robber_boss", {
          frames: [4, 5, 6],
        }),
        frameRate: 3,
        repeat: -1,
      });

      this.anims.create({
        key: "attackrobber_boss",
        frames: this.anims.generateFrameNumbers("robber_boss", {
          frames: [8, 9],
        }),
        frameRate: 3,
        repeat: -1,
      });
      /* ANN */
      this.anims.create({
        key: "stayann",
        frames: this.anims.generateFrameNumbers("ann", {
          frames: [0, 1, 2, 3, 4, 5, 6, 7],
        }),
        frameRate: 3,
        repeat: -1,
      });

      /* RYAN */
      this.anims.create({
        key: "stayryan",
        frames: this.anims.generateFrameNumbers("ryan", {
          frames: [0, 1, 2, 3, 4, 5, 6, 7],
        }),
        frameRate: 3,
        repeat: -1,
      });

      /* ORN */
      this.anims.create({
        key: "stayorn",
        frames: this.anims.generateFrameNumbers("orn", {
          frames: [0, 1, 2, 3],
        }),
        frameRate: 3,
        repeat: -1,
      });

      /* NORA */
      this.anims.create({
        key: "staynora",
        frames: this.anims.generateFrameNumbers("nora", {
          frames: [0, 1, 2, 3],
        }),
        frameRate: 3,
        repeat: -1,
      });

      /* PLAYER */
      this.anims.create({
        key: "fight",
        frames: this.anims.generateFrameNumbers("hero", {
          frames: [16, 17, 18, 19],
        }),
        frameRate: 4,
        repeat: -1,
      });

      this.anims.create({
        key: "stay",
        frames: this.anims.generateFrameNumbers("hero", { frames: [0] }),
        frameRate: 4,
        repeat: -1,
      });

      this.anims.create({
        key: "left",
        frames: this.anims.generateFrameNumbers("hero", {
          frames: [4, 5, 6, 7],
        }),
        frameRate: 4,
        repeat: -1,
      });

      this.anims.create({
        key: "right",
        frames: this.anims.generateFrameNumbers("hero", {
          frames: [8, 9, 10, 11],
        }),
        frameRate: 4,
        repeat: -1,
      });

      this.anims.create({
        key: "down",
        frames: this.anims.generateFrameNumbers("hero", {
          frames: [0, 1, 2, 3],
        }),
        frameRate: 4,
        repeat: -1,
      });

      this.anims.create({
        key: "up",
        frames: this.anims.generateFrameNumbers("hero", {
          frames: [12, 13, 14, 15],
        }),
        frameRate: 4,
        repeat: -1,
      });
    },

    map() {
      let demo = this.add.tilemap("demo");

      let terrain = demo.addTilesetImage("terrain_atlas", "terrain");

      let layer1 = demo.createLayer("ziemia", [terrain], 0, 0).setDepth(-1);
      let layer2 = demo.createLayer("przod", [terrain], 0, 0).setDepth(0);
      let layer3 = demo.createLayer("dodatki", [terrain], 0, 0).setDepth(1);

      // Dodawanie kolizji pomiędzy postacią a warstwami mapy
      this.physics.add.collider(this.player, layer1);
      this.physics.add.collider(this.player, layer2);
      this.physics.add.collider(this.player, layer3);

      // Ustawienie właściwości kolizji na warstwach mapy
      layer1.setCollisionByProperty({ collision: true });
      layer2.setCollisionByProperty({ collision: true });
      layer3.setCollisionByProperty({ collision: true });

      // Ustawienie rozmiaru warstw mapy
      layer1.setDisplaySize(demo.widthInPixels, demo.heightInPixels);
      layer2.setDisplaySize(demo.widthInPixels, demo.heightInPixels);
      layer3.setDisplaySize(demo.widthInPixels, demo.heightInPixels);

      mapX = demo.widthInPixels - 32;
      mapY = demo.heightInPixels - 32;
    },

    change_status(quest_status, id) {
      $.ajax({
        url: "../js/database.php",
        method: "POST",
        data: {
          action: "CHANGE_STATUS",
          newStatus: quest_status,
          quest_id: id,
        },
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function (response) {
          console.log("Data updated successfully:", response);
        },
        error: function (error) {
          console.log("Error updating data:", error);
        },
      });
    },

    prize(quest) {
      var dialog = "Dziękuję bardzo za Twoją pomoc!\n\n";
      if (quest.prize_exp > 0) {
        gainExp(quest.prize_exp);
        dialog += "EXP: +" + quest.prize_exp + "\n";
      }
      if (quest.prize_dmg > 0) {
        playerDmg += quest.prize_dmg;
        dialog +=
          "DMG: +" + quest.prize_dmg + "(teraz DMG: " + playerDmg + ")" + "\n";
      }
      if (quest.prize_hp > 0) {
        changeHp(quest.prize_hp, "gain");
        dialog +=
          "HP: +" + quest.prize_hp + "(teraz HP: " + playerHp + ")" + "\n";
      }

      this.save();
      return dialog;
    },

    addQuestionMark(x, y) {
      let questionMark = this.add.image(x, y, "question_mark").setDepth(1);
      questionMarks.push(questionMark); // Dodaj obraz do tablicy, aby móc go usunąć później
    },

    showDialog(defaultDialog, quests, what) {
      this.dialogOpen = true;
      console.log(quests);

      if (
        what == "quest" &&
        quests &&
        quests.quests &&
        quests.quests.length > 0
      ) {
        CreateDialog(
          this,
          quests.quests[0].title,
          quests.quests[0].dialog.replace(/\\n/g, "\n"),
          "quest"
        )
          .setPosition(camX, camY)
          .layout()
          .modalPromise({
            // defaultBehavior: false,
            manaulClose: true,
            duration: {
              in: 500,
              out: 500,
            },
          })
          .then(
            function (data) {
              if (`${data.text}` == "Przyjmij") {
                this.change_status("inprogress", quests.quests[0].id);
                this.load_quests();
              } else {
                console.log(`${data.index}`);
                console.log(`${data.text}`);
                console.log(`${data.button}`);
                console.log(`${data.dialog}`);
              }
              this.dialogOpen = false;
            }.bind(this)
          );
      } else if (
        what == "finishedquest" &&
        quests &&
        quests.quests &&
        quests.quests.length > 0
      ) {
        this.change_status("finished", quests.quests[0].id);
        CreateDialog(this, "", this.prize(quests.quests[0]), "end")
          .setPosition(camX, camY)
          .layout()
          .modalPromise({
            manaulClose: true,
            duration: {
              in: 500,
              out: 500,
            },
          })
          .then(
            function (data) {
              if (`${data.text}` == "Przyjmij") {
                this.load_quests();
              } else {
                console.log(`${data.index}`);
                console.log(`${data.text}`);
                console.log(`${data.button}`);
                console.log(`${data.dialog}`);
              }
              this.dialogOpen = false;
            }.bind(this)
          );
      } else {
        CreateDialog(this, "", defaultDialog, "default")
          .setPosition(camX, camY)
          .layout()
          .modalPromise({
            manaulClose: true,
            duration: {
              in: 500,
              out: 500,
            },
          })
          .then(
            function (data) {
              this.dialogOpen = false;
            }.bind(this)
          );
      }
    },

    removeQuestionMarks() {
      questionMarks.forEach((questionMark) => {
        questionMark.destroy();
      });
      questionMarks = []; // Wyczyść tablicę po usunięciu znaków zapytania
    },

    progressQuest(quest) {
      quest.forEach((quest) => {
        // Zwiększenie wartości wszystkich progress o 1 wszystkich aktywnych questów
        quest.progress += 1;

        //Zmiana progress w database:
        $.ajax({
          url: "../js/database.php",
          method: "POST",
          data: {
            action: "CHANGE_PROGRESS",
            newProgress: quest.progress,
            quest_id: quest.id,
          },
          success: function (response) {
            console.log("Data updated successfully:", response);
          },
          error: function (error) {
            console.log("Error updating data:", error);
          },
        });
      });

      this.load_quests();
    },
  },

  create: function () {
    /* PODSTAWOWE DANE */
    {
      this.loading();
      if (playerHp <= 0) {
        this.scene.start("dead");
      }
      this.animations();
      this.check_status();
      this.load_quests();

      // Dodajemy obsługę zdarzenia naciśnięcia klawisza Enter
      this.input.keyboard.on(
        "keydown-ENTER",
        function () {
          // Wyświetlenie wartości mapX i mapY
          console.log("mapX:", mapX);
          console.log("mapY:", mapY);

          // Wyświetlenie pozycji gracza
          console.log("Gracz - X:", this.player.x);
          console.log("Gracz - Y:", this.player.y);
        },
        this
      );
    }
    /* CHARACTERS  */
    {
      //Player
      this.player = this.physics.add.sprite(0, 0, "hero"); // Dodanie Bohatera do Mapy, (100,100 to pozycja)

      //Ryan
      this.ryan = this.physics.add.sprite(1060, 480, "ryan").setDepth(2); // Dodanie NPC Ryan
      this.ryan.setInteractive(); // Dodanie możliwości interakcji z NPC Ryan
      this.ryan.play("stayryan", true);

      //Ann
      this.ann = this.physics.add.sprite(1790, 378, "ann").setDepth(2); // Dodanie NPC Ann
      this.ann.setInteractive(); // Dodanie możliwości interakcji z NPC Ann
      this.ann.play("stayann", true);

      //Ryan
      this.orn = this.physics.add.sprite(786, 595, "orn").setDepth(2); // Dodanie NPC Ryan
      this.orn.setInteractive(); // Dodanie możliwości interakcji z NPC Ryan
      this.orn.play("stayorn", true);

      //Ryan
      this.nora = this.physics.add.sprite(1745, 1252, "nora").setDepth(2); // Dodanie NPC Ryan
      this.nora.setInteractive(); // Dodanie możliwości interakcji z NPC Ryan
      this.nora.play("staynora", true);
    }
    /* ENEMY */
    {
      //Blue Slime
      for (let i = 0; i < 5; i++) {
        this.addEnemy("slime");
      }
      //Picku
      for (let i = 0; i < 3; i++) {
        this.addEnemy("picku");
      }

      //Robbers
      this.addEnemy("robber_1");
      this.addEnemy("robber_2");
      this.addEnemy("robber_boss");
    }
    /* OBJECTS */
    {
      // Tworzenie różnych grup dla różnych rodzajów kwiatów
      this.rosesGroup = this.physics.add.group();
      this.cornflowersGroup = this.physics.add.group();
      this.malwasGroup = this.physics.add.group();

      // Tworzenie różnych rodzajów kwiatów w odpowiednich grupach
      for (var i = 0; i < 20; i++) {
        this.addFlower("rose");

        // var rose = this.rosesGroup.create(
        //   Phaser.Math.Between(0, 1872),
        //   Phaser.Math.Between(0, 1544),
        //   "rose"
        // );
      }
      for (var i = 0; i < 5; i++) {
        this.addFlower("cornflower");

        // var cornflower = this.cornflowersGroup.create(
        //   Phaser.Math.Between(0, 1872),
        //   Phaser.Math.Between(0, 1544),
        //   "cornflower"
        // );
      }
      for (var i = 0; i < 10; i++) {
        this.addFlower("malwa");

        // var malwa = this.malwasGroup.create(
        //   Phaser.Math.Between(0, 1872),
        //   Phaser.Math.Between(0, 1544),
        //   "malwa"
        // );
      }

      // Dodanie obsługi kolizji dla każdego rodzaju kwiatów
      this.physics.add.overlap(
        this.player,
        this.rosesGroup,
        this.collectFlower.bind(this, "rose"),
        null,
        this
      );

      this.physics.add.overlap(
        this.player,
        this.cornflowersGroup,
        this.collectFlower.bind(this, "cornflower"),
        null,
        this
      );

      this.physics.add.overlap(
        this.player,
        this.malwasGroup,
        this.collectFlower.bind(this, "malwa"),
        null,
        this
      );
    }
    /* REST */
    {
      //HP and FRAME
      this.hp = this.add.image(this.player.x, this.player.y, "hp").setDepth(4);

      this.hp_frame = this.add
        .image(this.player.x, this.player.y, "hp_frame")
        .setDepth(2);

      //EXP and FRAME
      this.lvl = this.add
        .image(this.player.x, this.player.y, "lvl")
        .setDepth(4);
      this.lvl_frame = this.add
        .image(this.player.x, this.player.y, "lvl_frame")
        .setDepth(2);

      // LVL

      levelText = this.add.text(0, 0, playerLvl, {
        fontSize: "9px",
        fill: "#fff",
      });
    }
    //KEYS and CURSORS
    {
      this.cursors = this.input.keyboard.createCursorKeys(); // Pozwolenie funkcji coursors na sprawdzenie, jaki klawisz jest naciśnięty
      this.keys = this.input.keyboard.addKeys({
        knowledge: Phaser.Input.Keyboard.KeyCodes.K, // Klawisz do sprawdzania koordynatów
        quest_key: Phaser.Input.Keyboard.KeyCodes.Q, // Klawisz do sprawdzenia listy questów
        esc: Phaser.Input.Keyboard.KeyCodes.ESC, // Klawisz do powrotu do menu
        save: Phaser.Input.Keyboard.KeyCodes.S, // Klawisz do zapisu postępu w grze
      });
    }
    /* MAP CREATOR */
    {
      this.map();
    }
    /* CAMERA */
    {
      // Ustawienie przybliżenia kamery i śledzenie postaci
      this.cameras.main.setZoom(2);
      this.cameras.main.startFollow(this.player, true);
      this.player.body.collideWorldBounds = true; // Dodanie kolizji bohatera ze światem
      this.physics.world.setBounds(0, 0, mapX, mapY);

      this.cameras.main.setBackgroundColor(0, 0, 0); // Ustawienie koloru tła na czarny
      this.cameras.main.setBounds(0, 0, mapX, mapY); // Ustawienie bariery kamery
    }
    /* COLLISIONS */
    {
      this.physics.add.collider(
        this.player,
        this.rosesGroup,
        this.collectRose,
        null,
        this
      );
    }
    /* DIALOGUES */
    {
      this.dialogOpen = false; //Sprawdzanie, czy jakiś dialog jest otwarty
      this.fight = false; //Sprawdzenie, czy gracz jest podczas walki
      //Reakcja Ann na kliknięcie w nią myszką
      this.ann.on("pointerdown", () => {
        if (
          this.ann.x + 32 >= this.player.x &&
          this.ann.x - 32 <= this.player.x &&
          this.ann.y + 32 >= this.player.y &&
          this.ann.y - 32 <= this.player.y
        ) {
          if (this.dialogOpen == false) {
            this.dialogOpen = true;
            var endDialog = [];

            if (
              activeQuests &&
              activeQuests.quests &&
              activeQuests.quests.length > 0
            ) {
              endDialog.quests = activeQuests.quests.filter(
                (quests) => quests.id_npc === "Ann" && quests.target === -1
              );
            }

            if (endDialog && endDialog.quests && endDialog.quests.length > 0) {
              this.showDialog(
                "Dziękuje ci za pomoc, oto twoja nagroda",
                endDialog,
                "finishedquest"
              );
            } else {
              this.showDialog(
                "Kocham tu przesiadywac. Jest to miejsce, gdzie możesz naprawde odpoczac od tego co sie dzieje w dzisiejszych czasach oraz sie chociaz na chwile uspokoic.",
                questsAnn,
                "quest"
              );
            }
          }
        }
      });

      //Reakcja Ryana na kliknięcie w niego myszką
      this.ryan.on("pointerdown", () => {
        if (
          this.ryan.x + 32 >= this.player.x &&
          this.ryan.x - 32 <= this.player.x &&
          this.ryan.y + 32 >= this.player.y &&
          this.ryan.y - 32 <= this.player.y
        ) {
          if (this.dialogOpen == false) {
            this.dialogOpen = true;
            var endDialog = [];

            if (
              activeQuests &&
              activeQuests.quests &&
              activeQuests.quests.length > 0
            ) {
              endDialog.quests = activeQuests.quests.filter(
                (quests) => quests.id_npc === "Ryan" && quests.target === -1
              );
            }

            if (endDialog && endDialog.quests && endDialog.quests.length > 0) {
              this.showDialog(
                "Udalo ci sie! Mam tu cos dla Ciebie...",
                endDialog,
                "finishedquest"
              );
            } else {
              this.showDialog(
                "O, hej! Dawno Cie nie widzialem " +
                  nickname +
                  "! Ubierz cos na siebie bo zapowiada sie naprawde wietrzna pogoda.",
                questsRyan,"quest"
              );
            }
          }
        }
      });

      //Reakcja Orna na kliknięcie w niego myszką
      this.orn.on("pointerdown", () => {
        if (
          this.orn.x + 32 >= this.player.x &&
          this.orn.x - 32 <= this.player.x &&
          this.orn.y + 32 >= this.player.y &&
          this.orn.y - 32 <= this.player.y
        ) {
          if (this.dialogOpen == false) {
            this.dialogOpen = true;
            var endDialog = [];

            if (
              activeQuests &&
              activeQuests.quests &&
              activeQuests.quests.length > 0
            ) {
              endDialog.quests = activeQuests.quests.filter(
                (quests) => quests.id_npc === "Orn" && quests.target === -1
              );
            }

            if (endDialog && endDialog.quests && endDialog.quests.length > 0) {
              this.showDialog(
                "O, juz skonczyles zadanie? Dosc szybko jak na poczatkujacego wojownika!",
                endDialog,
                "finishedquest"
              );
            } else {
              this.showDialog(
                "Czesc "+nickname+",\nMoze nie wygladam, ale duzo juz w swoim zyciu zdolalem przezyc. Nawet nie wiesz ile zdolalem zabic tych rozbojnikow. Uwazaj na nich, sa dosc silni! \nSwoja przygode wojownika zaczynalem polujac na Slime, ktore byly dosc prostymi przeciwnikami. Jednak szybko przenioslem sie w inne miejsce, walczac jendoczesnie z Picku, sa to dosc wytrzymale stworzenia, ale wiele technik mozesz sie od nich nauczyc...\nPowodzenia!",
                questsOrn,"quest"
              );
            }
          }
        }
      });

      //Reakcja Nora na kliknięcie w niego myszką
      this.nora.on("pointerdown", () => {
        if (
          this.nora.x + 32 >= this.player.x &&
          this.nora.x - 32 <= this.player.x &&
          this.nora.y + 32 >= this.player.y &&
          this.nora.y - 32 <= this.player.y
        ) {
          if (this.dialogOpen == false) {
            this.dialogOpen = true;
            var endDialog = [];

            if (
              activeQuests &&
              activeQuests.quests &&
              activeQuests.quests.length > 0
            ) {
              endDialog.quests = activeQuests.quests.filter(
                (quests) => quests.id_npc === "Nora" && quests.target === -1
              );
            }

            if (endDialog && endDialog.quests && endDialog.quests.length > 0) {
              this.showDialog(
                "Jestes kochany! Dziekuje Ci, " + nickname +"...",
                endDialog,
                "finishedquest"
              );
            } else {
              this.showDialog(
                "Hej, znasz sie na kwiatach" + nickname + "?\nRoze sa czerwone, uwazaj na nie! Jest ich tutaj bardzo wiele, ale przechodząc obok nich mozesz się skaleczyc. Jak jednak sie skaleczysz, wetrzyj w siebie Malwe, to sa takie rozowe kwiaty, ktore maja wlasciwosci lecznicze. Jezeli jednak chcesz w wolnym czasie sie wzmocnij przed walka, zjedz Chabry! Pomagaja one na wzrost miesni.",
                questsNora,"quest"
              );
            }
          }
        }
      });
    }
  },

  update: function () {
    /* Dodanie question_Marków nad NPC, który posiada quest */
    if (unstartedQuests.quests != 0) {
      // Dla Ann
      if (questsAnn && questsAnn.quests && questsAnn.quests.length > 0) {
        this.addQuestionMark(this.ann.x, this.ann.y - 35);
      }
      // Dla Ryana
      if (questsRyan && questsRyan.quests && questsRyan.quests.length > 0) {
        this.addQuestionMark(this.ryan.x, this.ryan.y - 35);
      }
      if (questsOrn && questsOrn.quests && questsOrn.quests.length > 0) {
        this.addQuestionMark(this.orn.x, this.orn.y - 35);
      }
      if (questsNora && questsNora.quests && questsNora.quests.length > 0) {
        this.addQuestionMark(this.nora.x, this.nora.y - 35);
      }
    } else {
      this.removeQuestionMarks();
    }
    /* Gdy gracz umiera (ma 0HP bądź mniej) uruchamia scenę ,,endGame" */
    if (playerHp <= 0) {
      this.scene.start("dead");
    }

    /* Powrót do menu po kliknięciu ESC */
    if (this.keys.esc.isDown === true) {
      this.save();
      this.scene.start("menu");
    }

    // Wyświetlenie listy Questów
    if (this.keys.quest_key.isDown === true && this.dialogOpen == false) {
      this.dialogOpen = true;
      this.showActiveQuests();
    }

    /* Sprawdzanie koordynatów w konsoli po naciśnięciu ENTER */
    if (this.keys.knowledge.isDown === true && this.dialogOpen == false) {
      this.dialogOpen = true;
      this.showKnowledge();
    }

    /* Uruchomienie funkcji save po kliknięciu "S" */
    if (this.keys.save.isDown === true) {
      this.save();
    }

    /* Aktualizacja pozycji Main Kamery */
    {
      camX = this.cameras.main.scrollX + this.game.renderer.width / 2; // X środka kamery
      camY = this.cameras.main.scrollY + this.game.renderer.height / 2; // Y środka kamery
    }

    /* FIGHTS */
    // Sprawdzenie walki z wrogami
    const checkFight = (enemies, enemyType, dmg) => {
      enemies.forEach((enemy, index) => {
        try {
          if (enemy && enemy.hp > 0) {
            let distanceToPlayer = Phaser.Math.Distance.Between(
              enemy.x,
              enemy.y,
              this.player.x,
              this.player.y
            );

            if (distanceToPlayer < 100) {
              if (distanceToPlayer >= 16){
              enemy.play(`run${enemyType}`, true);
              }
              if (distanceToPlayer < 16) {
                this.fight = true;
                enemy.setVelocity(0);
                enemy.play(`attack${enemyType}`, true);

                if (!enemy.lastAttack) {
                  enemy.lastAttack = this.time.now;
                }

                if (this.time.now - enemy.lastAttack >= enemy.attackSpeed) {
                  
                  if (
                  enemy.animations &&
                  enemy.animations.get(`attack${enemyType}`)
                ) {
                  enemy.play(`attack${enemyType}`, true);
                }

                  playerHp = this.attack(enemy.dmg, playerHp);
                  console.log(`${enemyType} atakuje`);
                  console.log("HP player: ", playerHp);

                  enemy.lastAttack = this.time.now;

                  // Dodajemy wywołanie funkcji updateLastAttackTime w momencie ataku gracza
                  enemy.lastAttack = this.time.now;
                }
              } else {
                this.fight = false;
                this.physics.moveToObject(enemy, this.player, 32);
              }
            } else {  //Jeżeli wróg jest w odległości +100 kratek
              enemy.setVelocity(0);
              enemy.play(`stay${enemyType}`, true);
            }
          } else if (enemy && enemy.hp <= 0) { //Jeżeli przeciwnik umrze
            this.fight = false;
            this.lastAttackPlayer = 0;
            if (activeQuests && activeQuests.quests) {
              const questsArray = Object.values(activeQuests.quests);
              const quest = questsArray.filter(
                (quest) => quest.name_target === `${enemyType}`
              );
              this.progressQuest(quest);
            }
            gainExp(enemy.exp);
            enemies.splice(index, 1);
            enemy.destroy();
            setTimeout(() => {
              console.log(`Tworzenie nowego ${enemyType}`);
              this.addEnemy(enemyType);
            }, 5000);
          }
        } catch {}
      });
    };

    // Slime Fight
    if (slimes && slimes.length > 0) {
      checkFight(slimes, "slime", playerDmg);
    }

    // Picku Fight
    if (pickus && pickus.length > 0) {
      checkFight(pickus, "picku", playerDmg);
    }

    // Picku Fight
    if (robber_1 && robber_1.length > 0) {
      checkFight(robber_1, "robber_1", playerDmg);
    }

    // Picku Fight
    if (robber_2 && robber_2.length > 0) {
      checkFight(robber_2, "robber_2", playerDmg);
    }

    // Picku Fight
    if (robber_boss && robber_boss.length > 0) {
      checkFight(robber_boss, "robber_boss", playerDmg);
    }

    // Atak gracza
    if (!this.lastAttackPlayer) {
      this.lastAttackPlayer = this.time.now;
    }

    if (this.time.now - this.lastAttackPlayer >= 2500) {
      slimes.forEach((slime) => {
        if (
          slime &&
          Phaser.Math.Distance.Between(
            slime.x,
            slime.y,
            this.player.x,
            this.player.y
          ) < 16 &&
          slime.hp > 0
        ) {
          slime.hp = this.attack(playerDmg, slime.hp);
          console.log("Gracz atakuje");
          console.log("HP slime:", slime.hp);
        }
      });

      pickus.forEach((picku) => {
        if (
          picku &&
          Phaser.Math.Distance.Between(
            picku.x,
            picku.y,
            this.player.x,
            this.player.y
          ) < 16 &&
          picku.hp > 0
        ) {
          picku.hp = this.attack(playerDmg, picku.hp);
          console.log("Gracz atakuje");
          console.log("HP picku:", picku.hp);
        }
      });

      this.lastAttackPlayer = this.time.now;
    }

    /* Dodanie HP i EXP nad postacią */
    {
      // Ustawienie pozycji X hp
      this.hp.x = this.player.x;
      this.hp_frame.x = this.player.x;

      this.hp.y = this.player.y - 24;
      this.hp_frame.y = this.hp.y;

      this.hp.setScale(playerHp / playerMaxHp, 1);

      /* Dodanie EXP nad postacią*/
      this.lvl.x = this.player.x;
      this.lvl_frame.x = this.player.x;

      this.lvl.y = this.player.y - 27;
      this.lvl_frame.y = this.lvl.y;

      if (playerLvl != 0) {
        this.lvl.setScale(
          (playerExp - playerMinExp) / (playerLvl * 1000 + 1000),
          1
        );
      } else {
        this.lvl.setScale(playerExp / 1000, 1);
      }

      /* Dodanie LvL nad postacią*/
      levelText.x = this.lvl.x - 3;
      levelText.y = this.lvl.y - 15;
      levelText.setText(playerLvl);
    }

    /* Poruszanie się postaci */
    if (this.dialogOpen == true) {
      this.player.setVelocity(0);
    }
    if (this.player.active == true && this.dialogOpen == false) {
      if (this.cursors.down.isDown === true) {
        this.player.setVelocityY(100); //prędkość
        if (
          this.cursors.left.isDown === false &&
          this.cursors.right.isDown === false
        ) {
          this.player.play("down", true); //animacja,powtarzanie
        }
      }
      if (this.cursors.up.isDown === true) {
        this.player.setVelocityY(-100);
        if (
          this.cursors.left.isDown === false &&
          this.cursors.right.isDown === false
        ) {
          //opcja, żeby nie nadpisały się animacje podczas dwóch klawiszy
          this.player.play("up", true);
        }
      }

      if (this.cursors.left.isDown === true) {
        this.player.setVelocityX(-100);
        this.player.play("left", true);
      }

      if (this.cursors.right.isDown === true) {
        this.player.setVelocityX(100);
        this.player.play("right", true);
      }

      if (
        this.cursors.left.isDown === false &&
        this.cursors.right.isDown === false
      ) {
        this.player.setVelocityX(0); //Ustawia prędkość poziomą ciała fizycznego na 0.
      }

      if (
        this.cursors.up.isDown === false &&
        this.cursors.down.isDown === false
      ) {
        this.player.setVelocityY(0);
      }

      if (
        this.cursors.up.isDown === false &&
        this.cursors.down.isDown === false &&
        this.cursors.left.isDown === false &&
        this.cursors.right.isDown === false
      ) {
        if (this.fight == true) this.player.play("fight", true);
        else this.player.play("stay", true);
      }
    }
  },
};

var changeHp = function (amount, operation) {
  if (operation == "gain") {
    for (amount; amount--; amount != 0) {
      if (playerHp == playerMaxHp) {
        playerHp = playerMaxHp;
      } else {
        playerHp++;
      }
    }
  }

  if (operation == "remove") {
    for (amount; amount--; amount < 0) {
      playerHp--;
      if (playerHp <= 0) {
        return "dye";
      }
    }
  }
};

var gainExp = function (amount) {
  playerExp += amount;
  if (playerExp >= playerMaxExp) {
    console.log(
      "playerExp >= playerMaxExp (",
      playerExp,
      ">=",
      playerMaxExp,
      ") więc:"
    );
    ++playerLvl;
    playerMinExp = playerMaxExp;
    playerMaxExp = playerMaxExp + (playerLvl * 1000 + 1000);

    console.log("playerMinExp = ", playerMinExp);
    console.log("playerMaxExp = ", playerMaxExp);
    console.log("playerLvl = ", playerLvl);

    playerMaxHp += 100;
    playerDmg += Math.floor(Phaser.Math.Between(0, 50));
    playerHp = playerMaxHp;

    //* 1000 + 1000; // 0 lvl: 1000 exp, 1 lvl: 2000 exp, 2 lvl 3000 exp
    console.log("Gracz zdobył nowy poziom:", playerLvl);
    console.log(
      "Od teraz ilość HP jest równa ",
      playerMaxHp,
      "a posiada ",
      playerHp
    );
  }
};

var CreateDialog = function (
  scene,
  titleDialog,
  descriptionDialog,
  whatIsThis
) {
  if (whatIsThis == "list") {
    console.log("jest to questList");
    //dialog z ,,quest"
    var dialog = scene.rexUI.add
      .dialog({
        background: scene.rexUI.add.roundRectangle(
          0,
          0,
          100,
          100,
          40, //krawędzie
          0xc9e8369
        ),

        title: scene.rexUI.add.label({
          background: scene.rexUI.add.roundRectangle(
            0,
            0,
            100,
            100,
            10, //krawędzie
            0x8e8175
          ),
          text: scene.add.text(0, 0, titleDialog, {
            align: "center",
            fontSize: "30px",
            color: "#000000",
            fontFamily: "Alagard",
            wordWrap: { width: scene.sys.game.config.width / 4 },
          }),

          space: {
            left: 15,
            right: 15,
            top: 0,
            bottom: 0,
          },
        }),

        content: scene.rexUI.add.scrollablePanel({
          anchor: {
            centerX: "left",
            centerY: "center",
          },

          background: scene.rexUI.add.roundRectangle(0, 0, 2, 2, 10, 0x9e8369),
          panel: {
            child: scene.add.text(0, 0, descriptionDialog, {
              align: "center",
              fontFamily: "Alagard",
              fontSize: "16px",
              color: "#000000", //#8b8589
              wordWrap: { width: scene.sys.game.config.width / 2 },
            }),
            mask: {
              padding: 1,
            },
            width: scene.sys.game.config.width / 5, // szerokość panelu
            height: 100, // wysokość panelu
          },
          slider: {
            track: {
              color: 0x8e8175,
              radius: 8,
              width: 16,
            },
            thumb: {
              color: 0x9e9e9e,
              radius: 11,
              width: 22,
            },
          },
          space: {
            left: 20,
            right: 20,
            top: 0,
            bottom: 5,
          },
        }),

        actions: [CreateLabel(scene, "Zamknij")],

        space: {
          content: 0,
          titile: 0,
          action: 15,

          left: 20,
          right: 20,
          top: 20,
          bottom: 20,
        },

        align: {
          title: "center",
          content: "center",
          actions: "center", // 'center'|'left'|'right'
        },

        expand: {
          content: false, // Content is a pure text object
        },
      })
      .on(
        "button.click",
        function (button, groupName, index) {
          this.print.text += index + ": " + button.text + "\n";
        },
        this
      )
      .on("button.over", function (button, groupName, index) {
        button.getElement("background").setStrokeStyle(1, 0x21374b);
      })
      .on("button.out", function (button, groupName, index) {
        button.getElement("background").setStrokeStyle();
      })
      .setDepth(4);
  } else if (whatIsThis == "end") {
    console.log("jest to end");
    //dialog z ,,quest"
    var dialog = scene.rexUI.add
      .dialog({
        background: scene.rexUI.add.roundRectangle(
          0,
          0,
          100,
          100,
          40, //krawędzie
          0xc9e8369
        ),

        content: scene.rexUI.add.scrollablePanel({
          anchor: {
            centerX: "center",
            centerY: "center",
          },

          background: scene.rexUI.add.roundRectangle(0, 0, 2, 2, 10, 0x9e8369),
          panel: {
            child: scene.add.text(0, 0, descriptionDialog, {
              align: "center",
              fontFamily: "Alagard",
              fontSize: "16px",
              color: "#000000", //#8b8589
              wordWrap: { width: scene.sys.game.config.width / 4 },
            }),
            mask: {
              padding: 1,
            },
            width: scene.sys.game.config.width / 5, // szerokość panelu
            height: 100, // wysokość panelu
          },
          slider: {
            track: {
              color: 0x8e8175,
              radius: 8,
              width: 16,
            },
            thumb: {
              color: 0x9e9e9e,
              radius: 11,
              width: 22,
            },
          },
          space: {
            left: 46,
            right: 20,
            top: 10,
            bottom: 5,
          },
        }),

        actions: [CreateLabel(scene, "Przyjmij")],

        space: {
          content: 0,
          titile: 20,
          action: 15,

          left: 20,
          right: 20,
          top: 40,
          bottom: 20,
        },

        align: {
          actions: "center", // 'center'|'left'|'right'
        },

        expand: {
          content: false, // Content is a pure text object
        },
      })
      .on(
        "button.click",
        function (button, groupName, index) {
          this.print.text += index + ": " + button.text + "\n";
        },
        this
      )
      .on("button.over", function (button, groupName, index) {
        button.getElement("background").setStrokeStyle(1, 0x21374b);
      })
      .on("button.out", function (button, groupName, index) {
        button.getElement("background").setStrokeStyle();
      })
      .setDepth(4);
  } else if (whatIsThis == "quest") {
    console.log("jest to quest");
    //dialog z ,,quest"

    var dialog = scene.rexUI.add
      .dialog({
        background: scene.rexUI.add.roundRectangle(
          0,
          0,
          100,
          100,
          40, //krawędzie
          0xc9e8369
        ),
        title: scene.rexUI.add.label({
          background: scene.rexUI.add.roundRectangle(
            0,
            0,
            100,
            100,
            10, //krawędzie
            0x8e8175
          ),
          text: scene.add.text(0, 0, titleDialog, {
            align: "center",
            fontSize: "30px",
            color: "#000000",
            fontFamily: "Alagard",
            wordWrap: { width: scene.sys.game.config.width / 4 },
          }),

          space: {
            left: 15,
            right: 15,
            top: 0,
            bottom: 0,
          },
        }),

        content: scene.rexUI.add.scrollablePanel({
          anchor: {
            centerX: "center",
            centerY: "center",
          },

          background: scene.rexUI.add.roundRectangle(0, 0, 2, 2, 10, 0x9e8369),
          panel: {
            child: scene.add.text(0, 0, descriptionDialog, {
              align: "center",
              fontFamily: "Alagard",
              fontSize: "16px",
              color: "#000000",
              wordWrap: { width: scene.sys.game.config.width / 4 },
            }),
            mask: {
              padding: 1,
            },
            width: scene.sys.game.config.width / 5, // szerokość panelu
            height: 100, // wysokość panelu
          },

          slider: {
            track: {
              color: 0x8e8175,
              radius: 8,
              width: 16,
            },
            thumb: {
              color: 0x9e9e9e,
              radius: 11,
              width: 22,
            },
          },
          space: {
            left: 46,
            right: 20,
            top: 10,
            bottom: 5,
          },
        }),

        actions: [CreateLabel(scene, "Przyjmij"), CreateLabel(scene, "Anuluj")],

        space: {
          content: 0,
          titile: 20,
          action: 15,

          left: 20,
          right: 20,
          top: 40,
          bottom: 20,
        },

        align: {
          actions: "center", // 'center'|'left'|'right'
        },

        expand: {
          content: false, // Content is a pure text object
        },
      })
      .on(
        "button.click",
        function (button, groupName, index) {
          this.print.text += index + ": " + button.text + "\n";
        },
        this
      )
      .on("button.over", function (button, groupName, index) {
        button.getElement("background").setStrokeStyle(1, 0x21374b);
      })
      .on("button.out", function (button, groupName, index) {
        button.getElement("background").setStrokeStyle();
      })
      .setDepth(4);
  } else if (whatIsThis == "default") {
    console.log("jest to default");
    //dialog końcowy
    var dialog = scene.rexUI.add
      .dialog({
        background: scene.rexUI.add.roundRectangle(
          0,
          0,
          100,
          100,
          40, //krawędzie
          0xc9e8369
        ),

        content: scene.rexUI.add.scrollablePanel({
          anchor: {
            centerX: "center",
            centerY: "center",
          },

          background: scene.rexUI.add.roundRectangle(0, 0, 2, 2, 10, 0x9e8369),
          panel: {
            child: scene.add.text(0, 0, descriptionDialog, {
              align: "center",
              fontFamily: "Alagard",
              fontSize: "16px",
              color: "#000000", //#8b8589
              wordWrap: { width: scene.sys.game.config.width / 4 },
            }),
            mask: {
              padding: 1,
            },
            width: scene.sys.game.config.width / 5, // szerokość panelu
            height: 100, // wysokość panelu
          },
          slider: {
            track: {
              color: 0x8e8175,
              radius: 8,
              width: 16,
            },
            thumb: {
              color: 0x9e9e9e,
              radius: 11,
              width: 22,
            },
          },
          space: {
            left: 46,
            right: 20,
            top: 10,
            bottom: 5,
          },
        }),

        actions: [CreateLabel(scene, "Zamknij")],

        space: {
          content: 0,
          titile: 20,
          action: 15,

          left: 20,
          right: 20,
          top: 40,
          bottom: 20,
        },

        align: {
          actions: "center", // 'center'|'left'|'right'
        },

        expand: {
          content: false, // Content is a pure text object
        },
      })
      .on(
        "button.click",
        function (button, groupName, index) {
          this.print.text += index + ": " + button.text + "\n";
        },
        this
      )
      .on("button.over", function (button, groupName, index) {
        button.getElement("background").setStrokeStyle(1, 0x000000);
      })
      .on("button.out", function (button, groupName, index) {
        button.getElement("background").setStrokeStyle();
      })
      .setDepth(4);
  }

  return dialog;
};

var CreateLabel = function (scene, text) {
  return scene.rexUI.add.label({
    background: scene.rexUI.add.roundRectangle(0, 0, 0, 0, 20, 0xa2a2a2),

    text: scene.add.text(0, 0, text, {
      fontSize: "20px",
      color: "#000000",
      fontFamily: "Alagard",
    }),

    space: {
      left: 10,
      right: 10,
      top: 10,
      bottom: 10,
    },
  });
};
