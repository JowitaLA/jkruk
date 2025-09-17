// // // Sprawdzenie sesji gracza
$.ajax({
    url: '../management/management.php', // Ścieżka do pliku PHP
    method: 'SEARCH',
    success: function(response) {
        var data = JSON.parse(response);
        var id_player = data.id; // Pobieramy ID gracza
        console.log("ID gracza:", id_player);


        if (id_player == null) {
            // Przekierowanie na index.html gdy sesja gracza nie została odnaleziona
            window.location.href = '../login/game.html';
        }
    },
    error: function(error) {
        console.log('Error fetching data:', error);
    }
});


let management_users = [];
let management_quests = [];

// Pobieranie danych o użytkownikach
function loadUsers() {
  $.ajax({
    url: "../management/management.php",
    method: "GET_USERS",
    success: function (response) {
      var data = JSON.parse(response);
      management_users = data;
      renderTable();
      console.log("Ładowanie wszystkich graczy...\n", management_users);

      if (data.status === "error") {
        console.log("management_users jest pusty");
        management_users = [];
        renderQuest();
      }
    },
    error: function (error) {
      console.log("Error fetching users:", error);
    },
  });
}
// Pobieranie danych o questach
function loadQuests() {
  $.ajax({
    url: "../management/management.php",
    method: "GET_QUESTS",
    success: function (response) {
      var data = JSON.parse(response);
      management_quests = data;
      renderQuestTable();
      console.log("Ładowanie wszystkich questów...\n", management_quests);

      if (data.status === "error") {
        console.log("management_quests jest pusty");
        management_quests = [];
        renderQuestTable();
      }
    },
    error: function (error) {
      console.log("Error fetching quests:", error);
    },
  });
}

function showUsersTable() {
  document.getElementById("usersManagement").style.display = "block";
  document.getElementById("questsManagement").style.display = "none";
  document.getElementById("editForm").style.display = "none";
}

function showQuestsTable() {
  document.getElementById("usersManagement").style.display = "none";
  document.getElementById("questsManagement").style.display = "block";
  document.getElementById("editForm").style.display = "none";

  renderQuestTable();
}

loadUsers();
loadQuests();
/* Zarządzanie graczami */
{
  function renderTable(users) {
    const tableBody = document
      .getElementById("userTable")
      .getElementsByTagName("tbody")[0];
    tableBody.innerHTML = "";

    const usersToRender = users ? users : management_users;

    for (const id in usersToRender) {
      if (usersToRender.hasOwnProperty(id)) {
        const user = usersToRender[id];
        const row = tableBody.insertRow();

        const cellNickname = row.insertCell();
        const cellPassword = row.insertCell();
        const cellExp = row.insertCell();
        const cellHp = row.insertCell();
        const cellDmg = row.insertCell();
        const cellX = row.insertCell();
        const cellY = row.insertCell();
        const cellRole = row.insertCell();
        const cellActions = row.insertCell();

        cellNickname.innerHTML = user.nickname;
        cellPassword.innerHTML = user.password;
        cellExp.innerHTML = user.exp;
        cellHp.innerHTML = user.hp;
        cellDmg.innerHTML = user.dmg;
        cellX.innerHTML = user.x;
        cellY.innerHTML = user.y;
        cellRole.innerHTML = user.role;

        // Create action buttons
        const editButton = document.createElement("button");
        editButton.innerText = "Edytuj";
        editButton.onclick = () => showEditForm(user);

        const deleteButton = document.createElement("button");
        deleteButton.innerText = "Usuń";
        deleteButton.onclick = () => deleteUser(user.id);

        cellActions.appendChild(editButton);
        cellActions.appendChild(deleteButton);
      }
    }
  }

  function showEditForm(user) {
    const formDiv = document.getElementById("editForm");
    formDiv.innerHTML = `
            <label for="editNickname">Nickname:</label>
            <input type="text" id="editNickname" value="${user.nickname}">
            <label for="editPassword">Hasło:</label>
            <input type="text" id="editPassword" value="${user.password}">
            <label for="editExp">Exp:</label>
            <input type="number" id="editExp" value="${user.exp}">
            <label for="editHp">HP:</label>
            <input type="number" id="editHp" value="${user.hp}">
            <label for="editDmg">DMG:</label>
            <input type="number" id="editDmg" value="${user.dmg}">
            <label for="editX">X:</label>
            <input type="number" id="editX" value="${user.x}">
            <label for="editY">Y:</label>
            <input type="number" id="editY" value="${user.y}">
            <label for="editRole">Rola:</label>
            <input type="text" id="editRole" value="${user.role}">
            <button onclick="updateUser(${user.id})">Edytuj</button>
            <button onclick="cancelEdit()">Anuluj</button>
        `;
    formDiv.style.display = "block";
  }

  function cancelEdit() {
    const formDiv = document.getElementById("editForm");
    formDiv.style.display = "none";
  }

  function updateUser(id) {
    const editNickname = document.getElementById("editNickname").value;
    const editPassword = document.getElementById("editPassword").value;
    const editExp = document.getElementById("editExp").value;
    const editHp = document.getElementById("editHp").value;
    const editDmg = document.getElementById("editDmg").value;
    const editX = document.getElementById("editX").value;
    const editY = document.getElementById("editY").value;
    const editRole = document.getElementById("editRole").value;

    $.ajax({
      url: "../management/management.php",
      method: "POST",
      data: {
        action: "UPDATE_USER",
        idPlayer: id,
        newNickname: editNickname,
        newPassword: editPassword,
        newExp: editExp,
        newHp: editHp,
        newDmg: editDmg,
        newX: editX,
        newY: editY,
        newRole: editRole,
      },
      success: function (response) {
        console.log("Data updated successfully:", response);
        loadUsers();
        loadQuests();
      },
      error: function (error) {
        console.log("Error updating data:", error);
      },
    });

    const formDiv = document.getElementById("editForm");
    formDiv.style.display = "none";
  }

  function deleteUser(id) {
    $.ajax({
      url: "../management/management.php",
      method: "POST",
      data: {
        action: "DELETE_USER",
        idPlayer: id,
      },
      success: function (response) {
        console.log("Data updated successfully:", response);
        loadUsers();
        loadQuests();
      },
      error: function (error) {
        console.log("Error updating data:", error);
      },
    });
  }

  function searchUser() {
    const searchTerm = document
      .getElementById("userSearchInput")
      .value.toLowerCase();
    const filteredUsers = {};

    // Wyszukiwanie użytkowników przez nickname lub role
    for (const id in management_users) {
      if (management_users.hasOwnProperty(id)) {
        const user = management_users[id];
        if (
          user.nickname.toLowerCase().includes(searchTerm) ||
          user.role.toLowerCase().includes(searchTerm)
        ) {
          filteredUsers[id] = user;
        }
      }
    }

    renderTable(filteredUsers);
  }

  function showAddUserForm() {
    const formDiv = document.getElementById("editForm");
    formDiv.innerHTML = `
        <label for="addNickname">Nickname:</label>
        <input type="text" id="addNickname" placeholder="Wpisz nickname">
        <label for="addPassword">Password:</label>
        <input type="text" id="addPassword" placeholder="Wpisz hasło">
        <label for="addExp">Exp:</label>
        <input type="number" id="addExp" placeholder="Wpisz wartość EXP gracza">
        <label for="addHp">HP:</label>
        <input type="number" id="addHp" placeholder="Wpisz wartość HP gracza">
        <label for="addDmg">DMG:</label>
        <input type="number" id="addDmg" placeholder="Wpisz wartość DMG gracza">
        <label for="addX">X:</label>
        <input type="number" id="addX" placeholder="Wpisz położenie X gracza">
        <label for="addY">Y:</label>
        <input type="number" id="addY" placeholder="Wpisz położenie Y gracza">
        <label for="addRole">Rola:</label>
        <input type="text" id="addRole" placeholder="Wpisz rolę użytkownika">
        <button onclick="addUser()">Dodaj</button>
        <button onclick="cancelEdit()">Anuluj</button>
    `;
    formDiv.style.display = "block";
  }

  function addUser() {
    const addNickname = document.getElementById("addNickname").value;
    const addPassword = document.getElementById("addPassword").value;
    const addExp = document.getElementById("addExp").value;
    const addHp = document.getElementById("addHp").value;
    const addDmg = document.getElementById("addDmg").value;
    const addX = document.getElementById("addX").value;
    const addY = document.getElementById("addY").value;
    const addRole = document.getElementById("addRole").value;

    $.ajax({
      url: "../management/management.php",
      method: "POST",
      data: {
        action: "ADD_USER",
        newNickname: addNickname,
        newPassword: addPassword,
        newExp: addExp,
        newHp: addHp,
        newDmg: addDmg,
        newX: addX,
        newY: addY,
        newRole: addRole,
      },
      success: function (response) {
        console.log("Data updated successfully:", response);
        loadUsers();
        loadQuests();
      },
      error: function (error) {
        console.log("Error updating data:", error);
      },
    });

    loadUsers();
    renderTable();
    const formDiv = document.getElementById("editForm");
    formDiv.style.display = "none";
  }
}

/* Zarządzanie zadaniami */
{
  function renderQuestTable(quests) {
    const tableBody = document
      .getElementById("questTable")
      .getElementsByTagName("tbody")[0];
    tableBody.innerHTML = "";

    const questsToRender = quests ? quests : management_quests;

    for (const questId in questsToRender) {
      if (questsToRender.hasOwnProperty(questId)) {
        const quest = questsToRender[questId];
        const row = tableBody.insertRow();

        const cellNPC = row.insertCell();
        const cellTitle = row.insertCell();
        const cellDialog = row.insertCell();
        const cellLvl = row.insertCell();
        const cellTargetName = row.insertCell();
        const cellTarget = row.insertCell();
        const cellRewardEXP = row.insertCell();
        const cellRewardHP = row.insertCell();
        const cellRewardDMG = row.insertCell();
        const cellActions = row.insertCell();

        cellNPC.innerHTML = quest.id_npc;
        cellTitle.innerHTML = quest.title;
        cellDialog.innerHTML = quest.dialog;
        cellLvl.innerHTML = quest.min_lvl;
        cellTargetName.innerHTML = quest.name_target;
        cellTarget.innerHTML = quest.target;
        cellRewardEXP.innerHTML = quest.prize_exp;
        cellRewardHP.innerHTML = quest.prize_hp;
        cellRewardDMG.innerHTML = quest.prize_dmg;

        const editButton = document.createElement("button");
        editButton.innerText = "Edytuj";
        editButton.onclick = () => showEditQuestForm(quest);

        const deleteButton = document.createElement("button");
        deleteButton.innerText = "Usuń";
        deleteButton.onclick = () => deleteQuest(quest.id);

        cellActions.appendChild(editButton);
        cellActions.appendChild(deleteButton);
      }
    }
  }

  function showEditQuestForm(quest) {
    const formDiv = document.getElementById("editForm");
    formDiv.innerHTML = `
        <label for="editNPC">NPC:</label>
        <input type="text" id="editNPC" value="${quest.id_npc}">
    
        <label for="editTitle">Tytuł:</label>
        <input type="text" id="editTitle" value="${quest.title}">

        <label for="editDialog">Dialog:</label>
        <textarea id="editDialog">${quest.dialog}</textarea>

        <label for="editLvl">LVL:</label>
        <input type="number" id="editLvl" value="${quest.min_lvl}">

        <label for="editNameTarget">Nazwa Celu:</label>
        <input type="text" id="editNameTarget" value="${quest.name_target}">

        <label for="editTarget">Cel:</label>
        <input type="number" id="editTarget" value="${quest.target}">
        
        <label for="editPrizeEXP">Nagroda EXP:</label>
        <input type="number" id="editPrizeEXP" value="${quest.prize_exp}">

        <label for="editPrizeHP">Nagroda HP:</label>
        <input type="number" id="editPrizeHP" value="${quest.prize_hp}">

        <label for="editPrizeDMG">Nagroda DMG:</label>
        <input type="number" id="editPrizeDMG" value="${quest.prize_dmg}">

        <button onclick="updateQuest(${quest.id})">Edytuj</button>
        <button onclick="cancelEdit()">Anuluj</button>
    `;
    formDiv.style.display = "block";
  }

  function updateQuest(id) {
    const editNPC = document.getElementById("editNPC").value;
    const editTitle = document.getElementById("editTitle").value;
    const editDialog = document.getElementById("editDialog").value;
    const editLvl = document.getElementById("editLvl").value;
    const editNameTarget = document.getElementById("editNameTarget").value;
    const editTarget = document.getElementById("editTarget").value;
    const editPrizeEXP = document.getElementById("editPrizeEXP").value;
    const editPrizeHP = document.getElementById("editPrizeHP").value;
    const editPrizeDMG = document.getElementById("editPrizeDMG").value;
    $.ajax({
      url: "../management/management.php",
      method: "POST",
      data: {
        action: "UPDATE_QUEST",
        idQuest: id,
        newNPC: editNPC,
        newTitle: editTitle,
        newDialog: editDialog,
        newLvl: editLvl,
        newNameTarget: editNameTarget,
        newTarget: editTarget,
        newPrizeEXP: editPrizeEXP,
        newPrizeHP: editPrizeHP,
        newPrizeDMG: editPrizeDMG,
      },
      success: function (response) {
        console.log("Data updated successfully:", response);
        loadUsers();
        loadQuests();
      },
      error: function (error) {
        console.log("Error updating data:", error);
      },
    });

    updateQuest();
    renderQuestTable();
    const formDiv = document.getElementById("editForm");
    formDiv.style.display = "none";
  }

  function deleteQuest(id) {
    $.ajax({
      url: "../management/management.php",
      method: "POST",
      data: {
        action: "DELETE_QUEST",
        idQuest: id,
      },
      success: function (response) {
        console.log("Data updated successfully:", response);
        loadUsers();
        loadQuests();
      },
      error: function (error) {
        console.log("Error updating data:", error);
      },
    });
  }

  function searchQuest() {
    const searchTerm = document
      .getElementById("questSearchInput")
      .value.toLowerCase();
    const filteredQuests = {};

    for (const questId in management_quests) {
      if (management_quests.hasOwnProperty(questId)) {
        const quest = management_quests[questId];

        // Wyszukiwanie po nazwie NPC, Tytule bądź nazwie celu
        if (
          quest.title.toLowerCase().includes(searchTerm) ||
          quest.id_npc.toLowerCase().includes(searchTerm) ||
          quest.name_target.toLowerCase().includes(searchTerm)
        ) {
          filteredQuests[questId] = quest;
        }
      }
    }

    renderQuestTable(filteredQuests);
  }

  function showAddQuestForm() {
    const formDiv = document.getElementById("editForm");
    formDiv.innerHTML = `
        <label for="addNPC">NPC:</label>
        <input type="text" id="addNPC" placeholder="Wpisz nazwę NPC">

        <label for="addTitle">Tytuł:</label>
        <input type="text" id="addTitle" placeholder="Wpisz Tytuł Zadania">

        <label for="addDialog">Dialog:</label>
        <textarea id="addDialog" placeholder="Wpisz dialog NPC"></textarea>

        <label for="addLvl">LVL:</label>
        <input type="number" id="addLvl" placeholder="Wpisz minimalny level">

        <label for="addNameTarget">Nazwa Celu:</label>
        <input type="text" id="addNameTarget" placeholder="Wpisz tu nazwę celu">

        <label for="addTarget">Cel:</label>
        <input type="number" id="addTarget" placeholder="Wpisz tu ilość celów">
    
        <label for="addPrizeEXP">Nagroda EXP:</label>
        <input type="number" id="addPrizeEXP" placeholder="Wpisz tu nagrodę w postaci EXP">

        <label for="addPrizeHP">Nagroda HP:</label>
        <input type="number" id="addPrizeHP" placeholder="Wpisz tu nagrodę w postaci HP">

        <label for="addPrizeDMG">Nagroda DMG:</label>
        <input type="number" id="addPrizeDMG" placeholder="Wpisz tu nagrodę w postaci DMG">

        <button onclick="addQuest()">Dodaj</button>
    `;
    formDiv.style.display = "block";
  }

  function addQuest() {
    const addNPC = document.getElementById("addNPC").value;
    const addTitle = document.getElementById("addTitle").value;
    const addDialog = document.getElementById("addDialog").value;
    const addLvl = document.getElementById("addLvl").value;
    const addNameTarget = document.getElementById("addNameTarget").value;
    const addTarget = document.getElementById("addTarget").value;
    const addPrizeEXP = document.getElementById("addPrizeEXP").value;
    const addPrizeHP = document.getElementById("addPrizeHP").value;
    const addPrizeDMG = document.getElementById("addPrizeDMG").value;

    $.ajax({
      url: "../management/management.php",
      method: "POST",
      data: {
        action: "ADD_QUEST",
        newNPC: addNPC,
        newTitle: addTitle,
        newDialog: addDialog,
        newLvl: addLvl,
        newNameTarget: addNameTarget,
        newTarget: addTarget,
        newPrizeEXP: addPrizeEXP,
        newPrizeHP: addPrizeHP,
        newPrizeDMG: addPrizeDMG,
      },
      success: function (response) {
        console.log("Data updated successfully:", response);
        loadUsers();
        loadQuests();
      },
      error: function (error) {
        console.log("Error updating data:", error);
      },
    });

    const formDiv = document.getElementById("editForm");
    formDiv.style.display = "none";
  }
}
