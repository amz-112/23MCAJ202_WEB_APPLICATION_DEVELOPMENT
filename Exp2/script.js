// JavaScript file to change the background color on button click

// Step 1: Select the button element using its ID
let button = document.getElementById("colorButton");

// Step 2: Define an array of colors
let colors = ["red", "blue", "green", "yellow", "pink", "purple", "orange", "cyan"];

// Step 3: Create a counter to keep track of clicks
let index = 0;

// Step 4: Add an event listener to the button to listen for "click" events
button.addEventListener("click", function() {
    // Change the background color of the body
    document.body.style.backgroundColor = colors[index];

    // Move to the next color in the array
    index++;

    // Reset the index to 0 if it exceeds the array length
    if (index >= colors.length) {
        index = 0;
    }
});
