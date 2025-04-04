<?php
include 'db_connection.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['attendance'] as $student_id => $status) {
        $student_id = intval($student_id);
        $status = mysqli_real_escape_string($conn, $status);

        // Insert attendance into the attendance table
        $query = "INSERT INTO attendance (student_id, student_name, status, date) 
                  VALUES ('$student_id', (SELECT student_name FROM students WHERE id = '$student_id'), '$status', NOW())
                  ON DUPLICATE KEY UPDATE status = '$status', date = NOW()";

        mysqli_query($conn, $query);

        // If the student is absent, insert into absent_students history table
        if ($status == "Absent") {
            $historyQuery = "INSERT INTO absent_students (student_id, student_name, date) 
                             VALUES ('$student_id', (SELECT student_name FROM students WHERE id = '$student_id'), NOW())";
            mysqli_query($conn, $historyQuery);
        }
    }
}

// Fetch today's absent students
$absentQuery = "SELECT s.student_name FROM students s 
                LEFT JOIN attendance a ON s.id = a.student_id AND DATE(a.date) = CURDATE()
                WHERE a.status = 'Absent'";

$absentResult = mysqli_query($conn, $absentQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Attendance</title>
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3498db, #2ecc71); /* Matching gradient */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            color: black;
            text-align: center;
        }

        /* Heading */
        h2 {
            font-size: 32px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        /* Absent Students List */
        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
            background: rgba(255, 255, 255, 0.1); /* Light transparency */
            padding: 15px;
            border-radius: 10px;
            max-width: 400px;
            width: 90%;
        }

        /* Individual List Items */
        ul li {
            font-size: 18px;
            padding: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Last Item – Remove Border */
        ul li:last-child {
            border-bottom: none;
        }

        /* No Absent Students Message */
        p {
            font-size: 18px;
            background: rgba(255, 255, 255, 0.1);
            padding: 10px 15px;
            border-radius: 8px;
            max-width: 400px;
            width: 90%;
        }
    </style>
</head>
<body>

<h2>Today's Absent Students</h2>

<?php
if (mysqli_num_rows($absentResult) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($absentResult)) {
        echo "<li>" . htmlspecialchars($row['student_name']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No students are absent currently.</p>";
}

mysqli_close($conn);
?>

</body>
</html>