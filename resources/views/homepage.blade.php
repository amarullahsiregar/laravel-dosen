<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TA Rahman A. S.</title>

    <!-- Add Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Tailwind -->

    <style>

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1, h2, h3 {
            color: #ffffff;
        }

        section {
            padding: 20px;
            background-color: #fff;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .info div {
            width: 48%;
        }

        .info p {
            margin: 5px 0;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .experience, .education {
            margin-bottom: 20px;
        }
        .education{
            margin-bottom: 80px;
        }


        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>

    <header>
        <h1>Rahman Amarullah Siregar</h1>
        <p>Web Developer</p>
    </header>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

<?php

class Tautan {
    // Atribut
    public $link;
    public $link2;

    // Metode
    public function infoTautan() {
        return "Link " . $this->link . "  " . $this->link2;
    }
}

// Membuat objek
$tautan1 = new Tautan();
$tautan1->link = 'https://www.linkedin.com/in/rahman-siregar';
$tautan1->lin2 = "https://github.com/amarullahsiregar";

echo $tautan1->infoTautan(); // Output: Mobil Toyota berwarna Merah

?>
    <section class="info">
        <div>
            <h2>Contact Information</h2>
            <p>Email: your.email@example.com</p>
            <p>Phone: (123) 456-7890</p>
            <p>Location: City, Country</p>
        </div>

        <div>
            <h2>Links</h2>
            <p><a href="https://www.linkedin.com/in/yourname" target="_blank">LinkedIn</a></p>
            <p><a href="https://github.com/yourusername" target="_blank">GitHub</a></p>
            <!-- Add more links as needed -->
        </div>
    </section>

    <section class="experience">
        <h2>Work Experience</h2>
        <h3>Internship - Dharma Lautan Nusantara, Nort Jakarta, Indonesia (2020)</h3>
        <p>IT Support Intern.</p>
        <span></span>
        <span></span>
        <h3>Internship - PT Sumber Usaha Rizkila, Medan, Indonesia (2016)</h3>
        <p>Network Engineer Staff Intern.</p>
        <!-- Add more work experience as needed -->
    </section>

    <section class="education">
        <h2>Education</h2>
        <h3>Bachelor Degree - Sumatera Institute of Technology, Bandar Lampung, Indonesia (August 2017 - 2024)</h3>
        <p>Informatics Engineering.</p>
        <!-- Add more education details as needed -->
    </section>

    <footer>
        <p>&copy; 2024 Rahman Amarullah Siregar. All rights reserved.</p>
    </footer>

</body>
</html>
