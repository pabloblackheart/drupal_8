<?php
/**
 * @file
 * Contains Drupal\ajax_form\AjaxForm
 */
namespace Drupal\ajax_form\Form;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\ChangedCommand;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class AjaxForm extends FormBase {
  public function getFormId() {
    return 'ajax_form';
  }
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['email'] = array(
      '#type' => 'textfield',
      '#title' => 'E-Mail',
      '#description' => '',
      '#ajax' => array(
        // Function to call when event on form element triggered.
        'callback' => 'Drupal\ajax_form\Form\AjaxForm::usernameValidateCallback',
        // Effect when replacing content. Options: 'none' (default), 'slide', 'fade'.
        'effect' => 'fade',
        // Javascript event to trigger Ajax. Currently for: 'onchange'.
        'event' => 'change',
        'progress' => array(
          // Graphic shown to indicate ajax. Options: 'throbber' (default), 'bar'.
          'type' => 'throbber',
          // Message to show along progress graphic. Default: 'Please wait...'.
          'message' => NULL,
        ),
      ),
    );

    $form['nombre'] = array(
      '#type' => 'textfield',
      '#title' => 'Nombre',
      '#description' => '',
      '#ajax' => array(
        // Function to call when event on form element triggered.
        'callback' => 'Drupal\ajax_form\Form\AjaxForm::usernameValidateCallback',
        // Effect when replacing content. Options: 'none' (default), 'slide', 'fade'.
        'effect' => 'fade',
        // Javascript event to trigger Ajax. Currently for: 'onchange'.
        'event' => 'change',
        'progress' => array(
          // Graphic shown to indicate ajax. Options: 'throbber' (default), 'bar'.
          'type' => 'throbber',
          // Message to show along progress graphic. Default: 'Please wait...'.
          'message' => NULL,
        ),
      ),
    );

    $form['mensaje'] = array(
      '#type' => 'textarea',
      '#title' => 'Mensaje',
      '#description' => '',
      '#ajax' => array(
        // Function to call when event on form element triggered.
        'callback' => 'Drupal\ajax_form\Form\AjaxForm::usernameValidateCallback',
        // Effect when replacing content. Options: 'none' (default), 'slide', 'fade'.
        'effect' => 'fade',
        // Javascript event to trigger Ajax. Currently for: 'onchange'.
        'event' => 'change',
        'progress' => array(
          // Graphic shown to indicate ajax. Options: 'throbber' (default), 'bar'.
          'type' => 'throbber',
          // Message to show along progress graphic. Default: 'Please wait...'.
          'message' => NULL,
        ),
      ),
    );

    $form['enviar'] = array(
      '#type' => 'button',
      '#value' => 'Enviar Mensaje',
      '#ajax' => array(
        'callback' => 'Drupal\ajax_form\Form\AjaxForm::sendForm',
        'event' => 'click',
        'progress' => array(
          'type' => 'throbber',
          'message' => 'Enviando ...',
        ),
        
      ),
    );

    return $form;
  }
  
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message('Nothing Submitted. Just an Example.');
  }

  public function sendForm(array &$form, FormStateInterface $form_state) {
    // Get all User Entities.
    $email    = $form_state->getValue('email');
    $nombre   = $form_state->getValue('nombre');
    $mensaje  = $form_state->getValue('mensaje');

    echo json_encode(array('email' => $email,'nombre' => $nombre,'mensaje' => $mensaje ));
  }

}