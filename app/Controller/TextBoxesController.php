<?php
/*
 * This is sort of a pseudo-controller. It just supplies forms and data to TinyMCE.
 *
 */
class TextBoxesController extends AppController {

  var $uses = array();

  function add() {
    $this->layout = 'tinymce_dialog';
    $this->set('title_for_layout', __('Free response'));
  }

}