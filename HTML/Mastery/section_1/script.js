// You can code JavaScript here

function speak() {
    var voice = new SpeechSynthesisUtterance();
    voice.text = "This is a picture with allot of colors";
    speechSynthesis.speak(voice);
}