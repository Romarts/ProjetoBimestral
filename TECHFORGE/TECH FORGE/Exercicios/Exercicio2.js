//Crie um array com dez numeros, calcule e mostre a quantiade de numeros negativos
//e a soma dos possitivos esse array

let numeros = [12,-10,25,42,-3,174,-1212,-17,0,1];
let qtdNumerosNegativos = 0, somaNumeroPositivos = 0;

for(let i=0;i<10;i++){
    if(numeros[i] < 0){
        qtdNumerosNegativos++;

    }else{
        somaNumeroPositivos+= + numeros[i];
    }

}

console.log("A quantidade de numeros negativos são: "+qtdNumerosNegativos);
console.log("A soma dos numeros positivos são: "+somaNumeroPositivos);