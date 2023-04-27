// Get the form element
const form = document.querySelector('form');

// Get the input fields and output textarea
const widthInput = form.querySelector('#width');
const lengthInput = form.querySelector('#length');
const depthInput = form.querySelector('#depth');
const output = form.querySelector('#output');

// Add an event listener to the form to prevent it from submitting
form.addEventListener('submit', e => {
  e.preventDefault();
});

// Add an event listener to the Calculate button to perform the calculation
form.querySelector('input[type="button"]').addEventListener('click', () => {
  // Get the values from the input fields
  const width = parseFloat(widthInput.value);
  const length = parseFloat(lengthInput.value);
  const depth = parseFloat(depthInput.value);

  // Check if the inputs are valid
  if (isNaN(width) || isNaN(length) || isNaN(depth)) {
    output.value = 'Please enter valid values.';
    return;
  }

  // Convert depth to feet
  const depth_feet = depth / 12;

  // Calculate the total cubic feet
  const total_cubic_feet = width * length * depth_feet;

  // Display the output
  output.value = `You need ${total_cubic_feet.toFixed(2)} cubic feet of material.`;
});

// Add event listeners to the input fields to clear the output when changed
widthInput.addEventListener('input', () => {
  output.value = '';
});

lengthInput.addEventListener('input', () => {
  output.value = '';
});

depthInput.addEventListener('input', () => {
  output.value = '';
});

// Add event listeners to the input fields to highlight them when focused
widthInput.addEventListener('focus', () => {
  widthInput.style.border = '2px solid #4CAF50';
});

widthInput.addEventListener('blur', () => {
  widthInput.style.border = '';
});

lengthInput.addEventListener('focus', () => {
  lengthInput.style.border = '2px solid #4CAF50';
});

lengthInput.addEventListener('blur', () => {
  lengthInput.style.border = '';
});

depthInput.addEventListener('focus', () => {
  depthInput.style.border = '2px solid #4CAF50';
});

depthInput.addEventListener('blur', () => {
  depthInput.style.border = '';
});
