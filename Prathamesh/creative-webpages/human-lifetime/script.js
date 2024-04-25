// Calculate the average number of weeks in a human lifetime
const averageLifespan = 80;
const weeksInYear = 52;
const averageWeeksInLifetime = averageLifespan * weeksInYear;

// Program to tell the time of the day
const now = new Date();
const hour = now.getHours();

let timeOfDay;

if (hour < 12) {
    timeOfDay = "morning";
} else if (hour < 18) {
    timeOfDay = "afternoon";
} else {
    timeOfDay = "night";
}
alert(`Average number of weeks in a human lifetime: ${averageWeeksInLifetime}\nIt's ${timeOfDay}`);
// Output the results in HTML
const outputDiv = document.getElementById('output');
outputDiv.innerHTML = `
  <p>Average number of weeks in a human lifetime: ${averageWeeksInLifetime}</p>
  <p>It's ${timeOfDay}</p>
`;
