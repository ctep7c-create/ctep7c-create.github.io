<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <style>
 
    .table-card {
      width: 100%;
      max-width: 900px;
      margin: 2rem auto;
      border-radius: 12px;
      border: 2px solid #1D2328;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      background-color: #E1EDE0;
      font-family: League-Spartan, sans-serif;
    }

    .table-card figcaption {
      font-weight: bold;
      font-size: 1.2rem;
      padding: 1rem 1.5rem;
      background-color: #E1EDE0;
      color: #1D2328;
      text-align: center;
    }

    .table-card table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
    }

    thead th {
      background-color: #E1EDE0;
      color: #1D2328;
      padding: 12px 16px;
      text-align: left;
    }

    td, th[scope="row"] {
      padding: 12px 16px;
      vertical-align: top;
      text-align: left;
    }

    tbody tr:nth-child(1),
    tbody tr:nth-child(3),
    tbody tr:nth-child(5) {
      background-color: #659857;
      color: #FFFFFF;
    }

    tbody tr:nth-child(odd):not(:nth-child(1)):not(:nth-child(3)):not(:nth-child(5)) {
      background-color: #E1EDE0;
      color: #1D2328;
    }

    tbody tr:nth-child(even) {
      background-color: #F3F4F1;
      color: #1D2328;
    }
    
    .table-card td, .table-card th {
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body class="about">
    <?php include 'header.html'; ?>

  <main>
    <!-- Text transform (uppercase) and 700 weight used for H2 -->
    <h2>Professional Skills Overview</h2>
    <p>Need a referesher on the skills I can provide? The table below showcases key skills and descriptions of how I have developed them over time. Use this as a reference when reaching out to contact me.</p>
    <figure class="table-card">
      <figcaption><strong>Gained Professional Skills and Descriptions</strong></figcaption>
      <table>
        <caption>Table listing skills I have earned in my professional roles and their descriptions.</caption>
        <thead>
          <tr>
            <th scope="col">Skill</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Curriculum Design</th>
            <td>Develop thematic units, culturally responsive lessons, and eLearning modules for diverse learners across K–8 and higher education.</td>
          </tr>
          <tr>
            <th scope="row">Facilitation & Teaching</th>
            <td>Lead engaging instructional sessions, workshops, and trainings for small to large groups.</td>
          </tr>
          <tr>
            <th scope="row">Training & Staff Development</th>
            <td>Onboard, mentor, and coach student leaders, facilitators, and professional staff.</td>
          </tr>
          <tr>
            <th scope="row">Program Management</th>
            <td>Manage academic support programs, coordinate logistics, and use data to improve operations and student outcomes.</td>
          </tr>
          <tr>
            <th scope="row">Stakeholder Communication</th>
            <td>Communicate effectively with students, faculty, alumni, and community partners across digital and in-person channels.</td>
          </tr>
        </tbody>
      </table>
    </figure>

    <h2>Contact Form</h2>
    <form class="contact-form" action="mailto:ctevans@umkc.edu?subject=Form%20Submission" method="post" enctype="text/plain">
      <label for="title">Title:</label>
      <select id="title" name="title" required tabindex="0">
        <option value="" disabled selected>Select your option</option>
        <option value="Mr.">Mr.</option>
        <option value="Ms.">Ms.</option>
        <option value="Mrs.">Mrs.</option>
        <option value="Mx.">Mx.</option>
        <option value="Dr.">Dr.</option>
      </select>

      <label for="full-name">Full Name:</label>
      <input type="text" id="full-name" name="full-name" placeholder="Enter your First and Last Name" required tabindex="1">

      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" placeholder="Enter your Email Address" required tabindex="2">

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" placeholder="Enter your Phone Number" required tabindex="3">

      <label for="message">Message:</label>
      <textarea id="message" name="message" placeholder="Enter your message here..." required tabindex="4"></textarea>

      <label for="contact-email">Preferred Method of Contact:</label>
      <ol>
        <li>
          <input type="radio" id="contact-email" name="preferred-contact" value="Email" required tabindex="5">
          <label for="contact-email">Email</label>
        </li>
        <li>
          <input type="radio" id="contact-phone" name="preferred-contact" value="Phone" required tabindex="6">
          <label for="contact-phone">Phone</label>
        </li>
      </ol>

      <div>
        <input type="submit" value="Submit" tabindex="7">
      </div>
    </form>
  </main>

    <?php include 'footer.html'; ?>
</body>
</html>














