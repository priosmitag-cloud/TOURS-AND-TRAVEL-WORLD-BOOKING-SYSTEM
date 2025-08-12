<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Planning a Trip?</title>
<style>

body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
        font-family: Arial, sans-serif;
        margin: 0;
        height: 740px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Shadow effect */
    z-index: 5; /* Below the modal but above the iframe */
}

    iframe {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        z-index: -1; /* Push behind content */
    }
    .content {
        position: relative;
        z-index: 1;
        color: white;
        font-size: 24px;
        text-align: center;
        padding-top: 50px;
    }

    .modal {
        background: white;
        border-radius: 15px;
        width: 350px;
        padding: 20px;
        position: relative;
        z-index: 10;
        text-align: center;
        animation: fadeIn 0.3s ease-in-out;
    }

    .modal h2 {
        color: #ff6600;
        margin-bottom: 5px;
    }

    .modal p {
        font-size: 14px;
        color: #555;
        margin-bottom: 20px;
    }

    .modal .close-btn {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 20px;
        cursor: pointer;
        border: none;
        background: none;
    }

    .modal input,
    .modal textarea,
    .modal select {
        width: 93%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
    }

    .modal button.book-btn {
        background: linear-gradient(to right, #ff9966, #ffcc99);
        border: none;
        padding: 10px;
        width: 100%;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 10px;
    }

    .modal a {
        display: block;
        color: red;
        margin-top: 10px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
    }

    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(-20px);}
        to {opacity: 1; transform: translateY(0);}
    }
</style>
</head>
<body>

<iframe src="Travelxploria.html"></iframe>

<div class="overlay"></div>

<div class="modal">
    <button class="close-btn" onclick="document.querySelector('.overlay').style.display='none';document.querySelector('.modal').style.display='none';">&times;</button>
    <h2>Planning a Trip?</h2>
    <p>Tell us your preferences and we'll do the rest – <strong>it's fast, free, and personalized!</strong></p>

    <form action="insert.php" method="post">
    <input type="text" placeholder="Full Name" name="uname">
    <input type="email" placeholder="Email Address" name="uemail">
    <div style="display: flex; gap: 5px;">
        <input type="text" value="+91" style="flex: 1;">
        <input type="tel" placeholder="Phone Number" style="flex: 2;" name="unumber">
    </div>
    <div style="display: flex; gap: 5px;">
        <input type="date" style="flex: 2;" name="date">
    </div>
    <textarea placeholder="Additional Message" rows="3" name="umessage"></textarea>

    <button class="book-btn" type="submit" name="submit">Book Now</button>
    <a href="Travelxploria.html">I'll do it later</a>
    </form>
</div>

</body>
</html>
