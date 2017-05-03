<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,700|Fira+Sans:400,700" rel="stylesheet">
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
      <img class='img-right terry-photo' src="./images/family-photo.jpeg"
                          alt="Terry, Emily, and their Boston Terrier Murray">
      <div class='about-text'>
        <p>
          Hi, I'm Terry. I'm a full stack web developer with a passion
          for personal finance, index investing, and thinking long-term.
        </p>
        <p>
          In 2017, I'm turning 30, getting married, and leaving my career in public
          relations to pursue software development professionally.
        </p>
        <p>
          By the end of the year, my fiancée Emily, our two year old Boston
          Terrier Murray, and I will likely be in a new city as we start our
          new lives together, and I'm excited for all the new challenges ahead.
        </p>
      </div>
    </div>

    <div id='projects' class='section-container'>
      <h2 class='section-title'>PROJECTS</h2>
      <div class='project' class='project1'>
        <h2 class='project-title'>BestCard</h2>
        <h4 class='project-subtitle'>Always know which of your credit cards offers the best rewards for each purchase</h4>
        <a href='https://secure-lake-16708.herokuapp.com/'><img class='img-right'
                            src="./images/screenshots/bestcard-cats-small.png"
                            alt="BestCard Categories Page"></a>
        <a href='https://secure-lake-16708.herokuapp.com/'><img class='img-right'
                          src="./images/screenshots/bestcard-result-small.png"
                          alt="BestCard Result Page"></a>
        <div class='project-text'>
          <p>
            If you've ever struggled to keep track of your rewards credit cards'
            rotating purchase categories, BestCard will assure you always use
            the best card for each purchase; all you do is select the purchase
            category.
          </p>
          <p>
            <b>Stack</b>: Built with React + Redux on the front end, Node + Express
            on the back end, with a MongoDB database.
          </p>
          <a href="https://secure-lake-16708.herokuapp.com/">Demo the app here</a><br />
          <a href="https://github.com/TCHayes/best-card">Project code on GitHub</a>
        </div>
      </div>

      <div class='project' class='project2'>
        <h2 class='project-title'>Periodic Repetition</h2>
        <h4 class='project-subtitle'>Learn the periodic table of elements using a spaced repetition algorithm</h4>
        <a href="https://cryptic-shore-50871.herokuapp.com/"><img class='img-right'
                            src="./images/screenshots/periodic-app-small.png"
                            alt="Periodic Repetition App"></a>
        <div class='project-text'>
          <p>
            A "Breaking Bad" themed spaced repetition learning app.
          </p>
          <p>
            <b>Stack</b>: Built with React + Redux on the front end, Node + Express
            on the back end, with a MongoDB database.
          </p>
          <a href="https://cryptic-shore-50871.herokuapp.com/">Demo the app here</a><br />
          <a href="https://github.com/TCHayes/spaced-repetition">Project code on GitHub</a>
        </div>
      </div>

      <div class='project' class='project3'>
        <h2 class='project-title'>Your New York Times Birthday</h2>
        <h4 class='project-subtitle'>See the front page from the day you were born</h4>
        <a href="https://damp-ocean-99717.herokuapp.com/"><img class='img-right'
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
            <a href="https://developer.nytimes.com/archive_api.json">NYT's Archive API</a>.
          </p>
          <a href="https://damp-ocean-99717.herokuapp.com/">Demo the app here</a><br />
          <a href="https://github.com/TCHayes/NYT-Bday-React">Project code on GitHub</a>
        </div>
      </div>

      <!-- <div class='project' class='project4'>
        <div class='project-text'>
          <h2 class='project-title'>Title Placeholder for a fourth project</h2>
          <h4>Subtitle</h4>
          <p>
            This is some placeholder text for the app's description. It will
            have additional info and be longer than this.
          </p>
          <p>
            <b>Stack</b>: Built with XYZ.
          </p>
          <a href="">Demo the app here</a><br />
          <a href="">Project code on GitHub</a>
        </div>
      </div> -->
    </div>

    <div id='contact' class='section-container'>
      <h2 class='section-title'>CONTACT</h2>
      <ul>
        <li><b>E-mail</b> <a href="mailto:terrychayes@gmail.com">TerryCHayes@gmail.com</a></li>
        <li><b>Github</b> <a href="https://github.com/tchayes">TCHayes</a></li>
        <li><b>LinkedIn</b> <a href="https://www.linkedin.com/in/terrychayes">Terry C Hayes</a></li>
      </ul>
    </div>
  </body>
</html>
