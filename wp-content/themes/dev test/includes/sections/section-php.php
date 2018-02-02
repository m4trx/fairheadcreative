<section class="content-php" id="php">
  <div class="content-container">
    <h2>WP backend and PHP test <span class="title-under">with some JS, CSS and HTML to boot</span></h2>
    <ol>
      <li><strong>Part one:</strong> this page should lose all the classes but the template-based one (home).</li>
      <li><strong>Part two:</strong> use ACF to expose the list below in the page editor. These are the elements that should be editable, and users shouldn't have any other option present in the page editor, apart from these: 
        <ul>
          <li>label element text</li>
          <li>whether the checkbox is checked when the page loads</li>
          <li>submit button text</li>
        </ul>
      </li>
      <li><strong>Part three (bonus round):</strong> when you submit the form, it should open the confirmation modal at the center of the page that lists all the options picked by the user and has a couple of buttons, "OK" and "Cancel". "Cancel" will close the modal, and "OK" will send you to the front page of the test along with the data.</li>
    </ol>
    <form>
      <label for="checkbox_1">I'd like to check this box</label><input type="checkbox" name="checkbox" id="checkbox_1" value="value">
      <label for="checkbox_2">I don't like this other box</label><input type="checkbox" name="checkbox" id="checkbox_2" value="value">
      <label for="checkbox_3">I don't care about this box</label><input type="checkbox" name="checkbox" id="checkbox_3" value="value">
      <label for="checkbox_4">I don't care about this box, either</label><input type="checkbox" name="checkbox" id="checkbox_4" value="value">
      <input type="submit">
    </form>
    <div class="section-icon"><?php get_template_part('includes/svg/php'); ?></div>
  </div>
</section>
