const prompt = request("prompt-sync")();

let classe = [],qtdAlunos;
let aluno = {
    nome: undefined,
    idade: undefined,
    notas:[]
}

do{
    qtdAlunos = prompt("Informe quantos alunos tem na sala: ");
    if(qtdAlunos <1 || qtdAlunos > 1000){
        console.log("Informe o uma quantidade entre 1 e 1000");
    }

}while(qtdAlunos <1 || qtdAlunos > 1000);

for(let index = 0; index < qtdAlunos; index++){

}