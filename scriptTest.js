const questions = [
    { question: "Aprendizaje Supervisado ¿Cuál es un ejemplo de aplicación del aprendizaje supervisado?", options: ["Clustering de clientes", "Juegos de estrategia como Go", "Reconocimiento de voz", "Exploración de datos sin etiquetar"], answer: "Reconocimiento de voz" },
    { question: "Redes Neuronales Artificiales ¿Qué tipo de red neuronal se utiliza comúnmente para el reconocimiento de imágenes?", options: ["Redes neuronales recurrentes (RNN)", "Máquinas de vectores de soporte (SVM)", "Redes neuronales convolucionales (CNN)", "Redes neuronales de Boltzmann"], answer: "Redes neuronales convolucionales (CNN)" },
    { question: "Aprendizaje No Supervisado ¿Qué técnica es un ejemplo de aprendizaje no supervisado?", options: ["Clustering", "Clasificación de spam", "Aprendizaje reforzado en juegos", "Reconocimiento de patrones en imágenes"], answer: "Clustering" },
    { question: "Aprendizaje Reforzado ¿En qué se centra principalmente el aprendizaje reforzado?", options: ["Aprendizaje con datos etiquetados", "Aprendizaje a partir de recompensas y penalizaciones", "Procesamiento de lenguaje natural", "Segmentación de mercado"], answer: "Aprendizaje a partir de recompensas y penalizaciones" },
    { question: "IA Débil o Estrecha ¿Qué ejemplo describe mejor la IA débil?", options: ["Una IA que puede aprender cualquier tarea humana", "Un sistema de recomendación de productos", "Una IA que desarrolla teorías científicas", "Un agente que juega y gana en múltiples juegos"], answer: "Un sistema de recomendación de productos" },
    { question: "IA Fuerte o General ¿Cuál es el estado actual de la IA fuerte?", options: ["Ampliamente utilizada en aplicaciones comerciales", "Completamente desarrollada y operativa", "Todavía en desarrollo y no implementada completamente", "Solo utilizada en sistemas de recomendación"], answer: "Todavía en desarrollo y no implementada completamente" },
    { question: "Aprendizaje Supervisado ¿Qué se requiere para el entrenamiento en aprendizaje supervisado?", options: ["Un conjunto de datos sin etiquetar", "Solo recompensas y penalizaciones", "Conjuntos de datos etiquetados", "Redes neuronales profundas exclusivamente"], answer: "Conjuntos de datos etiquetados" },
    { question: "Redes Neuronales Artificiales ¿Qué caracteriza a las redes neuronales artificiales?", options: ["No requieren entrenamiento", "Inspiradas en la estructura del cerebro humano", "Solo útiles para tareas de bajo nivel", "Incapaces de procesar lenguaje natural"], answer: "Inspiradas en la estructura del cerebro humano" },
    { question: "Aprendizaje No Supervisado ¿Para qué se utiliza comúnmente el aprendizaje no supervisado?", options: ["Entrenar agentes de juego", "Identificación de patrones emergentes", "Entrenamiento con datos etiquetados", "Reconocimiento de comandos de voz"], answer: "Identificación de patrones emergentes" },
    { question: "Aprendizaje Reforzado ¿Qué es un ejemplo de aprendizaje reforzado?", options: ["Clasificación de imágenes usando CNN", "Un agente jugando y aprendiendo de un juego de ajedrez", "Análisis de sentimientos en textos", "Predicción de tendencias de mercado"], answer: "Un agente jugando y aprendiendo de un juego de ajedrez" },
    { question: "IA Débil o Estrecha ¿Cuál de las siguientes es una característica de la IA débil?", options: ["Capacidad de realizar cualquier tarea cognitiva", "Desempeño limitado fuera de su dominio específico", "Autoconciencia y comprensión", "Capacidad de desarrollar teorías científicas"], answer: "Desempeño limitado fuera de su dominio específico" },
    { question: "IA Fuerte o General ¿Qué distingue a la IA fuerte de la IA débil?", options: ["Su capacidad para realizar tareas específicas", "Su habilidad para comprender y aprender cualquier tarea cognitiva humana", "Su uso en sistemas de recomendación", "Su limitación a aplicaciones de procesamiento de lenguaje natural"], answer: "Su habilidad para comprender y aprender cualquier tarea cognitiva humana" },
    { question: "Aprendizaje Supervisado ¿Qué tipo de problema es comúnmente resuelto con aprendizaje supervisado?", options: ["Clustering", "Reducción de dimensionalidad", "Clasificación", "Exploración de datos no estructurados"], answer: "Clasificación" },
    { question: "Redes Neuronales Artificiales ¿En qué área de la IA las redes neuronales artificiales tienen un papel crucial?", options: ["Aprendizaje reforzado", "Aprendizaje profundo (deep learning)", "Aprendizaje no supervisado", "Procesamiento de datos en tiempo real"], answer: "Aprendizaje profundo (deep learning)" },
    { question: "Aprendizaje No Supervisado ¿Qué método de aprendizaje no supervisado se utiliza para agrupar datos similares?", options: ["Clasificación", "Regresión", "Clustering", "Reforzamiento"], answer: "Clustering" },
    { question: "Aprendizaje Reforzado ¿En qué se diferencia el aprendizaje reforzado del supervisado?", options: ["Utiliza grandes conjuntos de datos etiquetados", "Aprende únicamente a través de recompensas y penalizaciones", "Se enfoca en el reconocimiento de patrones", "Se usa principalmente en reconocimiento de voz"], answer: "Aprende únicamente a través de recompensas y penalizaciones" },
    { question: "IA Débil o Estrecha ¿Qué tipo de tareas realiza la IA débil?", options: ["Tareas cognitivas complejas", "Cualquier tipo de tarea humana", "Tareas específicas y limitadas", "Tareas que requieren creatividad y emociones"], answer: "Tareas específicas y limitadas" },
    { question: "IA Fuerte o General ¿Cuál es un reto clave en el desarrollo de la IA fuerte?", options: ["Mejorar los sistemas de recomendación", "Crear IA que comprenda y realice cualquier tarea cognitiva", "Optimizar algoritmos de aprendizaje supervisado", "Incrementar la eficiencia de las redes neuronales convolucionales"], answer: "Crear IA que comprenda y realice cualquier tarea cognitiva" },
    { question: "Aprendizaje Supervisado ¿Qué se utiliza típicamente en el aprendizaje supervisado para evaluar el rendimiento del modelo?", options: ["Conjuntos de datos no etiquetados", "Redes neuronales profundas", "Datos de recompensas y penalizaciones", "Conjuntos de datos de prueba"], answer: "Conjuntos de datos de prueba" },
    { question: "Redes Neuronales Artificiales ¿Cuál es un ejemplo del uso de redes neuronales en el procesamiento del lenguaje natural (PLN)?", options: ["Clustering de documentos", "Segmentación de mercado", "Traducción automática", "Reducción de dimensionalidad"], answer: "Traducción automática" },
    { question: "Aprendizaje No Supervisado ¿Qué técnica de aprendizaje no supervisado se utiliza para reducir la complejidad de los datos?", options: ["Regresión", "Clasificación", "Reducción de dimensionalidad", "Reforzamiento"], answer: "Reducción de dimensionalidad" },
    { question: "Aprendizaje Reforzado ¿En qué se enfoca principalmente el aprendizaje reforzado?", options: ["Clasificación de datos etiquetados", "Procesamiento de lenguaje natural", "Optimización de decisiones basada en recompensas/penalizaciones", "Análisis de grandes conjuntos de datos"], answer: "Optimización de decisiones basada en recompensas/penalizaciones" },
    { question: "IA Débil o Estrecha ¿Qué ejemplo representa mejor una aplicación de IA débil?", options: ["Un chatbot que responde a preguntas específicas", "Una IA que desarrolla nuevos medicamentos", "Un sistema que puede aprender cualquier habilidad humana", "Un agente de IA que realiza descubrimientos científicos"], answer: "Un chatbot que responde a preguntas específicas" },
    { question: "IA Fuerte o General ¿Cuál es una característica de la IA fuerte?", options:["Especialización en una tarea específica","Capacidad para realizar una amplia gama de tareas cognitivas", "Limitación a tareas de procesamiento de lenguaje natural", "Enfoque exclusivo en reconocimiento de voz"], answer:"Capacidad para realizar una amplia gama de tareas"},
    { question: "¿Cuál es un ejemplo de un algoritmo utilizado en el aprendizaje supervisado?", options:["Algoritmos genéticos", "Algoritmo K-means", "Redes neuronales convolucionales","Análisis de componentes principales (PCA)"], answer: "Redes neuronales convolucionales"}
  ];
  
  let currentQuestionIndex = 0;  
  let score = 0;
  let timer;

  let maxScorePerQuestion = 100; // Puntuación máxima inicial por pregunta
  let scoreDecrement = 20; // Cantidad de puntuación a reducir cada 5 segundos
  
  function updateTimer() {
    let timeLeft = 40;
    maxScorePerQuestion = 100; // Restablecer la puntuación máxima para cada nueva pregunta
  
    clearInterval(timer);
    timer = setInterval(function() {
      if (timeLeft <= 0) {
        clearInterval(timer);
        if (currentQuestionIndex < selectedQuestions.length - 1) {
          currentQuestionIndex++;
          createQuiz();
        } else {
          showFinalScore();
        }
      } else {
        $('#timer').text('Tiempo restante: ' + timeLeft);
        if (timeLeft % 5 === 0) { // Reducir puntuación cada 5 segundos
          maxScorePerQuestion = Math.max(maxScorePerQuestion - scoreDecrement, 0);
        }
        timeLeft -= 1;
      }
    }, 1000);
  }
  
function getRandomQuestions(questions, numQuestions) {
    let shuffled = questions.sort(() => 0.5 - Math.random());
    return shuffled.slice(0, numQuestions);
}

let selectedQuestions = getRandomQuestions(questions, 5);
currentQuestionIndex = 0;  
score = 0;


$(document).ready(function() {
  selectedQuestions = getRandomQuestions(questions, 5); // Selecciona 5 preguntas al azar
  createQuiz();

  $('#next-question').click(function() {
    console.log("Índice actual de preguntas: ", currentQuestionIndex);
    console.log("Longitud de preguntas seleccionadas: ", selectedQuestions.length);
    if(currentQuestionIndex < selectedQuestions.length - 1) {
      currentQuestionIndex++;
      createQuiz();
    } else {
        showFinalScore();
    }
  });  
});

function createQuiz() {
    $('#quiz-form').empty();
    let q = selectedQuestions[currentQuestionIndex]; // Usando preguntas seleccionadas
  
    let formGroup = $('<div>').addClass('form-group');
    let label = $('<h4>').addClass('mb-2').text(q.question);
    formGroup.append(label);
  
    q.options.forEach(option => {
      let inputId = 'question' + currentQuestionIndex + '-' + option;
      let isCorrect = option === q.answer;
      let input = $('<input>').attr({ type: 'radio', id: inputId, name: 'question' + currentQuestionIndex, value: option, class: 'd-none' });
      let label = $('<label>').attr('for', inputId).addClass('option btn btn-outline-secondary mr-2 mb-2').text(option);
  
      input.change(function() {
        $('.option').removeClass('correct-answer wrong-answer btn-success btn-danger');
        if(this.value === q.answer) {
          label.removeClass('btn-outline-secondary').addClass('btn-success correct-answer');
        } else {
          label.removeClass('btn-outline-secondary').addClass('btn-danger wrong-answer');
          $('input[value="' + q.answer + '"]').next().removeClass('btn-outline-secondary').addClass('btn-success correct-answer');
        }
      });
  
      formGroup.append(input).append(label);
    });
  
    $('#quiz-form').append(formGroup);
    updateTimer();
  }
  

// Evento change para las respuestas
$('body').on('change', 'input[type="radio"]', function() {
    // Deshabilita todas las opciones una vez que se elige una
    $('input[type="radio"]').each(function() {
      $(this).prop('disabled', true);
    });
  
    clearInterval(timer);
    let selectedAnswer = $(this).val();
    let correctAnswer = selectedQuestions[currentQuestionIndex].answer;
    if (selectedAnswer === correctAnswer && !$(this).hasClass('answered')) {
      score += maxScorePerQuestion; // Añadir puntuación basada en el tiempo restante
      $(this).addClass('answered');
    }
    $('#score').text('Puntuación: ' + score);
  });
  
  function showFinalScore() {
    // Limpia el contenido actual
    $('#quiz-form').empty();
    $('#next-question').hide();
  
    // Crear efecto de confeti
    confetti({
      particleCount: 100,
      spread: 70,
      origin: { y: 0.6 }
    });
  
    // Crear y mostrar la puntuación en el centro
    const scoreDiv = $('<div>', {
      class: 'final-score',
      text: 'Tu puntuación es: ' + score
    }).css({
      position: 'fixed',
      top: '50%',
      left: '50%',
      transform: 'translate(-50%, -50%)',
      fontSize: '2em',
      color: '#333'
    });
  
    $('body').append(scoreDiv);
  }
  