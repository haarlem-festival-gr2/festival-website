function speakText() {
    let synth = window.speechSynthesis;
    let textToRead = document.getElementById("festivalText").textContent;
    let utterThis = new SpeechSynthesisUtterance(textToRead);

    utterThis.lang = "en-US";
    synth.speak(utterThis);
}