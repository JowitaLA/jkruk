var logoutScene = {
  extend: {
    logoutUser(){
      var self = this;

      $.ajax({
        url: "../js/database.php", // Ścieżka do pliku PHP
        method: "POST",
        data: {
          action: "LOGOUT",
        },
        success: function (response) {
          console.log("Data updated successfully:", response);
          // Zniszcz grę i przekieruj do strony logowania
          self.game.destroy();
          window.location.href = '../index.html';  // Przykładowa ścieżka do strony logowania
        },
        error: function (error) {
          console.log("Error updating data:", error);
        },
      });
    }
  },
  create: function () {
    // Wylogowanie użytkownika i przekierowanie do strony logowania
    this.logoutUser();
  },
};
