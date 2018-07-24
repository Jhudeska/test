/*
var name = prompt("What is your name");

console.log(name);
if (name == "null") {
    alert("Your name field is empty");
} else if (name) {
    alert("Hello" + name);
} else {
    alert("Hello guest");
}*/


function getName(){
    var nameElement = document.querySelector('.name');
    var name = nameElement.value;
    var newName = name.replace('Smith', 'Taulien');
    return newName;
}

function getFirstName(){
    var name = getName();

    var firstname = name.split(" ");
    console.log(firstname);

    return firstname[0];
}
//var currentName = getName();
//console.log(currentName);

var firstname = getFirstName();
console.log(firstname);
