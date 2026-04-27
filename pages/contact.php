<?php include '../includes/header.php'; 

$statusMessage = "";
$statusType = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    
    $nameValid = preg_match("/^[a-zA-Z\s]{2,50}$/", $name);
    $emailValid = preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/", $email);
    
    if (!$nameValid && !$emailValid) {
        $statusMessage = "Name and email are incorrect";
        $statusType = "error";
    }
    elseif (!$nameValid) {
        $statusMessage = "Invalid name";
        $statusType = "error";
    }
    elseif (!$emailValid) {
        $statusMessage = "Invalid email";
        $statusType = "error";
    }
    elseif (empty($message)) {
        $statusMessage = "Message cannot be empty";
        $statusType = "error";
    }
    else {
        $statusMessage = "Message sent successfully";
        $statusType = "success";
    }
}
?>

    <section  id="page-header" class="contact-header">
       <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

     <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2 style="line-height: normal;">Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <p><i class="fal fa-map"></i>56 Glassford Street Glasgow G1 1UL New York</p>
                </li>
                <li>
                    <p><i class="far fa-envelope"></i>contact@example.com </p>
                </li>
                <li>
                    <p><i class="fas fa-phone-alt"></i>contact@example.com </p>
                </li>
                <li>
                    <p><i class="far fa-clock"></i>Monday to Saturday: 9.00am to 16.pm </p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.8088025254456!2d-1.256555484681452!3d51.754819700404106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sbd!4v1637232208485!5m2!1sen!2sbd"
                width="600" height="450" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

   <section id="form-details">
    <form id="contactForm" action="contact.php#form-details" method="POST">
   
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you </h2>


        <?php if (!empty($statusMessage)) { ?>
    <p style="color: <?php echo ($statusType == "error") ? "red" : "green"; ?>; font-weight:bold;">
        <?php echo $statusMessage; ?>
    </p>
<?php } ?>




        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <input type="text" name="email" id="email" placeholder="E-mail" required>
        <input type="text" name="subject" id="subject" placeholder="Subject">
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
        <button type="submit" class="normal">Submit</button>
    </form>

        <div class="people">
            <div>
                <img src="../assets/img/people/1.png" alt="">
                <p><span>John Doe </span> Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="../assets/img/people/2.png" alt="">
                <p><span>William Smith</span> Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="../assets/img/people/3.png" alt="">
                <p><span>Emma Stone</span> Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
        </div>
    </section>
    
    <section id="newsletter" class="container">
    <div class="newstext">
      <h4>Sign up for newsletter</h4>
      <p>Get notification about everything new and <span>special offers!</span></p>
    </div>

    <div class="form">
      <input type="text" placeholder="Your email Address">
      <button class="normal">Sign up</button>
    </div>
    </section>

<?php include '../includes/footer.php'; ?>