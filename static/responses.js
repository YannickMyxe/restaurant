function getBotResponse(input) {
    if (input == "steen") {
        return "papier";
    } else if (input == "papier") {
        return "schaar";
    } else if (input == "schaar") {
        return "steen";
    }

    // Simple responses
    if (input == "Hallo") {
        return "Hallo daar!";
    } else if (input == "Daag") {
        return "Ik spreek je later!";
    } else if (input == "Waar kan ik het menu vinden?") {
        return "Het menu is te vinden op: navigatie>home."
    } else {
        return "Probeer iets anders te vragen!";
    }
}