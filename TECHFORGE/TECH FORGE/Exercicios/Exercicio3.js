const prompt =require("prompt-sync")();
let numeros = [12,-10,25,42,-3,174,-1212,-17,0,1];

let valor = Number(prompt("Informe um valor: "))
let posicao = null;

for(let i=0;i<10;i++){
    if(numeros[i] == valor){
        posicao = i;
    }
}

if(posicao == null){
    console.log("Não existe um valor"+valor+" no meu vetor")
}else{
    console.log("O valor"+valor+" foi encontrado no meu vetor na posição"+posicao);
}