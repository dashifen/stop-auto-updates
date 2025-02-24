<?php

namespace Dashifen\WordPress\Plugins\MustUse\StopAutoUpdates;

use Dashifen\WPHandler\Handlers\Plugins\AbstractMustUsePluginHandler;

class AutoUpdateStopper extends AbstractMustUsePluginHandler
{
  /**
   * Uses addAction and/or addFilter to attach protected methods of this object
   * to the ecosystem of WordPress action and filter hooks.
   *
   * @return void
   */
  public function initialize(): void
  {
    if (!$this->isInitialized()) {
      add_filter('auto_update_plugin', '__return_false');
      add_filter('auto_update_theme', '__return_false');
    }
  }
}
