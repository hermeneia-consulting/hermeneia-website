# Hermeneia Project Page Template

Canonical visual reference for all project case-study pages.

## Preserve
- shared class names
- section order
- video hero treatment
- findings-grid structure
- technical implementation structure
- canonical footer

## May vary
- project-specific headings
- findings vs analytical questions
- future-state content
- metrics
- workflow image
- repository link

## Usage
Copy the HTML below into a new project `.html` file.
Do not edit this template to create a live page.

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PROJECT TITLE | Hermeneia</title>

  <link rel="stylesheet" href="style.css?v=6">
</head>

<body>

  <!-- ========================================
       PROJECT PAGE TEMPLATE

       PRESERVE:
       - shared class names
       - section order
       - footer structure
       - project hero treatment
       - findings grid structure
       - technical implementation structure

       CHANGE:
       - project-specific content
       - metrics
       - headings where appropriate
       - workflow image
       - repository URL
       ======================================== -->


  <!-- ========================================
       HEADER
       ======================================== -->

  <header>

    <a class="brand" href="index.html">
      <img src="images/hermeneia-logo.png" alt="Hermeneia logo">
    </a>

    <nav>
      <a href="about.html">ABOUT</a>
      <a href="areas-of-focus.html">AREAS OF FOCUS</a>
      <a href="index.html#projects">PROJECTS</a>
      <a href="insights.html">INSIGHTS</a>
      <a href="contact.html">CONTACT</a>
    </nav>

  </header>


  <main>

    <!-- ========================================
         PROJECT HERO
         ======================================== -->

    <section class="project-detail-hero">

      <video class="project-hero-video" autoplay muted loop playsinline>
        <source src="video/hero-network.mp4" type="video/mp4">
      </video>

      <div class="project-hero-overlay"></div>

      <div class="project-detail-copy">

        <p class="project-detail-label">
          PROJECT AREA / DOMAIN
        </p>

        <h1>
          PROJECT CASE STUDY TITLE<span class="cursor"></span>
        </h1>

        <p>
          Concise project framing: what operational or technical problem
          this case study investigates.
        </p>

      </div>

    </section>


    <!-- ========================================
         PROJECT SNAPSHOT
         ======================================== -->

    <section class="project-snapshot">

      <div class="snapshot-item">
        <span class="snapshot-number">00</span>
        <span class="snapshot-label">METRIC ONE</span>
      </div>

      <div class="snapshot-item">
        <span class="snapshot-number">00</span>
        <span class="snapshot-label">METRIC TWO</span>
      </div>

      <div class="snapshot-item">
        <span class="snapshot-number">00</span>
        <span class="snapshot-label">METRIC THREE</span>
      </div>

      <div class="snapshot-item">
        <span class="snapshot-number">00</span>
        <span class="snapshot-label">METRIC FOUR</span>
      </div>

    </section>


    <!-- ========================================
         THE OPERATIONAL PROBLEM
         ======================================== -->

    <section class="project-problem">

      <div class="project-section-heading">

        <span class="text-marker">&lt;</span>

        <div>

          <h2>THE OPERATIONAL PROBLEM</h2>

          <p>
            Describe the real-world workflow problem, limitation,
            fragmentation, or operational question.
          </p>

          <p>
            Add a second paragraph when needed to explain complexity,
            handoffs, systems, actors, or workflow variation.
          </p>

        </div>

      </div>

    </section>


    <!-- ========================================
         CURRENT-STATE WORKFLOW / VISUAL
         ======================================== -->

    <section class="project-workflow-visual">

      <img
        src="images/PROJECT-WORKFLOW-IMAGE.png"
        alt="Description of the project workflow"
      >

    </section>


    <!-- ========================================
         FROM WORKFLOW TO DATA MODEL
         ======================================== -->

    <section class="project-data-model">

      <div class="project-section-heading">

        <span class="text-marker">&lt;</span>

        <div>

          <h2>FROM WORKFLOW TO DATA MODEL</h2>

          <p>
            Explain how the operational workflow informed the relational
            model, analytical structure, or technical representation.
          </p>

          <p>
            This heading may change when the project requires different
            language, but preserve the component and visual treatment.
          </p>

        </div>

      </div>

    </section>


    <!-- ========================================
         FINDINGS / ANALYTICAL QUESTIONS
         ======================================== -->

    <section class="project-findings">

      <h2>
        WHAT THE DATA REVEALED
      </h2>

      <!--
        Alternate project-stage heading:
        WHAT THE MODEL IS DESIGNED TO EXPLORE
      -->

      <div class="findings-grid">

        <article class="finding-card">

          <span class="finding-number">01</span>

          <h3>FINDING / QUESTION ONE</h3>

          <p>
            Supporting interpretation or analytical question.
          </p>

        </article>


        <article class="finding-card">

          <span class="finding-number">02</span>

          <h3>FINDING / QUESTION TWO</h3>

          <p>
            Supporting interpretation or analytical question.
          </p>

        </article>


        <article class="finding-card">

          <span class="finding-number">03</span>

          <h3>FINDING / QUESTION THREE</h3>

          <p>
            Supporting interpretation or analytical question.
          </p>

        </article>


        <article class="finding-card">

          <span class="finding-number">04</span>

          <h3>FINDING / QUESTION FOUR</h3>

          <p>
            Supporting interpretation or analytical question.
          </p>

        </article>

      </div>

    </section>


    <!-- ========================================
         PROJECT EVOLUTION
         ======================================== -->

    <section class="project-evolution">

      <div class="project-section-heading">

        <span class="text-marker">&lt;</span>

        <div>

          <h2>PROJECT EVOLUTION</h2>

          <p>
            Explain how the project changed as the workflow, data,
            or operational problem became better understood.
          </p>

          <p>
            Preserve this section when the evolution itself demonstrates
            analytical or systems thinking.
          </p>

        </div>

      </div>

    </section>


    <!-- ========================================
         FROM ANALYSIS / MODEL TO NEXT PHASE
         ======================================== -->

    <section class="project-evolution">

      <div class="project-section-heading">

        <span class="text-marker">&lt;</span>

        <div>

          <h2>FROM ANALYSIS TO PROCESS DESIGN</h2>

          <!--
            Alternate:
            FROM MODEL TO OPERATIONAL ANALYSIS
          -->

          <p>
            Explain how the project moves from analysis or modeling
            toward operational application, validation, intervention,
            or process improvement.
          </p>

        </div>

      </div>

    </section>


    <!-- ========================================
         FUTURE-STATE DIRECTION
         ======================================== -->

    <section class="project-future-state">

      <h2>FUTURE-STATE DIRECTION</h2>

      <div class="future-state-flow">

        <span>FUTURE STATE ONE</span>
        <span>→</span>

        <span>FUTURE STATE TWO</span>
        <span>→</span>

        <span>FUTURE STATE THREE</span>

      </div>

    </section>


    <!-- ========================================
         TECHNICAL IMPLEMENTATION
         ======================================== -->

    <section class="project-technical">

      <div class="project-technical-content">

        <p class="project-detail-label">
          TECHNICAL IMPLEMENTATION
        </p>

        <h2>
          TOOL · TOOL · METHOD · METHOD
        </h2>

        <!-- Optional project-specific technical context -->

        <p class="technical-description">
          Briefly explain how the tools and methods support the project.
          Keep this concise and operationally relevant.
        </p>

        <p class="technical-note">
          Version controlled with Git + GitHub
        </p>

        <a
          class="hero-button"
          href="PROJECT-REPOSITORY-URL"
          target="_blank"
          rel="noopener noreferrer"
        >
          VIEW TECHNICAL REPOSITORY
        </a>

      </div>

    </section>

  </main>


  <!-- ========================================
       FOOTER
       CANONICAL FOOTER — MATCH contact.html
       ======================================== -->

  <footer class="site-footer">

    <div class="footer-brand-column">

      <a class="footer-logo" href="index.html">
        <img src="images/hermeneia-logo.png" alt="Hermeneia logo">
      </a>

    </div>


    <div class="footer-contact-column">

      <a
        class="footer-contact-item"
        href="mailto:hello@askhermeneia.com"
      >
        <span class="footer-contact-icon">✉</span>
        <span>hello@askhermeneia.com</span>
      </a>

      <a
        class="footer-contact-item"
        href="https://www.linkedin.com/in/marilismarrero/"
        target="_blank"
        rel="noopener noreferrer"
      >
        <img src="images/linkedin-icon.png" alt="">
        <span>LinkedIn</span>
      </a>

      <a
        class="footer-contact-item"
        href="https://github.com/hermeneia-consulting"
        target="_blank"
        rel="noopener noreferrer"
      >
        <img src="images/github-icon.png" alt="">
        <span>GitHub</span>
      </a>

    </div>


    <div class="footer-publication-column">

      <p class="footer-publication-label">
        THE HUMAN OVERRIDE
      </p>

      <p class="footer-publication-copy">
        Healthcare AI, governance, and the human layer.
      </p>

      <div class="footer-newsletter">

        <iframe
          src="https://thehumanoverride.substack.com/embed"
          width="480"
          height="320"
          style="border: 1px solid #EEE; background: white"
          frameborder="0"
          scrolling="no">
        </iframe>

      </div>

    </div>


    <div class="footer-copyright">
      © 2026 Hermeneia. All rights reserved.
    </div>

  </footer>

</body>
</html>