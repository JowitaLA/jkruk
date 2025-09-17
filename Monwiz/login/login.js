document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Zapobiegaj domyślnemu działaniu formularza

    var username = document.getElementById('loginUsername').value;
    var password = document.getElementById('loginPassword').value;

    // Wyślij żądanie do serwera w celu uwierzytelnienia
    authenticateUser(username, password);
});

document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Zapobiegaj domyślnemu działaniu formularza

    var username = document.getElementById('registerUsername').value;
    var password = document.getElementById('registerPassword').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    // Sprawdź, czy hasła są takie same
    if (password !== confirmPassword) {
        displayRegisterMessage("Hasla nie sa identyczne!");
        return;
    }

    // Wyślij żądanie do serwera w celu rejestracji
    registerUser(username, password);
});

function authenticateUser(username, password) {
    $.ajax({
        type: 'POST',
        url: 'login/authenticate.php',
        data: { username: username, password: password },
        success: function(response) {
            if(response === "Zalogowano pomyslnie!") {
                // Przekieruj użytkownika na stronę z grą po pomyślnym logowaniu
                window.location.href = "login/game.html";
            } else {
                displayMessage(response);
            }
        },
        error: function() {
            displayMessage("Wystąpił błąd podczas uwierzytelniania.");
        }
    });
}

function registerUser(username, password) {
    $.ajax({
        type: 'POST',
        url: 'login/register.php', // Plik PHP do obsługi rejestracji
        data: { username: username, password: password },
        success: function(response) {
            displayRegisterMessage(response);
        },
        error: function() {
            displayRegisterMessage("Wystąpił błąd podczas rejestracji.");
        }
    });
}

function displayRegisterMessage(message) {
    var registerMessage = document.getElementById('registerMessage');
    registerMessage.textContent = message;
}

function displayMessage(message) {
    var loginMessage = document.getElementById('loginMessage');
    loginMessage.textContent = message;
}