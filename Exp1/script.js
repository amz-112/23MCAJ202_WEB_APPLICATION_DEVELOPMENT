document.getElementById("registrationForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form from submitting

  let isValid = true; // Flag to check if form is valid

  // Get form field values
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let password = document.getElementById("password").value.trim();
  let phone = document.getElementById("phone").value.trim();

  // Get error message elements
  let nameError = document.getElementById("nameError");
  let emailError = document.getElementById("emailError");
  let passwordError = document.getElementById("passwordError");
  let phoneError = document.getElementById("phoneError");

  // Clear previous error messages
  nameError.textContent = "";
  emailError.textContent = "";
  passwordError.textContent = "";
  phoneError.textContent = "";

  // Name Validation: Should not be empty and should contain only letters
  if (name === "") {
      nameError.textContent = "Name is required.";
      isValid = false;
  } else if (!/^[a-zA-Z ]+$/.test(name)) {
      nameError.textContent = "Name can only contain letters and spaces.";
      isValid = false;
  }

  // Email Validation: Should follow proper email format
  if (email === "") {
      emailError.textContent = "Email is required.";
      isValid = false;
  } else if (!/^\S+@\S+\.\S+$/.test(email)) {
      emailError.textContent = "Invalid email format.";
      isValid = false;
  }

  // Password Validation: Minimum 6 characters
  if (password === "") {
      passwordError.textContent = "Password is required.";
      isValid = false;
  } else if (password.length < 6) {
      passwordError.textContent = "Password must be at least 6 characters long.";
      isValid = false;
  }

  // Phone Number Validation: Should contain exactly 10 digits
  if (phone === "") {
      phoneError.textContent = "Phone number is required.";
      isValid = false;
  } else if (!/^\d{10}$/.test(phone)) {
      phoneError.textContent = "Phone number must be exactly 10 digits.";
      isValid = false;
  }

  // If form is valid, submit it
  if (isValid) {
      alert("Registration Successful!");
      document.getElementById("registrationForm").reset(); // Clear the form
  }
});
