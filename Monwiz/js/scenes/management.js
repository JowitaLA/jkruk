var users = {
    user1: {
      id: 1,
      name: "Anna",
      age: 25,
      email: "anna@example.com"
    },
    user2: {
      id: 2,
      name: "Bartek",
      age: 30,
      email: "bartek@example.com"
    },
    user3: {
      id: 3,
      name: "Celina",
      age: 22,
      email: "celina@example.com"
    }
  };
  
  var managementScene = {
    preload: function () {},
    extend: {},
    create: function () {  
        var newCellObject = function (scene, cell) {
            var bg = scene.add.graphics()
                .fillStyle(0x555555)
                .fillRect(2, 2, 58, 58);
            var txt = scene.add.text(5, 5, cell.index);
            var container = scene.add.container(0, 0, [bg, txt]);
            return container;
        }
    
        var onCellVisible = function (cell) {
            cell.setContainer(newCellObject(this, cell));
            //console.log('Cell ' + cell.index + ' visible');
        };
        var table = this.add.rexGridTable(400, 300, 250, 400, {
            cellHeight: 60,
            cellWidth: 60,
            cellsCount: 100,
            columns: 4,
            cellVisibleCallback: onCellVisible.bind(this),
        });
    
        // draw bound
        this.add.graphics()
            .lineStyle(3, 0xff0000)
            .strokeRectShape(table.getBounds());
    
        // drag table content
        var topRight = table.getTopRight();
        var bottomRight = table.getBottomRight();
        var thumb = this.add.image(0, 0, 'dot').setScale(4, 4);
        thumb.slider = this.plugins.get('rexsliderplugin').add(thumb, {
            endPoints: [{
                    x: topRight.x + 10,
                    y: topRight.y + 10
                },
                {
                    x: bottomRight.x + 10,
                    y: bottomRight.y - 10
                }
            ],
            valuechangeCallback: function (newValue) {
                table.setTableOYByPercentage(newValue).updateTable();
            }
        });
        this.add.graphics()
            .lineStyle(3, 0x55ff55, 1)
            .strokePoints(thumb.slider.endPoints);
      
        // drag table content
        table.setInteractive();
        table.on('pointermove', function (pointer) {
            if (!pointer.isDown) {
                return;
            }
            var dx = pointer.x - pointer.prevPosition.x;
            var dy = pointer.y - pointer.prevPosition.y;
            table.addTableOXY(dx, dy).updateTable();
    
            // reflect to slider
            thumb.slider.setValue(table.getTableOYPercentage());
        });
      
    },
    update: function () {},
  };
  
  // Tabela użytkowników
  