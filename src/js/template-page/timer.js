function parseFormattedDate(formattedDate) {
  const months = {
      Jan: 0, Feb: 1, Mar: 2, Apr: 3, May: 4, Jun: 5,
      Jul: 6, Aug: 7, Sep: 8, Oct: 9, Nov: 10, Dec: 11
  };

  const dateParts = formattedDate.split(' ');
  const day = parseInt(dateParts[0]);
  const month = months[dateParts[1]];
  const year = parseInt(dateParts[2]);

  return new Date(year, month, day);
}

const dateElement = document.querySelector('.data__ending--bottom');
const countdownElement = document.querySelector('.data__timer--bottom');
const daysElement = document.getElementById("days");
const hoursElement = document.getElementById("hours");
const minutesElement = document.getElementById("minutes");
const secondsElement = document.getElementById("seconds");

const formattedDate = dateElement.textContent;
const targetDate = parseFormattedDate(formattedDate);

function updateCountdown() {
  const now = new Date();
  const timeRemaining = targetDate - now;

  if (timeRemaining <= 0) {
      countdownElement.textContent = "Event has already occurred!";
  } else {
      const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

      daysElement.textContent = days.toString().padStart(2, "0");
      hoursElement.textContent = hours.toString().padStart(2, "0");
      minutesElement.textContent = minutes.toString().padStart(2, "0");
      secondsElement.textContent = seconds.toString().padStart(2, "0");
  }
}

setInterval(updateCountdown, 1000);
updateCountdown();
