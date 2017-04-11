<?php

/**
 * This function gets called in the browser address bar for: 
 * a page with this form on it.
 */
function qtest_add_form_page($form,&$form_state) {
  // This is the first form element. It's a textfield with a label, "Name"
  $form['name'] = array(
    '#type' => 'fieldset',
    '#title' => t('Name'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['name']['first'] = array(
    '#type' => 'textfield',
    '#title' => t('First name'),
    '#required' => TRUE,
    '#default_value' => "First name",
    '#description' => "Please enter your first name.",
    '#size' => 20,
    '#maxlength' => 20,
  );
  $form['name']['last'] = array(
    '#type' => 'textfield',
    '#title' => t('Last name'),
    '#required' => TRUE,
  );
  $form['year_of_birth'] = array(
    '#type' => 'textfield',
    '#title' => "Year of birth",
    '#description' => 'Format is "YYYY"',
  ); 
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Submit',
  );
  return $form;
}
// Adds a submit handler/function to our form to send a successful
// completion message to the screen.

function qtest_add_form_page_submit($form, &$form_state) {
    drupal_set_message(t('The form has been submitted.'));
}

/*
 * validate of form
 */
function qtest_add_form_page_validate($form, &$form_state) {
    $year_of_birth = $form_state['values']['year_of_birth'];
    if ($year_of_birth && ($year_of_birth < 1900 || $year_of_birth > 2000)) {
        form_set_error('year_of_birth', 'Enter a year between 1900 and 2000.');
    }
} 
