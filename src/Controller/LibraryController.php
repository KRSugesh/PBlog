<?php

namespace Drupal\library_manager\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Handles library-related pages.
 */
class LibraryController extends ControllerBase {

  /**
   * Displays the library homepage.
   */
  public function libraryPage() {
    return [
      '#type' => 'markup',
      '#markup' => '<h1>Welcome to the Library!</h1>',
    ];
  }

  /**
   * Displays the form to add/edit a book.
   */
  public function addBookForm() {
    return [
      '#type' => 'markup',
      '#markup' => '<h1>Add or Edit a Book</h1>',
    ];
  }
}
