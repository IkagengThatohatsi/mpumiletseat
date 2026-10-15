<?php
include 'includes/header.php';
?>

<main>

    <!-- PAGE HERO -->
    <section class="page-hero work-page-hero">

        <div class="page-hero-content">

            <p class="section-label">
                My work
            </p>

            <h1>
                A taste of
                what I do.
            </h1>

            <p>
                A collection of dishes, experiences and moments
                from the Mpumi Lets Eat kitchen.
            </p>

        </div>

    </section>


    <section class="gallery-section section">

    <div class="gallery-header">
        <div>
            <p class="section-label">
                Selected work
            </p>

            <h2>
                From my kitchen
                to your table.
            </h2>
        </div>

        <p>
            Explore a selection of culinary creations,
            events and behind-the-scenes moments.
        </p>
    </div>


    <div class="slideshow">

        <div class="slides">

            <!-- SLIDE 01 -->
            <div class="slide active">
                <img src="assets/dish-1.jpg"
                     alt="Featured culinary creation">
            </div>

            <!-- SLIDE 02 -->
            <div class="slide">
                <img src="assets/dish-2.jpg"
                     alt="Food preparation">
            </div>

            <!-- SLIDE 03 -->
            <div class="slide">
                <img src="assets/dish-3.jpg"
                     alt="Prepared dish">
            </div>

            <!-- SLIDE 04 -->
            <div class="slide">
                <img src="assets/dish-4.jpg"
                     alt="Culinary experience">
            </div>

            <!-- SLIDE 05 -->
            <div class="slide">
                <img src="assets/dish-5.jpg"
                     alt="Chef preparing food">
            </div>

            <!-- SLIDE 06 -->
            <div class="slide">
                <img src="assets/dish-6.jpg"
                     alt="Food presentation">
            </div>

        </div>


        <!-- PREVIOUS / NEXT BUTTONS -->

        <button class="slide-btn slide-prev" id="prevSlide" aria-label="Previous image">
            ←
        </button>

        <button class="slide-btn slide-next" id="nextSlide" aria-label="Next image">
            →
        </button>


        <!-- SLIDE COUNTER -->

        <div class="slide-counter">
            <span id="currentSlide">01</span>
            <span class="counter-line"></span>
            <span>06</span>
        </div>

    </div>


    <!-- DOT NAVIGATION -->

    <div class="slide-dots" id="slideDots">

        <button class="slide-dot active" data-slide="0" aria-label="Go to image 1"></button>
        <button class="slide-dot" data-slide="1" aria-label="Go to image 2"></button>
        <button class="slide-dot" data-slide="2" aria-label="Go to image 3"></button>
        <button class="slide-dot" data-slide="3" aria-label="Go to image 4"></button>
        <button class="slide-dot" data-slide="4" aria-label="Go to image 5"></button>
        <button class="slide-dot" data-slide="5" aria-label="Go to image 6"></button>

    </div>

</section>


    <!-- INSTAGRAM -->
    <section class="instagram-section section">

        <p class="section-label">
            Follow along
        </p>

        <h2>
            More from the kitchen.
        </h2>

        <p>
            Follow Mpumi Lets Eat on Instagram for more food,
            behind-the-scenes moments and new creations.
        </p>

        <a
            href="https://www.instagram.com/mpumi.lets.eat/"
            target="_blank"
            rel="noopener noreferrer"
            class="btn btn-primary">

            Follow on Instagram

        </a>

    </section>


</main>

<?php
include 'includes/footer.php';
?>