<?php
// Include the database connection
include 'db.php';

// Fetch the resume data
$query = $pdo->prepare("SELECT * FROM resumes LIMIT 1");
$query->execute();
$resume = $query->fetch(PDO::FETCH_ASSOC);

// Check if the resume was found
if (!$resume) {
    die("Resume not found.");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?php echo htmlspecialchars($resume['name']); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 2.5em;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        h2 {
            font-size: 1.5em;
            margin-top: 40px;
            border-bottom: 1px solid #333;
            padding-bottom: 5px;
        }
        .contact-info {
            margin-top: 10px;
        }
        .contact-info p {
            margin: 0;
        }
        .section {
            margin-bottom: 30px;
        }
        ul {
            padding-left: 20px;
        }
        p, li {
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><?php echo htmlspecialchars($resume['name']); ?></h1>
            <div class="contact-info">
                <p><?php echo htmlspecialchars($resume['address']); ?></p>
                <br>
                <p>Phone: <?php echo htmlspecialchars($resume['phone']); ?> | Email: <?php echo htmlspecialchars($resume['email']); ?></p>
            </div>
        </header>

        <div class="section">
            <h2>Objective</h2>
            <p><?php echo htmlspecialchars($resume['objective']); ?></p>
        </div>

        <div class="section">
            <h2>Educational Background</h2>
            <p><?php echo nl2br(htmlspecialchars($resume['education'])); ?></p>
        </div>

        <div class="section">
            <h2>Personal Information</h2>
            <p><?php echo nl2br(htmlspecialchars($resume['personal_info'])); ?></p>
        </div>
    </div>
</body>
</html>
