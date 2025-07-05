document.addEventListener("DOMContentLoaded", function () {
  fetch("../src/get_recommendations.php")
    .then(response => response.json())
    .then(data => {
      const list = document.getElementById("career-list");
      data.forEach(career => {
        const li = document.createElement("li");
        li.innerHTML = `<strong>${career.title}</strong><br>${career.description}`;
        list.appendChild(li);
      });
    })
    .catch(error => {
      console.error("Error loading recommendations:", error);
    });
});