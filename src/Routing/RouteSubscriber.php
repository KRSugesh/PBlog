<?php

namespace Drupal\library_manager\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Alters existing routes for the Library Manager module.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    // Alter the library homepage route.
    if ($route = $collection->get('library_manager.library_page')) {
      $route->setPath('/my-library'); // Change the path.
      $route->setDefault('_title', 'My Dynamic Library'); // Change the title.
    }
  }
}
