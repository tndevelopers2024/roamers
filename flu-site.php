<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fluu - Flu Season Guide and Prevention</title>
    <meta
      name="description"
      content="Fluu is a friendly flu-season guide with clear symptoms, prevention steps, and when to seek care."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,800&family=Sora:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/flu-site.css" />
  </head>
  <body>
    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header">
      <div class="container header-inner">
        <a class="logo" href="#home" aria-label="Fluu home">
          <span class="logo-mark" aria-hidden="true"></span>
          Fluu
        </a>
        <nav class="primary-nav" aria-label="Primary">
          <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
            Menu
          </button>
          <ul id="site-nav" class="nav-list">
            <li><a href="#symptoms">Symptoms</a></li>
            <li><a href="#spread">How it spreads</a></li>
            <li><a href="#prevention">Prevention</a></li>
            <li><a href="#care">Care guide</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </nav>
        <a class="button ghost" href="#contact">Get updates</a>
      </div>
    </header>

    <main id="main">
      <section id="home" class="hero">
        <div class="container hero-grid">
          <div class="hero-copy" data-reveal>
            <p class="eyebrow">Flu season made simpler</p>
            <h1>Clear guidance for flu season, without the noise.</h1>
            <p class="lead">
              Fluu gives you the essentials: common symptoms, smart prevention, and
              the moments when you should reach out for care.
            </p>
            <div class="hero-actions">
              <a class="button" href="#symptoms">See symptoms</a>
              <a class="button ghost" href="#prevention">Prevention checklist</a>
            </div>
            <div class="hero-note">
              <strong>Reminder:</strong> This site is informational and is not a substitute for
              professional medical advice.
            </div>
          </div>

          <div class="hero-card" data-reveal>
            <div class="hero-card-header">
              <span class="pill">Today</span>
              <span class="pill soft">Local trends vary</span>
            </div>
            <h2>Flu-ready snapshot</h2>
            <ul class="hero-list">
              <li>Symptoms often arrive suddenly.</li>
              <li>Rest, hydration, and staying home help protect others.</li>
              <li>Vaccination is a key step to reduce risk.</li>
            </ul>
            <div class="hero-cta">
              <a class="button small" href="#urgent">Know warning signs</a>
            </div>
          </div>
        </div>
        <div class="hero-orbit" aria-hidden="true"></div>
        <div class="hero-orbit orbit-two" aria-hidden="true"></div>
      </section>

      <section class="quick-glance">
        <div class="container">
          <div class="glance-grid">
            <article class="glance-card" data-reveal>
              <h3>Respiratory illness</h3>
              <p>Flu affects the nose, throat, and lungs and can range from mild to severe.</p>
            </article>
            <article class="glance-card" data-reveal>
              <h3>Spreads in close contact</h3>
              <p>It can spread through droplets when people cough, sneeze, or talk.</p>
            </article>
            <article class="glance-card" data-reveal>
              <h3>Protect your circle</h3>
              <p>Stay home when sick and keep up with hand hygiene to help others.</p>
            </article>
          </div>
        </div>
      </section>

      <section id="symptoms" class="section">
        <div class="container">
          <div class="section-title" data-reveal>
            <p class="eyebrow">Symptoms</p>
            <h2>Common flu symptoms</h2>
            <p class="lead">
              Not everyone experiences the same symptoms. Some people may not have a fever.
            </p>
          </div>
          <div class="symptom-grid">
            <div class="symptom-card" data-reveal>
              <h3>Fever or chills</h3>
              <p>Feeling feverish, with chills or body temperature changes.</p>
            </div>
            <div class="symptom-card" data-reveal>
              <h3>Cough and sore throat</h3>
              <p>A persistent cough or throat soreness can show up quickly.</p>
            </div>
            <div class="symptom-card" data-reveal>
              <h3>Runny or stuffy nose</h3>
              <p>Congestion or a runny nose is common during flu infection.</p>
            </div>
            <div class="symptom-card" data-reveal>
              <h3>Body aches and headaches</h3>
              <p>Muscle aches, joint soreness, or headaches can appear with fatigue.</p>
            </div>
            <div class="symptom-card" data-reveal>
              <h3>Fatigue</h3>
              <p>Exhaustion and low energy can linger for days.</p>
            </div>
            <div class="symptom-card" data-reveal>
              <h3>Occasional stomach symptoms</h3>
              <p>Some people, especially children, may have vomiting or diarrhea.</p>
            </div>
          </div>
        </div>
      </section>

      <section id="spread" class="section section-alt">
        <div class="container spread-grid">
          <div data-reveal>
            <p class="eyebrow">Transmission</p>
            <h2>How flu spreads</h2>
            <p class="lead">
              Flu spreads most often through respiratory droplets created when people cough,
              sneeze, or talk. It can also spread after touching contaminated surfaces and then
              touching your face.
            </p>
            <div class="tag-row">
              <span class="tag">Close contact</span>
              <span class="tag">Droplets</span>
              <span class="tag">Shared surfaces</span>
            </div>
          </div>
          <div class="spread-panel" data-reveal>
            <h3>Reduce spread at home</h3>
            <ul>
              <li>Open windows or improve indoor airflow when possible.</li>
              <li>Clean high-touch surfaces like handles and phones.</li>
              <li>Use tissues for coughs and sneezes, then wash your hands.</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="prevention" class="section">
        <div class="container">
          <div class="section-title" data-reveal>
            <p class="eyebrow">Prevention</p>
            <h2>Everyday prevention checklist</h2>
            <p class="lead">Simple habits that can help reduce flu risk for you and others.</p>
          </div>
          <div class="checklist-grid">
            <div class="checklist" data-reveal>
              <h3>Protect yourself</h3>
              <ul>
                <li>Get your annual flu vaccination if recommended by your clinician.</li>
                <li>Wash hands often or use sanitizer when soap is not available.</li>
                <li>Avoid touching your eyes, nose, and mouth with unwashed hands.</li>
              </ul>
            </div>
            <div class="checklist" data-reveal>
              <h3>Protect others</h3>
              <ul>
                <li>Stay home when sick and keep distance from others.</li>
                <li>Cover coughs and sneezes with a tissue or elbow.</li>
                <li>Consider wearing a mask if you must be around others while sick.</li>
              </ul>
            </div>
            <div class="checklist" data-reveal>
              <h3>Keep spaces healthier</h3>
              <ul>
                <li>Improve airflow or meet outdoors when possible.</li>
                <li>Clean high-touch surfaces regularly.</li>
                <li>Keep tissues, sanitizer, and cleaning supplies handy.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="care" class="section section-alt">
        <div class="container care-grid">
          <div data-reveal>
            <p class="eyebrow">Care guide</p>
            <h2>What to do if you feel sick</h2>
            <p class="lead">
              If you think you have the flu, contact a healthcare professional for advice,
              especially if you are at higher risk for complications.
            </p>
            <div class="care-steps">
              <div>
                <h3>Rest and recover</h3>
                <p>Stay home, rest, and drink plenty of fluids.</p>
              </div>
              <div>
                <h3>Limit close contact</h3>
                <p>Keep distance from others in your household, especially high-risk people.</p>
              </div>
              <div>
                <h3>Ask about treatment</h3>
                <p>A clinician may prescribe antivirals for some people, especially early on.</p>
              </div>
            </div>
          </div>
          <div class="care-panel" data-reveal>
            <h3>High-risk groups</h3>
            <p>If you are pregnant, older, very young, or have chronic conditions, reach out
              to a clinician early when symptoms appear.</p>
            <div class="care-highlight">Flu symptoms can overlap with other illnesses. Testing may be needed to confirm a diagnosis.</div>
          </div>
        </div>
      </section>

      <section id="urgent" class="urgent">
        <div class="container urgent-inner" data-reveal>
          <div>
            <p class="eyebrow">Urgent signs</p>
            <h2>When to seek emergency care</h2>
            <p>
              Seek urgent medical care for severe or rapidly worsening symptoms, such as
              trouble breathing, chest pain, new confusion, persistent dizziness, or bluish lips
              or face.
            </p>
          </div>
          <a class="button" href="#contact">Get help now</a>
        </div>
      </section>

      <section id="faq" class="section">
        <div class="container">
          <div class="section-title" data-reveal>
            <p class="eyebrow">FAQ</p>
            <h2>Quick answers</h2>
          </div>
          <div class="faq-grid" data-reveal>
            <details>
              <summary>Is flu different from a cold?</summary>
              <p>
                Flu symptoms tend to appear more suddenly and can feel more intense than a
                typical cold. If you are unsure, contact a clinician.
              </p>
            </details>
            <details>
              <summary>Can I spread flu before I feel sick?</summary>
              <p>
                People can sometimes spread flu before they realize they are ill. Staying home
                when you feel unwell helps reduce spread.
              </p>
            </details>
            <details>
              <summary>Should I get tested?</summary>
              <p>
                Testing can confirm flu. A clinician can decide whether testing
                is appropriate based on your symptoms and risk factors.
              </p>
            </details>
            <details>
              <summary>What about mask use?</summary>
              <p>
                Masks can reduce spread when someone is sick and can add protection in crowded
                spaces. Follow local and clinical guidance.
              </p>
            </details>
          </div>
        </div>
      </section>

      <section id="contact" class="section section-alt">
        <div class="container contact-grid">
          <div data-reveal>
            <p class="eyebrow">Stay informed</p>
            <h2>Get local flu updates</h2>
            <p class="lead">
              Share your email to receive reminders, checklists, and seasonal updates.
            </p>
          </div>
          <form class="contact-form" data-reveal>
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" required />
            <label for="location">Zip code (optional)</label>
            <input type="text" id="location" name="location" placeholder="90210" inputmode="numeric" />
            <button class="button" type="submit">Sign me up</button>
            <p class="form-note">We will never sell your data. This form is a demo.</p>
          </form>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container footer-inner">
        <div>
          <span class="logo small">Fluu</span>
          <p>Clear guidance for flu season. Built to be calm, practical, and human.</p>
        </div>
        <div class="footer-links">
          <a href="#home">Back to top</a>
          <a href="#prevention">Prevention</a>
          <a href="#care">Care guide</a>
        </div>
        <div class="footer-legal">
          <p>Informational only. For medical advice, contact a healthcare professional.</p>
        </div>
      </div>
    </footer>

    <script src="assets/js/flu-site.js"></script>
  </body>
</html>
