const Questions = [
    { 
        imageUrl: "assets/F-22.jpg",
        options: [
            { name: "F-22", iscorrect: "true" },
            { name: "F-16", iscorrect: "false" },
            { name: "F-18", iscorrect: "false" },
            { name: "Su-33", iscorrect: "false" },
        ]
    },{
        imageUrl: "assets/F-35.JPG",
        options: [
            { name: "F-2", iscorrect: "false" },
            { name: "F/A-XX", iscorrect: "false" },
            { name: "Rafaele", iscorrect: "false" },
            { name: "F-35", iscorrect: "true" },
        ]
    }

];

const elementImg = document.getElementById("img");
const answer = document.getElementById("answer");
const nextButton = document.getElementById("next");
const elementPoints = document.getElementById("score");
const Question_number = document.getElementById("question_number");
const Card_Quiz = document.getElementById("Quiz");
const Card_Result = document.getElementById("Result-Card");
const StartButton = document.getElementById("Start");
const Background = document.getElementById("Background");

let Correct_Questions_value = 0;
let Points = 0;
let CurrentQuestion = 0;


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
    Card_Quiz.style.display = "none";
    Card_Result.style.display = "block";
    const ScoreResult = document.getElementById("score_result");
    const result_correct = document.getElementById("result-correct-answer");
    const total = document.getElementById("result-total-question");
    total.innerText = Questions.length;
    result_correct.innerText = Correct_Questions_value;
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
    //  Renderizando o quiz e trocando o display do card
    renderQuestion();
    Card_Quiz.style.display = "block";
}