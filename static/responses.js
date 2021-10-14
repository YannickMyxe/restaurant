function getBotResponse(input) {
    // alles word omgevormd naar lowercase
    input = input.toLowerCase();

    if (input == "steen") {
        return "papier";
    } else if (input == "papier") {
        return "schaar";
    } else if (input == "schaar") {
        return "steen";
    }

    if(input == "help")
    {
        return "Hier vind je een lijst van alle commando's: \n*help\n*Hallo";
    }

    // Simple responses
    if (input == "hallo") {
        return "Hallo! Waarmee kan ik je helpen?";
    } else if (input == "dag") {
        return "Ik spreek je later!";
    } else if (input == "waar kan ik het menu vinden?") {
        return "Het menu is te vinden op: navigatie>home."
    } else if (input == "ik hou van restaurant Multicultura!") {
        return "Ik ook! Bedankt dat je zo van ons restaurant houd!"
    } else {
        return "Probeer iets anders te vragen!";
    }
}