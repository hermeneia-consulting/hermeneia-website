# Hermeneia Insight Page Template

Canonical editorial template for individual Hermeneia Insights.

Use the finished `insight-turnaround-time.html` page as the primary visual reference.


## Preserve

- Shared site header and navigation
- Shared site footer
- Article numbering system
- Category treatment
- Hero typography and metadata structure
- Narrow readable article column
- Numbered analytical sections
- Hermeneia `<` marker only when positioned on the left
- Related Project / Filed Under / All Insights footer
- Shared CSS class names whenever possible


## May Vary

- Article title and subtitle
- Categories
- Author metadata
- Publication date
- Read time
- Number of analytical sections
- Whether a workflow example is needed
- Whether metric-comparison cards are needed
- Whether an observation callout is needed
- Whether an operational comparison is needed
- Whether an analytical-frame section is needed
- Related project
- Closing language


# Editorial Structure


<!-- ========================================
     ARTICLE 01 — HERO

     Purpose:
     Introduce the article and establish its
     editorial identity.

     Preserve:
     - Article number
     - Category
     - Title
     - Subtitle
     - Author
     - Publication date
     - Read time
     ======================================== -->

```html
<section class="insight-article-hero">

  <div class="insight-article-hero-inner">

    <div class="insight-article-number">
      00
    </div>


    <div class="insight-article-hero-content">

      <p class="insight-article-category">
        CATEGORY / CATEGORY
      </p>

      <h1>
        ARTICLE<br>
        TITLE<span class="cursor"></span>
      </h1>

      <p class="insight-article-subtitle">
        Article subtitle or explanatory deck
      </p>


      <!-- AUTHOR / PUBLICATION META -->

      <div class="insight-article-meta">

        <div class="insight-author">

          <img
            src="AUTHOR-IMAGE"
            alt="Author name"
            class="insight-author-image"
          >

          <div>

            <span class="insight-author-label">
              WRITTEN BY
            </span>

            <span class="insight-author-name">
              AUTHOR NAME
            </span>

          </div>

        </div>


        <div class="insight-publication-meta">

          <span>DATE</span>
          <span>/</span>
          <span>READ TIME</span>

        </div>

      </div>

    </div>

  </div>

</section>
```


<!-- ========================================
     ARTICLE 02 — THE QUESTION

     Purpose:
     State the operational, analytical, or
     technical question motivating the Insight.

     This is the recurring opening device for
     Hermeneia Insights.
     ======================================== -->

```html
<section class="insight-question">

  <div class="insight-article-content">

    <p class="insight-section-label">
      &lt; THE QUESTION
    </p>

    <p class="insight-opening">
      Opening framing.
    </p>

    <p class="insight-emphasis">
      Key tension or observation.
    </p>

    <p>
      Supporting context.
    </p>

  </div>

</section>
```


<!-- ========================================
     ARTICLE 03+ — NUMBERED ANALYSIS SECTIONS

     Purpose:
     Develop the argument.

     The number of analytical sections is
     intentionally flexible.

     Do NOT manufacture sections simply to
     satisfy the template.
     ======================================== -->

```html
<section class="insight-article-section">

  <div class="insight-article-content">

    <div class="insight-section-number">
      01
    </div>

    <h2>
      SECTION TITLE
    </h2>

    <p>
      Analysis.
    </p>

    <p>
      Additional analysis.
    </p>

  </div>

</section>
```


<!-- ========================================
     OPTIONAL SECTION STYLE — ICE BLUE

     Add "insight-article-section-alt" when you
     want a numbered analysis section to use
     the ice-blue background.

     Use intentionally to create editorial rhythm.
     Do not alternate backgrounds mechanically.

     Standard:

     <section class="insight-article-section">

     Alternate:

     <section class="insight-article-section insight-article-section-alt">
     ======================================== -->


# Optional Article Components

These components are available when the argument benefits from them.

They are NOT required in every Insight.

The content determines which components appear.


<!-- ========================================
     OPTIONAL COMPONENT — WORKFLOW EXAMPLE

     Use when the Insight needs to show a sequence
     of operational events, timestamps, handoffs,
     stages, or system interactions.

     Example structure:

     <div class="insight-workflow-example">

       <span>STEP / DATE</span>
       <strong>EVENT</strong>

       <span>→</span>

       <span>STEP / DATE</span>
       <strong>EVENT</strong>

       <span>→</span>

       <span>STEP / DATE</span>
       <strong>EVENT</strong>

     </div>
     ======================================== -->


<!-- ========================================
     OPTIONAL COMPONENT — METRIC COMPARISON

     Use when comparing two metric definitions,
     measures, interpretations, operational
     approaches, or process boundaries.

     Example structure:

     <div class="insight-metric-grid">

       <div class="insight-metric-card">

         <p class="insight-metric-label">
           METRIC NAME
         </p>

         <p class="insight-metric-formula">
           START EVENT → END EVENT
         </p>

         <p>
           What this metric measures.
         </p>

       </div>


       <div class="insight-metric-card">

         <p class="insight-metric-label">
           METRIC NAME
         </p>

         <p class="insight-metric-formula">
           START EVENT → END EVENT
         </p>

         <p>
           What this metric measures.
         </p>

       </div>

     </div>
     ======================================== -->


<!-- ========================================
     OPTIONAL COMPONENT — OBSERVATION CALLOUT

     Use for a short, high-value analytical
     statement that deserves a strong visual
     break from the article.

     Keep the statement concise.

     Keep the Hermeneia < marker on the LEFT.

     Example structure:

     <aside class="insight-callout">

       <div class="insight-callout-inner">

         <span class="insight-callout-marker">
           &lt;
         </span>

         <p>
           KEY EDITORIAL OBSERVATION
         </p>

       </div>

     </aside>
     ======================================== -->


<!-- ========================================
     OPTIONAL COMPONENT — OPERATIONAL COMPARISON

     Use for side-by-side operational states,
     conditions, interpretations, or examples.

     Example uses:

     NORMAL vs EXCEPTION
     EXPECTED vs OBSERVED
     CURRENT STATE vs FUTURE STATE

     Example structure:

     <div class="insight-comparison">

       <div>

         <span class="insight-comparison-label">
           STATE ONE
         </span>

         <p>
           Explanation.
         </p>

       </div>


       <div>

         <span class="insight-comparison-label">
           STATE TWO
         </span>

         <p>
           Explanation.
         </p>

       </div>

     </div>
     ======================================== -->


<!-- ========================================
     OPTIONAL COMPONENT — ANALYTICAL FRAME

     Use when the argument produces a structured
     set of implications, measures, tests,
     applications, findings, or recommendations.

     The heading and number of items may vary.

     Example headings:

     WHAT THE METRIC CAN DO
     WHAT I'D MEASURE
     WHAT I'D TEST
     WHAT TO LOOK FOR
     OPERATIONAL IMPLICATIONS

     Example structure:

     <section class="insight-analytical-frame">

       <div class="insight-article-content">

         <p class="insight-section-label">
           FRAME TITLE
         </p>

         <div class="insight-frame-grid">

           <div class="insight-frame-item">

             <span>01</span>

             <h3>
               ITEM TITLE
             </h3>

             <p>
               Explanation.
             </p>

           </div>


           <div class="insight-frame-item">

             <span>02</span>

             <h3>
               ITEM TITLE
             </h3>

             <p>
               Explanation.
             </p>

           </div>

         </div>

       </div>

     </section>
     ======================================== -->


<!-- ========================================
     CLOSING OBSERVATION

     Purpose:
     Return to the original question and close
     the analytical argument.

     This is not required to be titled
     "THE POINT."

     Keep the closing focused on what the
     analysis changes, reveals, or clarifies.
     ======================================== -->

```html
<section class="insight-closing">

  <div class="insight-article-content">

    <p class="insight-section-label">
      &lt; CLOSING OBSERVATION
    </p>

    <h2>
      THE POINT
    </h2>

    <p>
      Closing analysis.
    </p>

    <p>
      Additional closing context if needed.
    </p>

    <p class="insight-closing-line">
      Final editorial statement.
    </p>

  </div>

</section>
```


<!-- ========================================
     ARTICLE FOOTER

     Purpose:
     Connect the Insight back into the broader
     Hermeneia ecosystem.

     Preserve:
     - Filed Under
     - Related Project when relevant
     - All Insights navigation

     If no genuinely related project exists,
     do not manufacture a relationship simply
     to populate the template.
     ======================================== -->

```html
<section class="insight-article-footer">

  <div class="insight-article-footer-inner">


    <!-- FILED UNDER -->

    <div class="insight-footer-group">

      <p class="insight-footer-label">
        FILED UNDER
      </p>

      <p>
        CATEGORY / CATEGORY
      </p>

    </div>


    <!-- RELATED PROJECT -->

    <div class="insight-footer-group">

      <p class="insight-footer-label">
        RELATED PROJECT
      </p>

      <a href="PROJECT-PAGE.html">
        Related Project →
      </a>

    </div>


    <!-- BACK TO INSIGHTS -->

    <div class="insight-footer-navigation">

      <a href="insights.html">
        ← ALL INSIGHTS
      </a>

    </div>

  </div>

</section>
```


# Editorial Rules

## The Template Controls Presentation, Not Thought

The argument determines the structure.

Do not force an Insight to contain:

- A fixed number of analytical sections
- A workflow example
- Metric cards
- A comparison
- A callout
- An analytical frame
- A related project

Use those components only when they improve the analysis.


## Numbered Sections

Number the main analytical sections sequentially:

`01`, `02`, `03`, `04`, etc.

The article hero number identifies the Insight itself.

The analytical section numbers identify stages of the argument.

These are separate numbering systems.


## Hermeneia Marker

The `<` marker is part of the Hermeneia visual language.

Use it only when positioned intentionally on the LEFT.

Appropriate examples:

```text
< THE QUESTION
< CLOSING OBSERVATION
```

or inside a left-aligned observation callout.

Do not place a decorative `<` on the right side of the article hero.


## Categories

Current Hermeneia Insights categories:

- Operations
- Data & Analytics
- Health IT & Systems
- Medical Records

An Insight may belong to more than one category.

Use categories based on the substance of the article rather than for visual balance.


## Related Projects

Link an Insight to a Hermeneia Project when the relationship is substantive.

The relationship should help a reader move between:

**Applied project → operational question → analysis**

Do not add a project simply because the article needs something in the footer.


# Publishing Checklist

Before publishing a new Insight:

- Create the individual Insight `.html` page.
- Follow the canonical article structure.
- Add only the optional components the argument needs.
- Confirm the Insight number.
- Confirm category assignment.
- Confirm article title and subtitle.
- Confirm author information.
- Confirm publication date.
- Confirm read time.
- Add the Insight to the article-card grid on `insights.html`.
- Update the Featured Insight on `insights.html` when appropriate.
- Add a Related Project when a substantive relationship exists.
- Verify the `<` marker appears only in approved left-side treatments.
- Test desktop layout.
- Test tablet layout.
- Test mobile layout.
- Test the article link from `insights.html`.
- Test `← ALL INSIGHTS`.
- Test the Related Project link when present.
- Verify the shared site header.
- Verify the canonical site footer.
- If shared CSS changed, update the stylesheet cache version across all HTML pages before deployment.