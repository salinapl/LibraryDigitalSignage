<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
  /*checks for landscape or portrait tag in URL*/
  'routes' => [
    [
        'pattern' => 'slideshows/(:any)/landscape',
        'action' => function ($value) {
            $data = [
              'orientation' => $value,
            ];
            return page('slideshows/selfcheck')->render($data);
        }
    ],
    [
      'pattern' => 'slideshows/(:any)/portrait',
      'action' => function ($value) {
          $data = [
            'orientation' => $value,
          ];
          return page('slideshows/selfcheck')->render($data);
      }
    ]
  ],
  'debug' => false,
  /* turn to FALSE when going live to hide debugging errors */
  'panel' =>[
    'install' => true
  ]
];
