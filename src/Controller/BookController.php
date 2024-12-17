<?php

namespace Drupal\library_manager\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Handles book-related pages.
 */
class BookController extends ControllerBase {

  /**
   * Displays details for a specific book.
   *
   * @param int $id
   *   The book ID.
   */
  public function bookDetails($id) {
    return [
      '#type' => 'markup',
      '#markup' => '<h1>Details for Book ID: ' . $id . '</h1>',
    ];
  }
  /**
 * Provides JSON data for books.
 */
public function bookJson() {
    $books = [
      ['id' => 1, 'title' => 'Book 1', 'author' => 'Author 1'],
      ['id' => 2, 'title' => 'Book 2', 'author' => 'Author 2'],
    ];
  
    return new JsonResponse($books);
  }
}
