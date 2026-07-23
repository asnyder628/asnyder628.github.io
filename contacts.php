<!DOCTYPE html>
     <!--
  Name: Allison Snyder
  Date: June 23, 2026
  Course: Introduction to Web Design and Development
  Description: Contact Page for Allison Snyder Portfolio.
  -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
     <!-- Link to external CSS for styling -->
      <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css?v=2">
    <link rel="shortcut icon" href="FooterIcons/favicon.ico" type="image/x-icon">
</head>
<body>
   <?php include 'header.php'; ?>
 <main class="contact-page">

        <!-- Contact Page Introduction -->

        <section class="contact-introduction">

            <h1>Contact Me</h1>

            <p>
                Have a question, collaboration idea, or professional inquiry?
                Complete the form below, and I will respond as soon as possible.
            </p>

        </section>

        <!-- Contact Form Section -->

        <section class="contact-form-section">

            <h2>Send a Message</h2>

            <form
                class="contact-form"
                action="mailto:cwsnyders3gmai.com?Subject=Portfolio%20Contact%20Form"
                method="post"
                enctype="text/plain">

                <fieldset>

                    <legend>Contact Information</legend>

                    <!-- Title Dropdown -->

                    <div class="form-group">

                        <label for="title">
                            Title*
                        </label>

                        <select
                            id="title"
                            name="Title"
                            required
                            autofocus
                            tabindex="1">

                            <option value="" disabled selected>
                                Select your title (required)
                            </option>

                            <option value="Mr.">Mr.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Other">Other</option>

                        </select>

                    </div>

                    <!-- Full Name -->

                    <div class="form-group">

                        <label for="full-name">
                            Full Name*
                        </label>

                        <input
                            type="text"
                            id="full-name"
                            name="Full Name"
                            placeholder="Enter your full name (required)"
                            required
                            tabindex="2">

                    </div>

                    <!-- Email Address -->

                    <div class="form-group">

                        <label for="email">
                            Email Address*
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="Email Address"
                            placeholder="Enter your email address (required)"
                            required
                            tabindex="3">

                    </div>

                    <!-- Reason for Contact -->

                    <div class="form-group">

                        <label for="contact-reason">
                            Reason for Contact*
                        </label>

                        <select
                            id="contact-reason"
                            name="Reason for Contact"
                            required
                            tabindex="4">

                            <option value="" disabled selected>
                                Select a reason (required)
                            </option>

                            <option value="General Question">
                                General Question
                            </option>

                            <option value="Collaboration Opportunity">
                                Collaboration Opportunity
                            </option>

                            <option value="Portfolio Feedback">
                                Portfolio Feedback
                            </option>

                            <option value="Professional Inquiry">
                                Professional Inquiry
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>

                    <!-- Message -->

                    <div class="form-group">

                        <label for="message">
                            Message*
                        </label>

                        <textarea
                            id="message"
                            name="Message"
                            rows="7"
                            placeholder="Enter your message (required)"
                            required
                            tabindex="5"></textarea>

                    </div>

                    <!-- Submit Button -->

                    <button
                        class="contact-submit"
                        type="submit"
                        tabindex="6">
                        Submit Message
                    </button>
                    <p class="form-instructions">*Submitting this form will open your default email application.</p>

                </fieldset>

            </form>

        </section>

    </main>
<?php include 'footer.php'; ?>
</body>
</html>