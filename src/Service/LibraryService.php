<?php

namespace Drupal\library_manager\Service;

use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Provides library-related services.
 */
class LibraryService {

  /**
   * Entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Constructs a new LibraryService.
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager) {
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * Displays the total number of books.
   */
  public function displayBookCount() {
    $count = 100; // Example count; replace with a database query.
    return [
      '#type' => 'markup',
      '#markup' => '<h1>Total Books: ' . $count . '</h1>',
    ];
  }
}
