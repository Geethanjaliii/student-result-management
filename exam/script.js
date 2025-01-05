document.querySelector("form").addEventListener("submit", function (e) {
    const username = document.getElementById("username").value.trim();
    const dob = document.getElementById("dob").value.trim();
  
    if (!username || !dob) {
      alert("Please fill in all fields.");
      e.preventDefault();
    }
  });
  