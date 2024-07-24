<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="CodeHim">
      <title>Contact Us</title>
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

<link href="//db.onlinewebfonts.com/c/95cecf452d3208890088a5b4c19c7ecf?family=Helvetica+Neue+ME" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body>
      <main class="cd__main">
<div class="contact-container">
  <div class="left-col">
    <img class="logo" src="{{ asset('images/login_side_bg3.jpg') }}" style="width: 100%;height:100%;"/>
  </div>
  <div class="right-col">
    <div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
  </label>
  <div class="description">Dark Mode</div>
</div>
    
    <h1>Contact us</h1>
    <p>Thank you for choosing our services for your clothing needs. We are committed to providing you with the best experience possicle.
        Whether you have questions, need assistance with your measurements or want to inquire about our services, we're here to help.
    </p>
    
    <form id="#" method="post">
      <label for="name">Full name</label>
  <input type="text" id="name" name="name" placeholder="Your Full Name" required>
      <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="Your Email Address" required>
      <label for="message">Message</label>
  <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
    \<button type="submit" id="submit" name="submit">Send</button><!--</a>-->
  
</form>
<div id="error"></div>
<div id="success-msg"></div>
  </div>
</div>
      </main>
      <script src="{{ asset('js/contact.js') }}"></script>
   </body>
</html>