

$(document).ready(function(){
    document.oncontextmenu = function(){return false;}

$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});


});

console.log('%cDetente esta es zona restringida!', 'color: red;font-size:2.5rem;font-weight:bold;');
console.log('%cEsta es una característica del navegador destinada a los desarrolladores. Si alguien le dijo que copie y pegue algo aquí para habilitar la función o "piratear" la cuenta de alguien, es una estafa y si continua se informara a la policia.', 'font-size:1.25rem;line-height:1.1;margin-top:.5em');
