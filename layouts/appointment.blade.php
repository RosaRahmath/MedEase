<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Appointments</title>
    <link rel="stylesheet" href="appointment.css">
</head>
<body>
    <header>
        <nav class="menu-bar">
            <div class="container">
                <a href="home.html" class="menu-logo">MedEase</a>
                <ul class="menu-links">
                  
                    <div class="navbar">
                    
                        <div class="profile-container">
                            <img src="images/Dr_profile.jpg" alt="Doctor Profile" class="profile-icon">
                            <span class="profile-name">Dr. Jhon</span>

                            <a href="#" class="logout">Log out</a>
                        </div>
                    </div>
                    
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h2>Your Appointments</h2>
        
    <div class="container_table">
        <table id="appointmentsTable">
            <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Appointment rows will be dynamically populated -->
            </tbody>
        </table>
    </div>
    </main>
    <script src="script.js"></script>
</body>
</html>
