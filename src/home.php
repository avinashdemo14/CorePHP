<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CorePHP Website</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Navigation Bar -->
  <header>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Home Section -->
  <section id="home">
    <h1>Welcome to My Website</h1>
    <p>This is a simple PHP + HTML project with a styled homepage.</p>
  </section>

  <!-- About Section -->
  <section id="about">
    <h2>About Us</h2>
    <p>We are building a demo project using HTML and PHP. This page shows how a website layout can look.</p>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <h2>Contact Us</h2>
    <form action="src/process.php" method="POST">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" required><br><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br><br>

      <label for="message">Message:</label><br>
      <textarea id="message" name="message" required></textarea><br><br>

      <button type="submit">Send</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2026 My Website. All rights reserved.</p>
  </footer>
</body>
</html>
