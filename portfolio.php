<!DOCTYPE html>
     <!--
Name: Allison Snyder
Date: July 23, 2026
Course: Introduction to Web Design and Development
Description: Responsive portfolio page showcasing instructional design,
immersive learning, accessibility, and educational technology projects.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
     <!-- Link to external CSS for styling -->
      <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css?v=2">
    <link rel="shortcut icon" href="FooterIcons/favicon.ico" type="image/x-icon">
</head>
<body>
   <?php include 'header.php'; ?>
<main>
    <!-- Portfolio section -->
        <section class="portfolio-introduction">

             <div class="portfolio-heading">

            <div class="heading-line"></div>

            <h1 class="portfolio-title">
                <span>✦</span>
                Projects
                <span>✦</span>
            </h1>

            <div class="heading-line"></div>

        </div>

        <h2 class="portfolio-subtitle">Overview</h2>

        <p>
        The projects in this portfolio showcase different aspects of my work
        in instructional design, immersive learning, accessibility, and
        educational technology. Each project reflects my commitment to
        creating engaging and meaningful learning experiences for students
        with diverse needs.
        </p>

    </section>

        <!-- Renaissance Virtual Gallery Project -->
<!-- Renaissance Virtual Gallery Project -->
<article class="portfolio-project" id="renaissance">

    <h2 class="project-title">Renaissance Virtual Gallery</h2>

    <!-- Supporting artifacts -->
    <section class="project-artifacts">
        <h3>Supporting Artifacts</h3>

        <div class="artifact-grid">

            <figure class="project-figure">
                <img
                    src="ProjectImages/renaissance-gallery.png"
                    alt="Overview of the Renaissance Virtual Gallery in Topia">

                <figcaption>
                    Renaissance Virtual Gallery Topia Environment
                </figcaption>
            </figure>

            <figure class="project-figure">
                <img
                    src="ProjectImages/michelangelo-exhibit.png"
                    alt="Interactive Michelangelo exhibit inside the Renaissance Virtual Gallery">

                <figcaption>
                    Interactive Michelangelo Learning Exhibit
                </figcaption>
            </figure>

        </div>
    </section>

    <!-- Project description -->
    <section class="project-description">
        <h3>Project Description</h3>

        <p>
            The Renaissance Virtual Gallery was created as one component of a
            larger Renaissance Fair designed for middle school history
            students. This virtual experience focused specifically on
            Renaissance artists, their artwork, achievements, and artistic
            mediums. Using Topia, I designed a virtual gallery that allowed
            students to explore exhibits featuring influential Renaissance
            figures and their contributions to art and culture.
        </p>

        <p>
            Rather than learning through a traditional lecture or worksheet,
            students were able to move through the gallery at their own pace
            and interact with exhibits throughout the space. The gallery
            included artwork, artist biographies, and additional information
            about important Renaissance achievements. My goal was to create an
            engaging learning experience that encouraged students to explore
            the content while experiencing a virtual art gallery environment.
            This project combined historical content, creativity, and
            technology to support student learning in a more interactive way.
        </p>
    </section>

    <!-- Expandable tools table -->
    <details class="project-dropdown">
        <summary>Tools Used</summary>

        <div class="dropdown-content">
            <div class="table-responsive">

                <table class="tools-table">
                    <caption>
                        Tools Used in the Renaissance Virtual Gallery Project
                    </caption>

                    <thead>
                        <tr>
                            <th scope="col">Tool</th>
                            <th scope="col">Purpose</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Topia</td>
                            <td>
                                Created the immersive virtual gallery
                                environment.
                            </td>
                        </tr>

                        <tr>
                            <td>Mindsmith</td>
                            <td>
                                Developed instructional content and learning
                                materials.
                            </td>
                        </tr>

                        <tr>
                            <td>Canva</td>
                            <td>
                                Designed graphics and visual learning
                                resources.
                            </td>
                        </tr>

                        <tr>
                            <td>AI Image Generation</td>
                            <td>
                                Created custom Renaissance-inspired artwork
                                and character images.
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="mobile-tools">

    <ul>

        <li>
            <strong>Topia</strong><br>
            <p>Created the immersive virtual gallery environment.</p>
        </li>

        <li>
            <strong>Mindsmith</strong><br>
            <p>Developed instructional content and learning materials.</p>
        </li>

        <li>
            <strong>Canva</strong><br>
            <p>Designed graphics and visual learning resources.</p>
        </li>

        <li>
            <strong>AI Image Generation</strong><br>
            <p>Created custom Renaissance-inspired artwork and character images.</p>
        </li>

    </ul>

</div>
    </details>

    <!-- Expandable reflection -->
    <details class="project-dropdown">
        <summary>Project Reflection</summary>

        <div class="dropdown-content">
            <p>
                Creating the Renaissance Virtual Gallery reinforced my belief
                that students learn best when they can actively explore content
                rather than simply read about it. One of my favorite parts of
                this project was designing the gallery space and selecting the
                artwork and information that students would encounter as they
                moved through the exhibits. I also used AI-generated images to
                place my teaching partner and me within the gallery as
                Renaissance artwork. My teaching partner was featured as the
                Mona Lisa, while I was incorporated into a
                Michelangelo-inspired statue. The students thought this was
                hilarious and immediately became more invested in exploring
                the gallery.
            </p>

            <p>
                This project gave me an opportunity to experiment with
                technology as a tool for creating more meaningful learning
                experiences. It reminded me that small creative touches can
                make learning more memorable and help students connect with
                content in unexpected ways. Seeing how excited students were
                to explore the gallery strengthened my interest in educational
                technology and immersive learning experiences.
            </p>
        </div>
    </details>

    <p class="ai-statement">
        The project description and reflection were created with assistance
        from ChatGPT.
    </p>

</article>
<!-- Winter Wonderland Project -->
<article class="portfolio-project" id="winter">

    <h2 class="project-title">Winter Wonderland Learning Experience</h2>

    <!-- Supporting Artifacts -->
    <section class="project-artifacts">

        <h3>Supporting Artifacts</h3>

        <div class="artifact-grid">

            <figure class="project-figure">

                <video controls>
                    <source src="ProjectImages/Winter-Wonderland-Overview.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <figcaption>
                    Winter Wonderland Walkthrough Video (3 Minutes)
                </figcaption>

            </figure>

            <figure class="project-figure">

                <img
                    src="ProjectImages/Winter-Wonderland.png"
                    alt="Build-a-Snowman Creative Writing Station">

                <figcaption>
                    Build-a-Snowman Creative Writing Station
                </figcaption>

            </figure>

        </div>

    </section>

    <!-- Project Description -->

    <section class="project-description">

        <h3>Project Description</h3>

        <p>
            The Winter Wonderland Learning Experience was a cross-curricular
            virtual learning environment designed to connect multiple subject
            areas through a single winter-themed experience. Students explored
            a variety of interactive stations that incorporated reading,
            writing, math, science, and social studies concepts. Activities
            included a snow globe-themed math escape room, winter holiday
            readings, creative writing activities, lessons on friction and
            animal adaptations, the science of cookie baking, and the history
            of gingerbread.
        </p>

        <p>
            My goal was to create an engaging learning experience that allowed
            students to move between subjects while remaining immersed in a
            common theme. Rather than treating each subject as a separate
            lesson, students were able to make connections across content areas
            through exploration and interactive activities. This project
            combined creativity, instructional design, and educational
            technology to create an unforgettable learning experience that
            encouraged student participation and curiosity.
        </p>

    </section>

    <!-- Expandable Tools Table -->

    <details class="project-dropdown">

        <summary>Tools Used</summary>

        <div class="dropdown-content">

            <div class="table-responsive">

                <table class="tools-table">

                    <caption>
                        Tools Used in the Winter Wonderland Learning Experience
                    </caption>

                    <thead>

                        <tr>
                            <th scope="col">Tool</th>
                            <th scope="col">Purpose</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>Topia</td>
                            <td>Created the virtual learning environment.</td>
                        </tr>

                        <tr>
                            <td>Mindsmith</td>
                            <td>Developed instructional content and activities.</td>
                        </tr>

                        <tr>
                            <td>Canva</td>
                            <td>Designed visuals and student resources.</td>
                        </tr>

                        <tr>
                            <td>Padlet</td>
                            <td>Provided interactive student collaboration activities.</td>
                        </tr>

                        <tr>
                            <td>AI Image Generation</td>
                            <td>Created custom winter-themed graphics.</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <div class="mobile-tools">

    <ul>

        <li>
            <strong>Topia</strong><br>
            <p>Created the virtual learning environment.</p>
        </li>

        <li>
            <strong>Mindsmith</strong><br>
            <p>Developed instructional content and activities.</p>
        </li>

        <li>
            <strong>Canva</strong><br>
            <p>Designed visuals and student resources.</p>
        </li>

        <li>
            <strong>Padlet</strong><br>
            <p>Provided interactive student collaboration activities.</p>
        </li>

        <li>
            <strong>AI Image Generation</strong><br>
            <p>Created custom winter-themed graphics.</p>
        </li>

    </ul>

</div>

    </details>

    <!-- Expandable Reflection -->

    <details class="project-dropdown">

        <summary>Project Reflection</summary>

        <div class="dropdown-content">

            <p>
                The Winter Wonderland Learning Experience is one of my favorite
                projects because it allowed me to bring multiple subjects
                together into a single learning environment. I enjoyed designing
                activities that connected reading, writing, math, science, and
                social studies while still feeling like one cohesive
                experience. One of my favorite stations was the Build-a-
                Snowman activity, where students created a snowman and then
                wrote a story about its adventures. It gave students an
                opportunity to be creative while practicing important literacy
                skills.
            </p>

            <p>
                This project reinforced my belief that learning does not have to
                be divided into isolated subjects. When students are given
                opportunities to explore content through relevant themes and
                interactive activities, they are often more engaged and willing
                to take academic risks. Creating this experience strengthened my
                interest in instructional design and showed me how technology
                can be used to create captivating learning opportunities.
            </p>

        </div>

    </details>

    <p class="ai-statement">
        The project description and reflection were created with assistance
        from ChatGPT.
    </p>

</article>

<!-- Immersive Assessment Conference Proposal -->
<article class="portfolio-project" id="assessment">

    <h2 class="project-title">
        Immersive Assessment Conference Proposal
    </h2>

    <!-- Supporting Artifacts -->
    <section class="project-artifacts">

        <h3>Supporting Artifacts</h3>

        <div class="artifact-grid">

            <!-- Conference proposal PDF -->
            <figure class="project-figure">

                <div class="document-frame">
                    <object
                    data="ProjectImages/Ignite2026Proposal.pdf"
                    type="application/pdf"
                    aria-label="Preview of the DLAC Ignite 2026 conference proposal">
                    <p>
                    Your browser cannot display the PDF preview.
                        <a
                        href="ProjectImages/Ignite2026Proposal.pdf"
                        target="_blank"
                        rel="noopener noreferrer">
                        Open the conference proposal PDF
                        </a>.
                    </p>

                    </object>
                </div>
                <a
                href="ProjectImages/Ignite2026Proposal.pdf"
                class="artifact-link"
                target="_blank"
                rel="noopener noreferrer">
                View Full Proposal
                </a>

                <figcaption>
                 DLAC Ignite 2026 Conference Proposal
                </figcaption>

            </figure>

           <!-- Canva Presentation -->
           <figure class="project-figure">

                <div class="canva-embed">
                    <iframe
                    loading="lazy"
                    src="https://www.canva.com/design/DAHPjmf7Vew/oqmUGPhvLdumuUBG6m_NUA/view?embed"
                    title="Zone In! Transforming Digital Spaces into Student Adventures conference presentation"
                    allowfullscreen
                    allow="fullscreen">
                    </iframe>
                </div>
                <a
                href="https://www.canva.com/design/DAHPjmf7Vew/oqmUGPhvLdumuUBG6m_NUA/view?utm_content=DAHPjmf7Vew&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link"
                class="artifact-link"
                target="_blank"
                rel="noopener noreferrer">
                Open Presentation in Canva
                </a>

                <p class="artifact-credit">
                    Presentation created collaboratively by Allison Snyder and Kim Lunsford.
                </p>

                <figcaption>
                    <cite>
                    Zone In! Transforming Digital Spaces into Student Adventures
                    </cite>
                    Interactive Conference Presentation
                </figcaption>

            </figure>

        </div>

    </section>

    <!-- Project Description -->
    <section class="project-description">

        <h3>Project Description</h3>

        <p>
            <cite>
                Zone In! Transforming Digital Spaces into Student Adventures
            </cite>
            was developed as a conference presentation proposal for DLAC
            Ignite 2026. This project was created in collaboration with my
            teaching partner, Kim Lunsford, and was inspired by our experiences
            creating immersive learning environments for students. As we
            experimented with virtual worlds and interactive learning
            experiences, we began to notice that students were often more
            engaged when learning felt like an experience rather than a task.
        </p>

        <p>
            Our goal for this session was to help other educators explore how
            immersive environments can be used for both instruction and
            assessment. Instead of presenting information through a traditional
            slideshow, participants will experience immersive learning
            firsthand through a scavenger hunt built within a Topia world. As
            they move through the environment, they will encounter challenges,
            clues, and opportunities for collaboration while reflecting on the
            instructional strategies embedded throughout the experience. This
            project reflects my interest in educational technology, game-based
            learning, and creating alternatives to traditional assessment
            practices.
        </p>

    </section>

    <!-- Expandable Tools Table -->
    <details class="project-dropdown">

        <summary>Tools Used</summary>

        <div class="dropdown-content">

            <div class="table-responsive">

                <table class="tools-table">

                    <caption>
                        Tools Used in the Immersive Assessment Conference
                        Proposal
                    </caption>

                    <thead>
                        <tr>
                            <th scope="col">Tool</th>
                            <th scope="col">Purpose</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Topia</td>
                            <td>
                                Created the immersive scavenger-hunt environment
                                used during the conference session.
                            </td>
                        </tr>

                        <tr>
                            <td>Canva</td>
                            <td>
                                Designed the conference presentation and visual
                                materials.
                            </td>
                        </tr>

                        <tr>
                            <td>Google Docs</td>
                            <td>
                                Supported collaborative planning and proposal
                                development.
                            </td>
                        </tr>

                        <tr>
                            <td>PDF</td>
                            <td>
                                Provided a shareable version of the completed
                                conference proposal.
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <div class="mobile-tools">

    <ul>

        <li>
            <strong>Topia</strong><br>
            <p>Created the immersive scavenger-hunt environment used during the conference session.</p>
        </li>

        <li>
            <strong>Canva</strong><br>
            <p>Designed the conference presentation and visual materials.</p>
        </li>

        <li>
            <strong>Google Docs</strong><br>
            <p>Supported collaborative planning and proposal development.</p>
        </li>

        <li>
            <strong>PDF</strong><br>
           <p>Provided a shareable version of the completed conference proposal.</p>
        </li>

    </ul>

</div>

    </details>

    <!-- Expandable Project Reflection -->
    <details class="project-dropdown">

        <summary>Project Reflection</summary>

        <div class="dropdown-content">

            <p>
                This project represents many of the ideas that originally
                inspired me to pursue a master's degree in Learning Technologies
                and Design. Throughout my teaching career, I have been
                interested in finding ways for students to demonstrate their
                learning beyond worksheets and traditional assessments.
                Designing a conference session around immersive learning gave
                me an opportunity to share those ideas with other educators
                while also reflecting on my own instructional practices.
            </p>

            <p>
                One aspect I especially enjoyed was designing the experience so
                participants would learn by doing. Instead of listening to a
                presentation about immersive learning, participants become
                active learners within the experience itself by completing a
                scavenger hunt that models the strategies being discussed. I
                believe this approach is more powerful because it allows
                learners to experience the benefits of immersion,
                collaboration, and inquiry firsthand.
            </p>

            <p>
                This project reinforced my belief that learning should be
                experienced rather than simply completed. It also strengthened
                my interest in designing learning environments that blend
                technology, creativity, and authentic assessment to create
                opportunities for success.
            </p>

        </div>

    </details>

    <p class="ai-statement">
        The project description and reflection were created with assistance
        from ChatGPT.
    </p>

</article>

<!-- Reading Intervention Curriculum -->
<article class="portfolio-project" id="reading">

    <h2 class="project-title">
        Reading Intervention Curriculum
    </h2>

    <!-- Supporting Artifacts -->
    <section class="project-artifacts">

        <h3>Supporting Artifacts</h3>

        <div class="artifact-grid">

            <!-- Lesson Plan PDF -->
            <figure class="project-figure">

                <div class="document-frame">

                    <object
                        data="ProjectImages/BlueBirdLessonPlan3.pdf"
                        type="application/pdf"
                        aria-label="Reading Intervention Lesson Plan">

                        <p>
                            Your browser cannot display the PDF preview.
                            <a
                                href="ProjectImages/BlueBirdLessonPlan3.pdf"
                                target="_blank">
                                Open the Lesson Plan PDF
                            </a>.
                        </p>

                    </object>

                </div>
                <a
                    href="ProjectImages/BlueBirdLessonPlan3.pdf"
                    class="artifact-link"
                    target="_blank">
                    View Lesson Plan
                </a>

                <figcaption>
                    Blue Birds Reading Intervention Lesson Plan (Lesson 3)
                </figcaption>

            </figure>

            <!-- ClassKick PDF -->
            <figure class="project-figure">

                <div class="document-frame">

                    <object
                        data="ProjectImages/BlueBirdLessonClassKick.pdf"
                        type="application/pdf"
                        aria-label="Blue Birds ClassKick Independent Practice">

                        <p>
                            Your browser cannot display the PDF preview.
                            <a
                                href="ProjectImages/BlueBirdLessonClassKick.pdf"
                                target="_blank">
                                Open the ClassKick Activity PDF
                            </a>.
                        </p>

                    </object>

                </div>

                <a
                    href="ProjectImages/BlueBirdLessonClassKick.pdf"
                    class="artifact-link"
                    target="_blank">
                    View ClassKick Activity
                </a>
                <figcaption>
                    ClassKick Independent Practice Activity
                </figcaption>

            </figure>

        </div>

    </section>

    <!-- Project Description -->
    <section class="project-description">

        <h3>Project Description</h3>

        <p>
            This reading intervention curriculum was designed for students who
            need additional support in developing foundational reading skills.
            Created for small-group intervention instruction, the curriculum
            focuses on phonics, sight words, decoding, fluency, and reading
            confidence through a structured and predictable lesson format. Each
            lesson includes direct instruction, guided practice, word-building
            activities, decodable reading passages, and independent practice
            opportunities.
        </p>

        <p>
            As a special education teacher, I work with many students who have
            experienced repeated challenges with reading. My goal when creating
            this curriculum was to break skills into manageable steps while
            providing students with frequent opportunities for success. During
            instruction, I often use an E-Glass so students can see me and the
            way my mouth moves to form sounds while also viewing the letters and
            words written in front of them. This allows students to connect
            sounds, letter patterns, and mouth movements simultaneously as I
            model reading skills. I also incorporate digital tools such as
            ClassKick to provide opportunities for independent practice and
            audio responses. This project reflects my commitment to
            accessibility, differentiated instruction, and creating learning
            experiences that help students build both academic skills and
            confidence as readers.
        </p>

    </section>

    <!-- Expandable Tools Table -->
    <details class="project-dropdown">

        <summary>Tools Used</summary>

        <div class="dropdown-content">

            <div class="table-responsive">

                <table class="tools-table">

                    <caption>
                        Tools Used in the Reading Intervention Curriculum
                    </caption>

                    <thead>

                        <tr>
                            <th scope="col">Tool</th>
                            <th scope="col">Purpose</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>E-Glass</td>
                            <td>
                                Modeled mouth movements and phonics instruction
                                during live lessons.
                            </td>
                        </tr>

                        <tr>
                            <td>ClassKick</td>
                            <td>
                                Provided independent practice, audio responses,
                                and student feedback.
                            </td>
                        </tr>

                        <tr>
                            <td>Canvas</td>
                            <td>
                                Organized instructional materials and student
                                resources.
                            </td>
                        </tr>

                        <tr>
                            <td>Microsoft Word</td>
                            <td>
                                Created lesson plans and instructional
                                materials.
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <div class="mobile-tools">

    <ul>

        <li>
            <strong>E-Glass</strong><br>
            <p>Modeled mouth movements and phonics instruction during live lessons.</p>
        </li>

        <li>
            <strong>ClassKick</strong><br>
            <p>Provided independent practice, audio responses, and student feedback.</p>
        </li>

        <li>
            <strong>Canvas</strong><br>
            <p>Organized instructional materials and student resources.</p>
        </li>

        <li>
            <strong>Microsoft Word</strong><br>
            <p>Created lesson plans and instructional materials.</p>
        </li>

    </ul>

</div>

    </details>

    <!-- Expandable Reflection -->
    <details class="project-dropdown">

        <summary>Project Reflection</summary>

        <div class="dropdown-content">

            <p>
                This project is especially meaningful to me because it reflects
                the work I do every day as a special education teacher. While I
                enjoy creating immersive learning experiences and technology-rich
                projects, I believe it is equally important to design
                instruction that meets students where they are. Many of my
                students have struggled with reading for years and often come
                into intervention lacking confidence in their abilities.
                Creating this curriculum challenged me to think carefully about
                how skills are introduced, practiced, and reinforced so students
                can experience success along the way.
            </p>

            <p>
                One aspect of this project that I am particularly proud of is
                the balance between structure and flexibility. Each lesson
                follows a consistent routine, which helps students know what to
                expect, while still providing opportunities for engagement and
                growth. This project reinforced my belief that good
                instructional design is not always about creating something
                flashy or innovative. Sometimes it is about creating the right
                supports so students can be successful and begin to see
                themselves as capable learners.
            </p>

        </div>

    </details>

    <p class="ai-statement">
        The project description and reflection were created with assistance
        from ChatGPT.
    </p>

</article>
</main>
<?php include 'footer.php'; ?>
</body>
</html>