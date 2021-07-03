class Question {
    constructor(text, choices, answer) {
      this.text = text;
      this.choices = choices;
      this.answer = answer;
    }
    isCorrectAnswer(choice) {
      return this.answer === choice;
    }
  }
  let questions = [
    new Question("Que veut dire HTML", ["Hyper Text Markup Language", "Hyperlinks and Text Markup", "Home Tool Markup Language", "Je ne sais pas"],"Hyper Text Markup Language"),
    new Question("Qui fait les standards du Web?",["The Worl Wide Web Consortium","Microsoft","Google","Mozilla"],"The Worl Wide Web Consortium"),
    new Question("Choisissez le bon élément HTML pour le plus grand titre:",["<heading>","<h6>","<head>","<h1>"],"<h1>"),
    new Question("Quel est l'élément HTML correct pour insérer un saut de ligne?",["<lb>","<break","<br>"],"<br>"),
    new Question("Quel est le code HTML correct pour ajouter une couleur d'arrière-plan?",["<body style=\"background-color:yellow;\">","<background>yellow</background>","<body bg=\"yellow\">","Je ne sais pas"],"<body bg=\"yellow\">"),
    new Question("Choisissez l'élément HTML correct pour définir le texte important",["<important>","<strong>","<i>","<b>"],"<strong>"),
    new Question("Choisissez l'élément HTML correct pour définir le texte mis en valeur",["<em>","<i>","<italic","Je ne sais pas"],"<em>"),
    new Question("Quel est le code HTML correct pour créer un lien hypertexte?",["<a href=\"url\">name</a>","<a url=\"url\"</a>","<a>url</a>","<a name=\"url\">name</a>"],"<a href=\"url\">name</a>"),
    new Question("Quel caractère est utilisé pour indiquer une balise de fin?",["<","*","^","/"],"/"),
    new Question("Comment ouvrir un lien dans un nouvel onglet / fenêtre de navigateur?",["<a href=\"url\" target=\"_blank\">","<a href=\"url\" target=\"new\"","<a href=\"url\" new", "Je ne sais pas"],"<a href=\"url\" target=\"_blank\">")
];
  
  
  
  class Quiz {
    constructor(questions) {
      this.score = 0;
      this.questions = questions;
      this.currentQuestionIndex = 0;
    }
    getCurrentQuestion() {
      return this.questions[this.currentQuestionIndex];
    }
    guess(answer) {
      if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
        this.score++;
      }
      this.currentQuestionIndex++;
    }
    hasEnded() {
      return this.currentQuestionIndex >= this.questions.length;
    }
  }
  
  // Regroup all  functions relative to the App Display
  const display = {
    elementShown: function(id, text) {
      let element = document.getElementById(id);
      element.textContent = text;
    },
    elementShownEnd: function(id, text) {
      let element = document.getElementById(id);
      element.innerHTML = text;
    },
    endQuiz: function() {
      if (quiz.score/quiz.questions.length<0.5){res="Vous avez en dessous de la moyenne, vous n'obtenez donc pas vôtre doctorat en Html";}
      if (0.5<=quiz.score/quiz.questions.length<0.6){res="Vous avez entre 10 et 12, vous obtenez tout juste vôtre doctorat en Html";}
      if (0.6<=quiz.score/quiz.questions.length<0.7){res="Vous avez entre 12 et 14, vous obtenez donc vôtre doctorat en Html avec mention Assez Bien";}
      if (0.7<=quiz.score/quiz.questions.length<0.8){res="Vous avez entre 14 et 16, vous obtenez donc vôtre doctorat en Html avec mention Bien";}
      else{res="Vous avez entre 16 et 20, vous obtenez donc vôtre doctorat en Html avec mention Très Bien";}
      
      endQuizHTML = `
        <h1>Quiz terminé !</h1>
        <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>
        <h3> ${res}`;
      this.elementShownEnd("quiz", endQuizHTML);
    },
    question: function() {
      this.elementShown("question", quiz.getCurrentQuestion().text);
    },
    choices: function() {
      let choices = quiz.getCurrentQuestion().choices;
  
      guessHandler = (id, guess) => {
        document.getElementById(id).onclick = function() {
          quiz.guess(guess);
          quizApp();
        }
      }
      // display choices and handle guess
      for(let i = 0; i < choices.length; i++) {
        this.elementShown("choice" + i, choices[i]);
        guessHandler("guess" + i, choices[i]);
      }
    },
    progress: function() {
      let currentQuestionNumber = quiz.currentQuestionIndex + 1;
      this.elementShown("progress", "Question " + currentQuestionNumber + " sur " + quiz.questions.length);
    },
  };
  
  // Game logic
  quizApp = () => {
    if (quiz.hasEnded()) {
      display.endQuiz();
    } else {
      display.question();
      display.choices();
      display.progress();
    } 
  }
  // Create Quiz
  let quiz = new Quiz(questions);
  quizApp();
  
  console.log(quiz);
  
  