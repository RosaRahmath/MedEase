<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedEase - Appointment Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('images/blur-hospital.jpg');  
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #dcdcdc;
    padding: 20px;
    border-radius: 10px;
    width: 80%;
    max-width: 600px;
    border: 20px #00897b solid;
}

.profile-section {
    display: flex;
    align-items: center;
    background-color: #5f9ea0;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}

.profile-pic {
    width: 80px;
    height: 80px;
    background-image: url('doctor.png');  
    background-size: cover;
    border-radius: 50%;
    margin-right: 20px;
}

.doctor-info {
    text-align: left;
}

.doctor-info h2 {
    margin: 0;
}

.appointment-form {
    display: flex;
    flex-direction: column;
}

.appointment-form label {
    margin-top: 10px;
    margin-bottom: 5px;
    font-weight: bold;
}

.appointment-form input, 
.appointment-form select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-buttons {
    display: flex;
    justify-content:space-between;
    margin-top: 20px;
}

.back-btn, .submit-btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.back-btn {
    background-color: #5f9ea0;
    color: white;
}

.submit-btn {
    background-color: #00bfa5;
    color: white;
}

.back-btn:hover {
    background-color: #4682b4;
}

.submit-btn:hover {
    background-color: #00897b;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="profile-section">
            <div class="profile-pic"></div>
            <div class="doctor-info">
                <h2>Dr. Chandran</h2>
                <p>Cardiologist</p>
            </div>
        </div>

        <form class="appointment-form">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="mobile">Mobile</label>
            <input type="text" id="mobile" name="mobile" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="nic">NIC</label>
            <input type="text" id="nic" name="nic" required>

            <label for="payment-method">Payment Method:</label>
            <select id="payment-method" name="payment-method" required>
                <option value="credit-card">Credit Card</option>
                <option value="debit-card">Debit Card</option>
                <option value="paypal">PayPal</option>
            </select>

            <div class="form-buttons">
                <button type="button" class="back-btn"><a href="doctor_profile.html">Go back</a></button>
                <button type="submit" class="submit-btn"><a href="payment.html">Submit</a></button>
            </div>
        </form>
    </div>

    <script>
        // JavaScript to handle form submission and navigation

document.querySelector('.appointment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Appointment submitted successfully!');
    // You can add your form submission logic here
});

document.querySelector('.back-btn').addEventListener('click', () => {
    alert('Going back to the previous page.');
    // You can add your navigation logic here
});

    </script>
 
</body>
</html>
