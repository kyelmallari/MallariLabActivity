<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <nav>
        <ul>
            <li><a href="about">About</a></li>
            <li><a href="FAQ">FAQ</a></li>
            <li><a href="home">home</a></li>
            <li><a href="contact">contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <section>
            <h2>Story of Kyel's Website</h2>
            <p>Welcome to Kyel's Website where you can see me Gaming, Vlogging, and Gym.</p>
        </section>

        <section>
            <h2>Our Goal</h2>
            <p>Our goal is to make everyone happy.</p>
        </section>

        <section>
            <h2>Meet my friends</h2>
            <?php
                $teamMembers = array(
                    'Kyel Mallari' => 'Content creator',
                    'Ralph Lauren' => 'Editor',
                    'Benjie Cuasay' => 'Market',
                );
            ?>
            <ul>
                <?php foreach ($teamMembers as $name => $position) { ?>
                    <li><?= $name ?> - <?= $position ?></li>
                <?php } ?>
            </ul>
        </section>
    </div>
</body>
</html>
