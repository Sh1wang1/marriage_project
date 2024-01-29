<!DOCTYPE html>
<html lang="en">

<head><br>
    <br>
    <title>Online Marriage Registration System :: Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
            background-size: 100% 100%;
            display: grid;
            text-align: center;
            color: rgb(255, 255, 255);
            background-image: url('ji.jpeg');
            background-repeat: no-repeat;
            display: grid;
            grid-template-rows: 0% 20%;
        }

        html {
            font-family: 'Josefin Sans', sans-serif;
        }

        h1 {
            text-shadow: rgb(0, 0, 0) 3px 3px 5px;
        }


        button {
            padding: 1.3em 3em;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: white;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(233, 97, 97, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
            opacity: 1;
        }

        button:hover {
            background-color: red;
            box-shadow: black;
            color: #fff;
            transform: translateY(-7px);
        }

        button:active {
            transform: translateY(-1px);
        }


        /* @import url('https://fonts.googleapis.com/css?
        family=Poppins:100,200,300,400,500,600,700,800,900'); 
       {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:Poppins, sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(45deg,#00bcd4,#ffeb3b);
        }  */
        .container {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 100px 50px;
            padding: 50px 50px;
            top: 100%;
        }

        .container .card {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            width: 350px;
            height: 300px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
            transition: 1.0s;
            float: left;
        }

        .container .card:hover {
            height: 400px;
        }

        .container .card .imgBx {
            position: absolute;
            top: 20px;
            width: 300px;
            height: 220px;
            background: #333;
            border-radius: 12px;
            overflow: hidden;
            transition: 0.5s
        }

        .container .card:hover .imgxB {
            top: -100px;
            scale: 0.75;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
        }

        .container .card .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .container .card .content {
            position: relative;
            top: 252px;
            width: 100%;
            padding: 0 30px;
            height: 35px;
            overflow: hidden;
            text-align: center;
            transition: 0.5s;
        }

        .container .card:hover .content {
            top: 130px;
            height: 250px;

        }

        .container .card .content h2 {
            font-size: 1.5em;
            font-weight: 700;
            color: var(--clr);
        }

        .container .card .content p {
            color: #333;
        }

        .container .card .content a {
            position: relative;
            top: 15px;
            display: inline-block;
            background: var(--clr);
            padding: 12px 25px;
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            border-radius: 8px;
        }

        .work {
            display: grid;
            grid-template-columns: auto auto auto auto;
            align-items: center;
            text-decoration: none;
            font-size: 20px;
            height: 100px;
        }

        a {
            text-decoration: none;
        }

        .about-us-button {
            color: white;
        }
    </style>
</head>

<body>


    <div class="work">
        <a href="about.html" class="about-us-button" class="atop"><b>About Us</b></a>
        <a href="contact.html" class="about-us-button" class="atop"><b>Contact Us</b></a>
        <a href="terms.html" class="about-us-button" class="atop"> <b>Terms & Conditions</b></a>
        <a href="feedback.html" class="about-us-button" class="atop"> <b>Feedback</b></a>
        
    </div>

    <div class="main">
        <!-- <img src="ji.jpeg"> -->
        <h1 style="font-size: 60px;">ONLINE MARRIAGE REGISTRATION SYSTEM</h1>
        <button><a href="registration.html">Register</a></button>

        <button><a href="login.html">Login</a></button>
     
			<button><a href="delete.html">Delete Profile</a></button>
		
			<button><a href="update.html">Update Password</a></button>
		
    </div>


    <div class="container">
        <div class="card" style="--clr:#009688;">
            <div class="imgBx">
                <img src="r1.jpeg">
            </div>
            <div class="content">
                <h2>Client</h2>
                <p>Excellent service....prompt and trustworthy.</p>
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="card" style="--clr:#ff3ee7;">
            <div class="imgBx">
                <img src="images.png">

            </div>
            <div class="content">
                <h2>CLIENT</h2>
                <p>The support i received was thorough and timely.</p>
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="card" style="--clr:#03a9f4;">
            <div class="imgBx">
                <img src="r2.jpg">

            </div>
            <div class="content">
                <h2>Client</h2>
                <p>Awesome</p>
                <p>Very Good Customer Service</p>
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="card" style="--clr:#03a9f4;">
            <div class="imgBx">
                <img src="r3.png">

            </div>
            <div class="content">
                <h2>Client </h2>
                <p>Quick service and very trustworthy.</p>
                <a href="#">Read more</a>
            </div>
        </div>
    </div>
</body>

</html>