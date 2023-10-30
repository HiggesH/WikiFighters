/* criando objeto das questoes 
parametros: 
img url: string
options: array[objeto []name: string, iscorrect: string true or false]]*/
const Questions = [
    { 
        imageUrl: "assets/F-22.jpg",
        options: [
            { name: "F-22", iscorrect: "true" },
            { name: "F-16", iscorrect: "false" },
            { name: "F-18", iscorrect: "false" },
            { name: "F-26", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/F-35.JPG",
        options: [
            { name: "F-35", iscorrect: "true" },
            { name: "F-22", iscorrect: "false" },
            { name: "F-2", iscorrect: "false" },
            { name: "F-15", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/F-16.JPG",
        options: [
            { name: "F-18", iscorrect: "false" },
            { name: "F-15", iscorrect: "false" },
            { name: "F-117", iscorrect: "false" },
            { name: "F-16", iscorrect: "true" },
        ]
    },{
        imageUrl: "assets/F-117.JPG",
        options: [
            { name: "F-117", iscorrect: "true" },
            { name: "F-22", iscorrect: "false" },
            { name: "F-A-XX", iscorrect: "false" },
            { name: "F-35", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/F-15.JPG",
        options: [
            { name: "F-117", iscorrect: "false" },
            { name: "F-15", iscorrect: "true" },
            { name: "F-2", iscorrect: "false" },
            { name: "F-18", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/A-10.png",
        options: [
            { name: "YF-23", iscorrect: "false" },
            { name: "Mirage", iscorrect: "false" },
            { name: "Gripen", iscorrect: "false" },
            { name: "A-10", iscorrect: "true" },
        ]
    },{
        imageUrl: "assets/YF-23.JPG",
        options: [
            { name: "F/A-XX", iscorrect: "false" },
            { name: "Su-57", iscorrect: "false" },
            { name: "YF-23", iscorrect: "true" },
            { name: "Su-33", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/Su-57.JPG",
        options: [
            { name: "Su-47", iscorrect: "false" },
            { name: "Su-57", iscorrect: "true" },
            { name: "YF-23", iscorrect: "false" },
            { name: "F/A-XX", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/Su-33.JPG",
        options: [
            { name: "Rafaele F4", iscorrect: "false" },
            { name: "Su-57", iscorrect: "false" },
            { name: "Su-47", iscorrect: "false" },
            { name: "Su-33", iscorrect: "true" },
        ]
    },{
        imageUrl: "assets/Gripen.JPG",
        options: [
            { name: "Gripen", iscorrect: "false" },
            { name: "Mirage", iscorrect: "false" },
            { name: "Rafaele F4", iscorrect: "false" },
            { name: "Su-33", iscorrect: "true" },
        ]
    },{
        imageUrl: "assets/Mirage.JPG",
        options: [
            { name: "Su-33", iscorrect: "false" },
            { name: "Rafaele F4", iscorrect: "false" },
            { name: "Mirage", iscorrect: "true" },
            { name: "Gripen", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/Rafaele.png",
        options: [
            { name: "Rafaele F4", iscorrect: "true" },
            { name: "Su-47", iscorrect: "false" },
            { name: "Mirage", iscorrect: "false" },
            { name: "Gripen", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/F-2.png",
        options: [
            { name: "F-16", iscorrect: "false" },
            { name: "F-2", iscorrect: "true" },
            { name: "F-15", iscorrect: "false" },
            { name: "A-10", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/Su-47.png",
        options: [
            { name: "F-16", iscorrect: "false" },
            { name: "F-35", iscorrect: "false" },
            { name: "F-22", iscorrect: "false" },
            { name: "Su-47", iscorrect: "true" },
        ]
    },{
        imageUrl: "assets/FA-XX.JPEG",
        options: [
            { name: "F-16", iscorrect: "false" },
            { name: "F-35", iscorrect: "false" },
            { name: "F-22", iscorrect: "false" },
            { name: "F/A-XX", iscorrect: "true" },
        ]
    }
];

/*selecionando os elementos html para interacao
*/ 
const elementImg = document.getElementById("img");
const answer = document.getElementById("answer");
const nextButton = document.getElementById("next");
const elementPoints = document.getElementById("score");
const Question_number = document.getElementById("question_number");
const Card_Quiz = document.getElementById("Quiz");
const Card_Result = document.getElementById("Result-Card");
const StartButton = document.getElementById("Start");
const Background = document.getElementById("Background");

/*criando variaveis que seu valor podem alterar
current question: armazena o index do array onde podemos utilizar no 
objeto para pegar a questao 
*/ 
let Correct_Questions_value = 0;
let Points = 0;
let CurrentQuestion = 0;

/*function start: o botao iniciar esta existindo mas nao aparecendo
total.innerText: pegando o elemento total e add o texto "quantidade de questoes"
*/ 
//StarButton
function StartQuiz() {
    StartButton.style.display = "none";
    const Total = document.getElementById("total");
    total.innerText = Questions.length;
     // Representando a questão pelo numero + 1 para ser iniciado como 1 e não 0 do array
     Question_number.innerText = CurrentQuestion + 1;

    renderQuestion();
    Card_Quiz.style.display = "block";

   
}


// Renderiza a questao pelo id pegando seu url e as opcoes
function renderQuestion(QuestionId = CurrentQuestion) {
  
      // Altera o url da imagem
      elementImg.src = Questions[QuestionId].imageUrl;


    

    // Percorre as questoes pelo index do array pois o array se inicia em 0 
    Questions[QuestionId].options.forEach(Question => {
        const list = document.createElement("li");
        const button = document.createElement("button");

        // Renderizando imagem de fundo
        Background.style.backgroundImage = `url(${Questions[QuestionId].imageUrl})`;
        
        
        // Criando os botoes
        button.innerText = Question.name;
        button.classList.add("question");
        answer.appendChild(list);
        list.appendChild(button);


        if(Question.iscorrect) {
            button.dataset.correct = Question.iscorrect;
        }
     
 

        // Adiciona o click no botão 
        button.addEventListener("click", selectAwnser);
    })
    
}

// Verificando qual botao foi clicado
function selectAwnser(event) {
    // Selecionando o botao
    const selectedButton = event.target;
    // Verificando se o botao clicado esta correto
    const correct = selectedButton.dataset.correct;
    
    

    // // Se correto adiciona a classe correto se nao a incorreta
    if(correct === "true") {
        selectedButton.classList.add("correct");
        Points+= 100;
        Correct_Questions_value += 1;

        // Altera o valor da variavel de pontos
        elementPoints.innerText = Points;
    } else {
        selectedButton.classList.add("incorrect");

        
    }
    const array = document.querySelectorAll(".question");
    // Percorrendo o array de botoes e adicionando a classe correta se ele ao botão que esta certo e desabilitando os outros botoes	
    array.forEach(button => {
        if(button.dataset.correct == "true") {
            button.classList.add("correct");
        }
        button.disabled = true;
    })
    nextButton.style.display = "block";

}


function NextQuestion() {
    // Inclementando 1 na variavel
    CurrentQuestion++;

    // Aparecendo o botão
    nextButton.style.display = "block";


    // Se a questão é menor que o array de questões renderiza a nova
    if(CurrentQuestion < Questions.length) {
        answer.innerHTML = "";
        renderQuestion(); 
        nextButton.style.display = "none";
        // Representando a questão pelo numero + 1 para ser iniciado como 1 e não 0 do array
        Question_number.innerText = CurrentQuestion + 1;

    }
    else{
        // Se a questão for igual ao array de questões renderiza a tela de resultado
        renderResult();
    }
}


function renderResult() {
    // Esconde o card quiz
    Card_Quiz.style.display = "none";
    // Exibe o card resultado
    Card_Result.style.display = "block";

    //seleciona os elemntos html pelo seus ids
    const ScoreResult = document.getElementById("score_result");
    const result_correct = document.getElementById("result-correct-answer");
    const total = document.getElementById("result-total-question");

/*adicionado o texto dos elementos baseando nos resultados
*/
    // Exibe o total de questões
    total.innerText = Questions.length;

    // Exibe o número de respostas corretas
    result_correct.innerText = Correct_Questions_value;

    // Exibe a pontuação total do jogador
    ScoreResult.innerText = Points;
  }

function RestartQuiz(){
    // Resetando valores
    Correct_Questions_value = 0;
    Points = 0;
    CurrentQuestion = 0;
    
    // trocando os displays
    Card_Result.style.display = "none";
    nextButton.style.display = "none";
  

    // Resetando area onde fica as respostas
    answer.innerHTML = "";

    // Iclementando a pontuação zerada
    elementPoints.innerText = Points;

    // Representando a questão pelo numero + 1 para ser iniciado como 1 e não 0 do array
     Question_number.innerText = CurrentQuestion + 1;
   
    // Renderizando o quiz e trocando o display do card
    renderQuestion();
    Card_Quiz.style.display = "block";
}
