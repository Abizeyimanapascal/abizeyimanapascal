const quizContainer = document.getElementById('quiz-container');
const questionContainer = document.getElementById('question-container');
const optionsContainer = document.getElementById('options-container');
const prevButton = document.getElementById('prev-btn');
const nextButton = document.getElementById('next-btn');
const submitButton = document.getElementById('submit-btn');
const resultContainer = document.getElementById('result');

let currentQuestion = 0;
let score = 0;

// Define your quiz questions here
const questions = [
  {
    question: 'What is the capital of France?',
    options: ['Paris', 'London', 'Berlin', 'Rome'],
    correctAnswer: 'Paris'
  },
  {
    question: 'What is 2 + 2?',
    options: ['3', '4', '5', '6'],
    correctAnswer: '4'
  },
  // Add more questions as needed
];

function showQuestion() {
  const question = questions[currentQuestion];
  questionContainer.textContent = question.question;
  optionsContainer.innerHTML = '';
  question.options.forEach((option, index) => {
    const optionDiv = document.createElement('div');
    optionDiv.classList.add('option');
    optionDiv.innerHTML = `<label><input type="radio" name="option" value="${option}"> ${option}</label>`;
    optionsContainer.appendChild(optionDiv);
  });
}

function calculateScore() {
  const selectedOption = document.querySelector('input[name="option"]:checked');
  if (selectedOption) {
    if (selectedOption.value === questions[currentQuestion].correctAnswer) {
      score++;
    }
  }
}

function showResult() {
  calculateScore();
  resultContainer.textContent = `Your score: ${score} / ${questions.length}`;
}

function updateButtons() {
  prevButton.disabled = currentQuestion === 0;
  nextButton.disabled = currentQuestion === questions.length - 1;
  submitButton.style.display = currentQuestion === questions.length - 1 ? 'block' : 'none';
}

function nextQuestion() {
  calculateScore();
  if (currentQuestion < questions.length - 1) {
    currentQuestion++;
    showQuestion();
    updateButtons();
  }
}

function prevQuestion() {
  if (currentQuestion > 0) {
    currentQuestion--;
    showQuestion();
    updateButtons();
  }
}

// Event listeners for navigation buttons
nextButton.addEventListener('click', nextQuestion);
prevButton.addEventListener('click', prevQuestion);

// Initialize
showQuestion();
updateButtons();

// Show result when the submit button is clicked
submitButton.addEventListener('click', showResult);
