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
    <form id="bonus_form" method="post">
      <input type="hidden" name="submitted" value="1">
      <label for="checkbox_1"><?php $tmp = get_field( 'checkbox_1_label' ); echo $tmp ? $tmp : "I'd like to check this box"; ?></label><input type="checkbox" name="checkbox_1" id="checkbox_1" value="1"<?php echo isset( $_POST['submitted'] ) ? ( isset( $_POST['checkbox_1'] ) ? ' checked' : '' ) : ( get_field( 'checkbox_1_state' ) ? ' checked' : '' ); ?>>
      <label for="checkbox_2"><?php $tmp = get_field( 'checkbox_2_label' ); echo $tmp ? $tmp : "I don't like this other box"; ?></label><input type="checkbox" name="checkbox_2" id="checkbox_2" value="1"<?php echo isset( $_POST['submitted'] ) ? ( isset( $_POST['checkbox_2'] ) ? ' checked' : '' ) : ( get_field( 'checkbox_2_state' ) ? ' checked' : ''); ?>>
      <label for="checkbox_3"><?php $tmp = get_field( 'checkbox_3_label' ); echo $tmp ? $tmp : "I don't care about this box"; ?></label><input type="checkbox" name="checkbox_3" id="checkbox_3" value="1"<?php echo isset( $_POST['submitted'] ) ? ( isset( $_POST['checkbox_3'] ) ? ' checked' : '' ) : ( get_field( 'checkbox_3_state' ) ? ' checked' : ''); ?>>
      <label for="checkbox_4"><?php $tmp = get_field( 'checkbox_4_label' ); echo $tmp ? $tmp : "I don't care about this box, either"; ?></label><input type="checkbox" name="checkbox_4" id="checkbox_4" value="1"<?php echo isset( $_POST['submitted'] ) ? ( isset( $_POST['checkbox_4'] ) ? ' checked' : '' ) : ( get_field( 'checkbox_4_state' ) ? ' checked' : ''); ?>>
      <input type="submit" value="<?php $tmp = get_field( 'submit_button_text' ); echo $tmp ? $tmp : 'Submit'; ?>">
    </form>
    <div class="section-icon"><?php get_template_part('includes/svg/php'); ?></div>
  </div>
</section>
<!-- Modal -->
<div id="modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Selected options: </h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button id="modal_submit" class="btn btn-primary" type="button">OK</button>
        <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->