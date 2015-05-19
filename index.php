<!DOCTYPE html>
<html>
  <head>
    <title> CourseTime </title>
    <link rel="stylesheet" href="assets/main.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div id="content">
      <div id="header">
        <div id="logga">CourseTime logga</div>
        <div id="login-reg"> Logga in/registrera </div>
      </div>
      <div id="upper">
        <form action="index.php" method="POST" class="searchfield">
          <label for="inputsearch"><h1> Sök kurs </h1></label>
          <input type="text" placeholder="  Skriv din sökning här..." id="inputsearch" name="search">
          <input type="submit" value="Sök" id="searchBtn" class="searchBtn">
        </form>
      </div>
      <div id="main">
        <div id= "middle">Mittenfältet
          <div id="courses">
            <p id="readComments" class="field">
              <h2>Kurser</h2>
            </p>
            <?php include "search.php" ?>
          </div>
        </div>
        <div id="rightnav" class="sidebar"> Höger sidebar</div>
        <div id="leftnav" class="sidebar">Vänster sidebar</div>
      </div>
    </div>
    <div id="footer">© CourseTime 2015 Grupp 16</div>
  </body>
</html>
