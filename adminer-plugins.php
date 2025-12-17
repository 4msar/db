<?php 

foreach (glob(__DIR__ . '/plugins-enabled/*.php') as $plugin) {
    require($plugin);
}

return [
    // configure your plugins here
];