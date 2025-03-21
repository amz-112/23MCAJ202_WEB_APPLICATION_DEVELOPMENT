// JavaScript file to change image and text on mouse hover

// Step 1: Select the Image and Text elements using their IDs
let image = document.getElementById("image");
let text = document.getElementById("text");

// Step 2: Add an "mouseover" event listener to change the content
image.addEventListener("mouseover", function() {
    image.src = "image2.jpg"; // Change to new image
    text.innerHTML = "Similar Smiles?!!"; // Change text
});

// Step 3: Add a "mouseout" event listener to revert back
image.addEventListener("mouseout", function() {
    image.src = "image1.jpg"; // Revert to original image
    text.innerHTML = "You wanna see an another smile? Hover over the picture!!!"; // Revert text
});
