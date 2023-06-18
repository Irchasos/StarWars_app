<?php

return array(
  'barryvdh/laravel-debugbar' =>
  array(
    'providers' =>
    array(
      0 => 'Barryvdh\\Debugbar\\ServiceProvider',
    ),
    'aliases' =>
    array(
      'Debugbar' => 'Barryvdh\\Debugbar\\Facades\\Debugbar',
    ),
  ),
  'barryvdh/laravel-dompdf' =>
  array(
    'providers' =>
    array(
      0 => 'Barryvdh\\DomPDF\\ServiceProvider',
    ),
    'aliases' =>
    array(
      'Pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
      'PDF' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
    ),
  ),
  'biscolab/laravel-recaptcha' =>
  array(
    'providers' =>
    array(
      0 => 'Biscolab\\ReCaptcha\\ReCaptchaServiceProvider',
    ),
    'aliases' =>
    array(
      'ReCaptcha' => 'Biscolab\\ReCaptcha\\Facades\\ReCaptcha',
    ),
  ),
  'haruncpi/laravel-simple-captcha' =>
  array(
    'providers' =>
    array(
      0 => 'Haruncpi\\LaravelSimpleCaptcha\\ServiceProvider',
    ),
  ),
  'jackiedo/cart' =>
  array(
    'providers' =>
    array(
      0 => 'Jackiedo\\Cart\\CartServiceProvider',
    ),
    'aliases' =>
    array(
      'Cart' => 'Jackiedo\\Cart\\Facades\\Cart',
    ),
  ),
  'laravel/sail' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Sail\\SailServiceProvider',
    ),
  ),
  'laravel/sanctum' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    ),
  ),
  'laravel/scout' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Scout\\ScoutServiceProvider',
    ),
  ),
  'laravel/slack-notification-channel' =>
  array(
    'providers' =>
    array(
      0 => 'Illuminate\\Notifications\\SlackChannelServiceProvider',
    ),
  ),
  'laravel/socialite' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' =>
    array(
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'laravel/tinker' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravel/ui' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Ui\\UiServiceProvider',
    ),
  ),
  'livewire/livewire' =>
  array(
    'providers' =>
    array(
      0 => 'Livewire\\LivewireServiceProvider',
    ),
    'aliases' =>
    array(
      'Livewire' => 'Livewire\\Livewire',
    ),
  ),
  'nesbot/carbon' =>
  array(
    'providers' =>
    array(
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' =>
  array(
    'providers' =>
    array(
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'nunomaduro/termwind' =>
  array(
    'providers' =>
    array(
      0 => 'Termwind\\Laravel\\TermwindServiceProvider',
    ),
  ),
  'realrashid/sweet-alert' =>
  array(
    'providers' =>
    array(
      0 => 'RealRashid\\SweetAlert\\SweetAlertServiceProvider',
    ),
    'aliases' =>
    array(
      'Alert' => 'RealRashid\\SweetAlert\\Facades\\Alert',
    ),
  ),
  'spatie/laravel-permission' =>
  array(
    'providers' =>
    array(
      0 => 'Spatie\\Permission\\PermissionServiceProvider',
    ),
  ),
);
