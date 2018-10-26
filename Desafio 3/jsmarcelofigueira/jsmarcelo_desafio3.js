const math = require('mathjs')
var desafio3 = function(){
    for (var i = 2; i <= 300; i++){
        var quadrado = Math.pow(i,2);
        var fatorial = math.factorial(quadrado);    // returns 120; 
        console.log(fatorial);
    }
}

desafio3();
