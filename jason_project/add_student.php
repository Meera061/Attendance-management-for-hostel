<?php
include "db_connection.php"; // Include database connection

// Add Student Logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = trim($_POST['roll_no']);
    $student_name = trim($_POST['student_name']);
    $room_no = trim($_POST['room_no']);

    // Check if fields are empty
    if (empty($roll_no) || empty($student_name) || empty($room_no)) {
        echo "<script>alert('All fields are required!');</script>";
    } else {
        // Insert student using prepared statements
        $query = "INSERT INTO students (roll_no, student_name, room_no) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("sss", $roll_no, $student_name, $room_no);
            if ($stmt->execute()) {
                echo "<script>window.location.href='add_student.php';</script>"; // Refresh the page
                exit();
            } else {
                echo "<script>alert('Error adding student: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Database error!');</script>";
        }
    }
}

// Fetch students sorted by room_no first, then by roll_no
$query = "SELECT roll_no, student_name, room_no FROM students ORDER BY room_no ASC, roll_no ASC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3498db, #2ecc71); /* Gradient Background */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            color: white;
            text-align: center;
        }
        h2 {
            margin-top: 20px;
            font-size: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Form Styling */
        form {
            background: rgba(0, 0, 0, 0.34);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(5px);
            display: flex;
            flex-direction: column;
            width: 300px;
            gap: 10px;
            text-align: center;
        }

        label {
            font-size: 16px;
            font-weight: bold;
        }

        input {
            padding: 8px;
            border: none;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            background: black;
            color: #3498db;
            padding: 12px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background:rgba(125, 114, 114, 0.34);
            color: black;
        }

        /* Student List Styling */
        .student-list {
            width: 80%;
            margin-top: 30px;
        }

        .student-list table {
            width: 100%;
            border-collapse: collapse;
            color:black;
        }

        .student-list th, .student-list td {
            padding: 10px;
            text-align: center;
        }

        .student-list th {
            background: rgba(255, 255, 255, 0.3);
            font-weight: bold;
        }

        .student-list tr {
            background: transparent;
        }

        .student-list tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>

<h2>Add Student</h2>

<form method="POST">
    <label>Roll No:</label> 
    <input type="text" name="roll_no" required>
    <label>Student Name:</label> 
    <input type="text" name="student_name" required>
    <label>Room No:</label> 
    <input type="text" name="room_no" required>
    <input type="submit" value="Add Student">
</form>

<h2>Student List</h2>
<div class="student-list">
    <table>
        <tr>
            <th>Roll No</th>
            <th>Student Name</th>
            <th>Room No</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['roll_no']); ?></td>
                <td><?php echo htmlspecialchars($row['student_name']); ?></td>
                <td><?php echo htmlspecialchars($row['room_no']); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>