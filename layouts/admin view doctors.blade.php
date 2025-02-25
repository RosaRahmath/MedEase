<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>/* Main Menu */
        .menu-bar {
            background-color: #005BB5;
            padding: 10px 0;
            box-shadow: 0 4px 6px rgba(247, 245, 245, 0.1);
        }
        
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: url('images/blur-hospital.jpg') no-repeat center center fixed;
            background-size: cover;
           
          } 
        
        .menu-logo {
            color: white;
            font-size: 1.5em;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
        }
        
        .menu-links {
            display: flex;
            gap: 20px;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .menu-links li {
            position: relative;
            color: aliceblue;
        }
        
        .menu-links li a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: inline-block;
            font-size: 1em;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 5px;
        }
        
        .menu-links li a:hover {
            background-color: #004897;
            color: #e0e0e0;
        }
        
        /* Dropdown Menu Styling */
        .menu-links li:hover .dropdown {
            display: block;
        }
        
        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #005BB5;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        .dropdown li a {
            display: block;
            padding: 10px 20px;
            white-space: nowrap;
        }
         /* Table */
        
          /* Table Container */
          .container_table {
            width: 100%;
            max-width: 1100px;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
         table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        
        th, td {
            border: 1px solid #ccc;
            text-align: center;
            padding: 8px;
            font-size: 14px;
        }
        
        th {
            background-color: #4d8af0;
            color: white;
        }
        
        td {
            background-color: #f8f8f8;
        }
        
        
        .profile-icon {
            width: 40px;  /* Adjust size */
            height: 40px;
            border-radius: 50%; /* Makes it circular */
            object-fit: cover;
            margin-right: 10px; /* Add some spacing */
            vertical-align: middle;
        }
        
        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .profile-name{
            color: #e0e0e0;
        }
        
        .logout{
            color: aliceblue;
        }
        .button {
            background-color: #2697a4;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color:#4d8af0;
            /* Darker blue on hover */
        }
        </style>
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
                            <span class="profile-name">Admin</span>

                            <a href="#" class="logout">Log out</a>
                        </div>
                    </div>
                    
                </ul>
            </div>
        </nav>
       
    </header>
    <main>
        <br>
        <a href="admin.html"> <button class="button">Go to Main page</button></a>
        <h2>Doctors Table</h2>
        
    <div class="container_table">
        <div class="header">
            <button>+ ADD NEW</button>
        </div>
    
        <table id="appointmentsTable">
            <thead>
                <tr>
                    <th>Doctor ID</th>
                    <th>Doctor Name</th>
                    <th>Position</th>
                    <th>Date of Start Working</th>
                    <th>Experience</th>
                    <th>Mobile</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <!-- Appointment rows will be dynamically populated -->
            </tbody>
        </table>
    </div>
    </main>
   
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch("https://api.example.com/appointments") // Replace with actual API endpoint
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById("appointment-table-body");
                tableBody.innerHTML = ""; // Clear existing content
                data.forEach(appointment => {
                    const row = `<tr>
                        <td>${appointment.patient_name}</td>
                        <td>${appointment.date}</td>
                        <td>${appointment.time}</td>
                        <td class="${appointment.status.toLowerCase()}">${appointment.status}</td>
                    </tr>`;
                    tableBody.innerHTML += row;
                });
            })
            .catch(error => console.error("Error fetching appointments:", error));
    });
</script>
</html>
