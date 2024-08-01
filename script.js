// document.getElementById('c2cForm').addEventListener('submit', function(event) {
//     event.preventDefault();
//     // Here you would need to send the form data to your server or email service
//     alert('Form submitted successfully!');
// });

document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('c2cForm');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        // Validate form fields
        var valid = true;
        var fields = document.querySelectorAll('input[required], select[required]');
        
        fields.forEach(function(field) {
            if (!field.value) {
                valid = false;
                field.style.borderColor = 'red'; // Highlight invalid fields
            } else {
                field.style.borderColor = ''; // Reset border color
            }
        });

        if (!valid) {
            alert('Please fill out all required fields.');
            return; // Stop further processing if form is not valid
        }
        
        // If the form is valid, send the form data to the server
        var formData = new FormData(form);
        
        fetch('send_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            alert('Form submitted successfully!');
            console.log(result);
            // Optionally, you can reset the form or redirect the user
            form.reset(); // Reset form fields
        })
        .catch(error => {
            alert('There was an error submitting the form.');
            console.error('Error:', error);
        });
    });
});







