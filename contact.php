<?php
include 'includes/header.php';
?>

<main>

    <!-- CONTACT HERO -->
    <section class="page-hero contact-page-hero">

        <div class="page-hero-content">

            <p class="section-label">
                Get in touch
            </p>

            <h1>
                Let's talk
                about your event.
            </h1>

            <p>
                Tell me a little about what you're planning
                and let's create something delicious together.
            </p>

        </div>

    </section>


    <!-- CONTACT AREA -->
    <section class="contact-section section">

        <div class="contact-info">

            <p class="section-label">
                Book with Mpumi
            </p>

            <h2>
                Have an event
                in mind?
            </h2>

            <p>
                Whether you're planning an intimate dinner,
                celebration or special event, I'd love to
                hear what you have in mind.
            </p>


            <div class="contact-details">

                <div class="contact-detail">

                    <span>
                        Instagram
                    </span>

                    <a
                        href="https://www.instagram.com/mpumi.lets.eat/"
                        target="_blank"
                        rel="noopener noreferrer">

                        @mpumi.lets.eat

                    </a>

                </div>


                <div class="contact-detail">

                    <span>
                        Email
                    </span>

                    <a href="mailto:hello@mpumiletseat.co.za">
                        hello@mpumiletseat.co.za
                    </a>

                </div>

            </div>

        </div>


        <!-- FORM -->
       
        <div class="contact-form-container">

            <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>

                <div class="form-success">
                    Thank you! Your enquiry has been received.
                    Mpumi will get back to you soon.
                </div>

            <?php endif; ?>

            <form
                class="booking-form"
                id="bookingForm"
                action="process-booking.php"
                method="POST">


                <div class="form-row">

                    <div class="form-group">

                        <label for="name">
                            Name *
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your name"
                            required>

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email *
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                            required>

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="phone">
                            Phone number
                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Your phone number">

                    </div>


                    <div class="form-group">

                        <label for="service">
                            Service *
                        </label>

                        <select id="service" name="service_id" required>
                                <option value="">
                                    Choose a service
                                </option>

                                <option value="1">
                                    Private Dining
                                </option>

                                <option value="2">
                                    Catering
                                </option>

                                <option value="3">
                                    Special Event
                                </option>
                            </select>

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="date">
                            Event date
                        </label>

                        <input
                            type="date"
                            id="date"
                            name="event_date">

                    </div>


                    <div class="form-group">

                        <label for="guests">
                            Number of guests
                        </label>

                        <input
                            type="number"
                            id="guests"
                            name="guests"
                            min="1"
                            placeholder="e.g. 20">

                    </div>

                </div>


                <div class="form-group">

                    <label for="location">
                        Event location
                    </label>

                    <input
                        type="text"
                        id="location"
                        name="location"
                        placeholder="Where will your event be held?">

                </div>


                <div class="form-group">

                    <label for="message">
                        Tell me about your event *
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Tell me about your event, what you have in mind and anything else I should know..."
                        required></textarea>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary form-submit">

                    Send Enquiry

                </button>

                <p
                    class="form-message"
                    id="formMessage">
                </p>

            </form>

        </div>

    </section>

</main>

<?php
include 'includes/footer.php';
?>