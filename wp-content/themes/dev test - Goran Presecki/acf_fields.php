<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_checkbox-1',
    'title' => 'Checkbox 1',
    'fields' => array (
      array (
        'key' => 'field_5a739980fcffe',
        'label' => 'Label',
        'name' => 'checkbox_1_label',
        'type' => 'text',
        'instructions' => 'Enter label for checkbox',
        'default_value' => 'I\'d like to check this box',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5a7399eefcfff',
        'label' => 'Default state',
        'name' => 'checkbox_1_state',
        'type' => 'true_false',
        'instructions' => 'Whether the checkbox is checked when the page loads',
        'message' => 'Default state',
        'default_value' => 1,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'custom_fields',
        4 => 'discussion',
        5 => 'comments',
        6 => 'revisions',
        7 => 'slug',
        8 => 'author',
        9 => 'format',
        10 => 'featured_image',
        11 => 'categories',
        12 => 'tags',
        13 => 'send-trackbacks',
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_checkbox-2',
    'title' => 'Checkbox 2',
    'fields' => array (
      array (
        'key' => 'field_5a739cb0abed3',
        'label' => 'Label',
        'name' => 'checkbox_2_label',
        'type' => 'text',
        'instructions' => 'Enter label for checkbox',
        'default_value' => 'I don\'t like this other box',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5a739d06abed4',
        'label' => 'Default state',
        'name' => 'checkbox_2_state',
        'type' => 'true_false',
        'instructions' => 'Whether the checkbox is checked when the page loads',
        'message' => 'Default state',
        'default_value' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 10,
  ));
  register_field_group(array (
    'id' => 'acf_checkbox-3',
    'title' => 'Checkbox 3',
    'fields' => array (
      array (
        'key' => 'field_5a739e32d9928',
        'label' => 'Label',
        'name' => 'checkbox_3_label',
        'type' => 'text',
        'instructions' => 'Enter label for checkbox',
        'default_value' => 'I don\'t care about this box',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5a739e8bd9929',
        'label' => 'Default state',
        'name' => 'checkbox_3_state',
        'type' => 'true_false',
        'instructions' => 'Whether the checkbox is checked when the page loads',
        'message' => '',
        'default_value' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 20,
  ));
  register_field_group(array (
    'id' => 'acf_checkbox-4',
    'title' => 'Checkbox 4',
    'fields' => array (
      array (
        'key' => 'field_5a739f2c6d8b6',
        'label' => 'Label',
        'name' => 'checkbox_4_label',
        'type' => 'text',
        'instructions' => 'Enter label for checkbox',
        'default_value' => 'I don\'t care about this box, either',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5a739f606d8b8',
        'label' => 'Default state',
        'name' => 'checkbox_4_state',
        'type' => 'true_false',
        'message' => 'Default state',
        'default_value' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 30,
  ));
  register_field_group(array (
    'id' => 'acf_submit-button',
    'title' => 'Submit button',
    'fields' => array (
      array (
        'key' => 'field_5a739fda53895',
        'label' => 'Submit button text',
        'name' => 'submit_button_text',
        'type' => 'text',
        'instructions' => 'Enter text for submit button',
        'default_value' => 'Submit',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 50,
  ));
}

?>
