<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="form-box">

        <h1>Contact Form</h1>

        <p>Fill in your details below.</p>

        <form action="from.php" method="POST">

            <div class="input-box">
                <label>Name</label>
                <input type="text" name="name"  placeholder="Enter your name"  required> 
                        
            </div>

            <div class="input-box">
                <label>Email</label>
                <input  type="email" name="email"  placeholder="Enter Email"  required>
                   
            </div>

            <div class="input-box">
                <label>Contact</label>
                <input type="text" name="text"  placeholder="type" required>
                    
            </div>

            <button type="submit"> Submit </button>
               
        </form>

    </div>
</div>
</body>
</html>