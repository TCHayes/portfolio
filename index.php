<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,700" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Terry Hayes</title>
  </head>
  <body>

    <header>
      <h1 class='header-name'>Terry Hayes</h1>
      <h2>Full Stack Web Developer</h2>
      <h3>South Norwalk, CT</h3>
    </header>

    <div class="name-container">
      <a href='' class='nav-name'>Terry Hayes</a>
    </div>

    <nav>
      <ul>
        <li><a href='#about'>ABOUT</a></li>
        <li><a href='#projects'>PROJECTS</a></li>
        <li><a href='#contact'>CONTACT</a></li>
      </ul>
    </nav>

    <div id='about' class='section-container'>
      <img class='terry-photo' src="./images/family-photo.jpeg"
                          alt="Terry, Emily, and their Boston Terrier Murray">
      <div class='about-text'>
        <p>
          Hi, I'm Terry. I'm a full stack web developer with a love of
          personal finance, index investing, and thinking long-term.
        </p>
        <p>
          My background in public relations means I strive to develop tools that
          put clients' needs first, and focus on how to help people leverage tech
          to solve their problems. My passion is building solutions that help
          people manage their finances.
        </p>
        <p>
          I love the code clarity that comes from piecing together small,
          discrete React components, and I'm a stickler for consistency
          (tabs or spaces - just stick with one!). When I'm not behind the
          computer, you'll find me on a run or at the park with my fiancée
          Emily and our dog Murray.
        </p>
      </div>
    </div>

    <div id='projects' class='section-container'>
      <h2 class='section-title'>PROJECTS</h2>
      <div class='project project1'>
        <h2 class='project-title'>BestCard</h2>
        <h4 class='project-subtitle'>Always know which of your credit cards offers the best rewards for each purchase</h4>
        <a href='https://secure-lake-16708.herokuapp.com/' target="_blank"><img class='img-right'
                            src="./images/screenshots/BestCard-Tour.gif"
                            alt="BestCard Tour"></a>
        <div class='project-text'>
          <p>
            If you've ever struggled to keep track of your rewards credit cards'
            rotating purchase categories, BestCard will ensure you always use
            the best card for each purchase; all you do is select the purchase
            category.
          </p>
          <p>
            <b>Stack</b>: Built with React + Redux on the front end, Node + Express
            on the back end, with a MongoDB database.
          </p>
          <a class='btn demo' href="https://secure-lake-16708.herokuapp.com/"
                            target="_blank">Demo the app here</a><br />
          <a class='btn github-code' href="https://github.com/TCHayes/best-card"
                            target="_blank">Project code on GitHub</a>
        </div>
      </div>

      <div class='project project2'>
        <h2 class='project-title'>Periodic Repetition</h2>
        <h4 class='project-subtitle-right'>Learn the periodic table of elements using a spaced repetition algorithm</h4>
        <a href="https://cryptic-shore-50871.herokuapp.com/" target="_blank"><img class='img-left'
                            src="./images/screenshots/periodic-app-small.png"
                            alt="Periodic Repetition App"></a>
        <div class='project-text-right'>
          <p>
            A "Breaking Bad" themed spaced repetition learning app.
            <a class='text-link' href="https://en.wikipedia.org/wiki/Spaced_repetition">
            Spaced repetition</a> is a learning technique that incorporates
            increasing intervals of time between subsequent review of previously
            learned material.
          </p>
          <p>Each time you answer a question correctly, your "score" for that
            question increases; incorrect answers reduce that score. Questions
            with lower scores are presented more frequently, so you spend more
            time practicing the information you're still struggling with.
          </p>
          <p>
            <b>Stack</b>: Built with React + Redux on the front end, Node + Express
            on the back end, with a MongoDB database.
          </p>
          <a class='btn demo' href="https://cryptic-shore-50871.herokuapp.com/"
                            target="_blank">Demo the app here</a><br />
          <a class='btn github-code' href="https://github.com/TCHayes/spaced-repetition"
                            target="_blank">Project code on GitHub</a>
        </div>
      </div>

      <div class='project project3'>
        <h2 class='project-title'>Your New York Times Birthday</h2>
        <h4 class='project-subtitle'>See the front page from the day you were born</h4>
        <a href="https://damp-ocean-99717.herokuapp.com/" target="_blank"><img class='img-right'
                                      src="./images/screenshots/nyt-bday.png"
                                      alt="New York Times B-day App"></a>
        <div class='project-text'>
          <p>
            This app displays headlines and article briefs from the day you were
            born (or any other day you choose). There are also links to view the
            full-text articles on the New York Times' website.
          </p>
          <p>
            <b>Stack</b>: Built with React + Redux on the front end, and the
            <a class='text-link' href="https://developer.nytimes.com/archive_api.json"
                              target="_blank">NYT's Archive API</a>.
          </p>
          <a class='btn demo' href="https://damp-ocean-99717.herokuapp.com/"
                            target="_blank">Demo the app here</a><br />
          <a class='btn github-code' href="https://github.com/TCHayes/NYT-Bday-React"
                                  target="_blank">Project code on GitHub</a>
        </div>
      </div>

    </div>

    <div id='contact' class='section-container'>
      <h2 class='section-title'>CONTACT</h2>
      <ul>
        <li><b>E-mail</b> <a href="mailto:terrychayes@gmail.com">TerryCHayes@gmail.com</a></li>
        <li><b>Github</b> <a href="https://github.com/tchayes" target="_blank">TCHayes</a></li>
        <li><b>LinkedIn</b> <a href="https://www.linkedin.com/in/terrychayes" target="_blank">Terry C Hayes</a></li>
      </ul>
    </div>
  </body>
</html>
