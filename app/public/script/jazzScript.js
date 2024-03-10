function speakText() {
    let synth = window.speechSynthesis;
    let textToRead = document.getElementById("festivalText").textContent;
    let utterThis = new SpeechSynthesisUtterance(textToRead);

    utterThis.lang = "en-US";
    synth.speak(utterThis);
}

function addTicketToProgram(buttonElement) {
    if (buttonElement.disabled) {
        return; // Exit if the button is disabled
    }

    const activeText = buttonElement.getAttribute('data-active-text');
    const activeClass = buttonElement.getAttribute('data-active-class');
    const defaultClass = buttonElement.getAttribute('data-default-class');

    buttonElement.textContent = activeText;
    buttonElement.classList.remove(defaultClass);
    buttonElement.classList.add(activeClass);

    // Add logic here to actually add a ticket or pass to the user's program

    setTimeout(() => {
        buttonElement.textContent = buttonElement.getAttribute('data-default-text');
        buttonElement.classList.remove(activeClass);
        buttonElement.classList.add(defaultClass);
    }, 1000);
}