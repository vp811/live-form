<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
  </head>
  <body id="main_body">
    <div class="container">
      <!--
        <form class="password-field" action="form.php" method="post">
          <input type="password" name="form-password">
        </form>
      -->

      <?php //if(isset($_POST['form-password']) && $_POST['form-password'] == 'secretpassword'){  ?>
        <h1>Tell me about yourself</h1>

        <form id="sample-form" class="testing-form" action="form-handler.php" method="post">
          <fieldset>
            <legend>User Information</legend>

            <ul>
              <li>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
              </li>

              <li>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address">
              </li>

              <li>
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone">
              </li>

              <li>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
              </li>

              <li>
                <label for="birthday">Birthday:</label>
                <input type="date" name="birthday" id="birthday">
              </li>

              <li>
                <label for="website">Website:</label>
                <input type="url" name="website" id="website">
              </li>
            </ul>
          </fieldset>

          <fieldset>
            <legend>Other Information:</legend>
            <ul>
              <li>
                <label for="fav-show">Do you like The Office?</label>
                <select id="fav-show" class="fav-show" name="fav-show">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                  <option value="Never Watched">Never Watched it</option>
                </select>
              </li>

              <li>
                <label for="password">What is the secret password?</label>
                <input type="password" name="password" id="password">
              </li>
            </ul>
          </fieldset>

          <input type="submit" value="Submit">
        </form>

      <?php // } //closes if statement for password ?>

    </div>
  </body>
</html>
