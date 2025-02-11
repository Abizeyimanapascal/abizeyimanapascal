// Set the date we're counting down to
const countdownDate = new Date("2024-09-10 00:00:00").getTime();

// Update the countdown every 1 second
const x = setInterval(function () {
  // Get the current date and time
  const now = new Date().getTime();

  // Calculate the time remaining
  const distance = countdownDate - now;

  // Calculate days, hours, minutes, and seconds
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Select the element with the ID "countdown"
  const countdownElement = document.getElementById("countdown");

  // Determine the format to display
  let displayText = "";
  if (days > 0) {
    displayText = `${days}d`;
  } else if (hours > 0) {
    displayText = `${hours}h`;
  } else if (minutes > 0) {
    displayText = `${minutes}m`;
  } else {
    displayText = `${seconds}s`;
  }

  // Update the content of the countdown element
  countdownElement.innerHTML = displayText;

  // If the countdown is finished, display a message
  if (distance < 0) {
    clearInterval(x);
    countdownElement.innerHTML = "EXPIRED";
  }
}, 1000);
