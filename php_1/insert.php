<html>
  <head>
    <title>My Form</title>
  </head>
  <body>
    <h2>My Form</h2>
    <form action="submit.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required /><br /><br />

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required /><br /><br />

      <label for="textarea">Text Area:</label><br />
      <textarea name="textarea" id="textarea" rows="5" cols="30"></textarea
      ><br /><br />

      <label for="checkbox">Checkbox:</label>
      <input
        type="checkbox"
        name="checkbox"
        id="checkbox"
        value="yes"
      /><br /><br />

      <label for="languages">Languages:</label><br />
      <input type="checkbox" name="languages[]" value="english" />English<br />
      <input type="checkbox" name="languages[]" value="spanish" />Spanish<br />
      <input
        type="checkbox"
        name="languages[]"
        value="french"
      />French<br /><br />

      <label for="gender">Gender:</label><br />
      <input type="radio" name="gender" value="male" />Male<br />
      <input type="radio" name="gender" value="female" />Female<br />
      <input type="radio" name="gender" value="others" />Others<br /><br />

      <label for="country">Country:</label><br />
      <select name="country[]" multiple>
        <option value="USA">USA</option>
        <option value="Canada">Canada</option>
        <option value="Mexico">Mexico</option></select
      ><br /><br />

      <label for="password">Password:</label>
      <input
        type="password"
        name="password"
        id="password"
        required
      /><br /><br />

      <input type="submit" value="Submit" />
      <input type="reset" value="Reset" />
    </form>
  </body>
</html>
