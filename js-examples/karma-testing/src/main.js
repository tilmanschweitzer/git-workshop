var n = 100;
var logsElement = document.querySelector('#logs') || {};

function appendLog(msg) {
    logsElement.innerText += '\n' + msg;
}

for (var i = 0; i <= n; i++) {
    var fizzBuzzResult = fizz_buzz(i);
    appendLog(fizzBuzzResult);

}