<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
    'compiled' =>
    array (
    0 => false,
    1 =>
    array (
      '/sanctum/csrf-cookie' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/_ignition/health-check' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/_ignition/execute-solution' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/_ignition/update-config' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/user' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::BWLLIZ3ailKTCdhF',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/getUsers' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::2wvQq6DwBrkus78g',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/getInfoUser' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::sfwue5uIK7kboOCg',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/editDataUser' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::AFPHhrWvA9Sc2UKm',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/createUser' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::I6aVGRIKWPGwrZ5r',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/getAllTasks' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::KQVrq2IIZH8YLuxc',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/getDataTask' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::cOADk9L3R1M0zOBz',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/updateDataTask' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::TLSZo8D5uYbdmXYx',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/createTask' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::W9BiJuAD0nQddZQW',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/getComments' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::ouOcn4ahZSRAIYQg',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/addComment' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::J2PxJ0Ej9a8UJBJ6',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/getNotifications' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::JcEkMIco5evltDLU',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/checkNotification' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::CzCU6OBIxpae27XN',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/api/getNotification' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::YCxIVtiyKSrkXxh5',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/profile' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'profile.edit',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'profile.update',
          ),
          1 => null,
          2 =>
          array (
            'PATCH' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
        2 =>
        array (
          0 =>
          array (
            '_route' => 'profile.destroy',
          ),
          1 => null,
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/login' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'login',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::I3mKiiIpnh3fq9yR',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/verify-email' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'verification.notice',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/email/verification-notification' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'verification.send',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/confirm-password' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.confirm',
          ),
          1 => null,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Iadrsq0g9ceE1BeM',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/password' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.update',
          ),
          1 => null,
          2 =>
          array (
            'PUT' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
      '/logout' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'logout',
          ),
          1 => null,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => null,
          4 => false,
          5 => false,
          6 => null,
        ),
      ),
    ),
    2 =>
    array (
      0 => '{^(?|/users(?:(.*))?(*:22)|/tasks(?:(.*))?(*:44)|/notification(?:(.*))?(*:73)|/verify\\-email/([^/]++)/([^/]++)(*:112)|/(.*)(*:125))/?$}sDu',
    ),
    3 =>
    array (
      22 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'users',
            'any' => null,
          ),
          1 =>
          array (
            0 => 'any',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => true,
          6 => null,
        ),
      ),
      44 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'tasks',
            'any' => null,
          ),
          1 =>
          array (
            0 => 'any',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => true,
          6 => null,
        ),
      ),
      73 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'notification',
            'any' => null,
          ),
          1 =>
          array (
            0 => 'any',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => true,
          6 => null,
        ),
      ),
      112 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'verification.verify',
          ),
          1 =>
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => true,
          6 => null,
        ),
      ),
      125 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::2r2Q4HsSi4NJ48iU',
          ),
          1 =>
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => null,
          4 => false,
          5 => true,
          6 => null,
        ),
        1 =>
        array (
          0 => null,
          1 => null,
          2 => null,
          3 => null,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => null,
    ),
    'attributes' =>
    array (
    'sanctum.csrf-cookie' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' =>
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => null,
        'prefix' => 'sanctum',
        'where' =>
        array (
        ),
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => null,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => null,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => null,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::BWLLIZ3ailKTCdhF' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003690000000000000000";}}',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::BWLLIZ3ailKTCdhF',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::2wvQq6DwBrkus78g' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getUsers',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\users\\getUsersController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\users\\getUsersController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::2wvQq6DwBrkus78g',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::sfwue5uIK7kboOCg' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getInfoUser',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\users\\getInfoUserController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\users\\getInfoUserController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::sfwue5uIK7kboOCg',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::AFPHhrWvA9Sc2UKm' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'api/editDataUser',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\users\\editDataUserController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\users\\editDataUserController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::AFPHhrWvA9Sc2UKm',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::I6aVGRIKWPGwrZ5r' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'api/createUser',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\users\\createUserController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\users\\createUserController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::I6aVGRIKWPGwrZ5r',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::KQVrq2IIZH8YLuxc' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getAllTasks',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\tasks\\getAllTasksController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\tasks\\getAllTasksController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::KQVrq2IIZH8YLuxc',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::cOADk9L3R1M0zOBz' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getDataTask',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\tasks\\getDataTaskController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\tasks\\getDataTaskController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::cOADk9L3R1M0zOBz',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::TLSZo8D5uYbdmXYx' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'api/updateDataTask',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\tasks\\updateDataTaskController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\tasks\\updateDataTaskController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::TLSZo8D5uYbdmXYx',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::W9BiJuAD0nQddZQW' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'api/createTask',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\tasks\\createTaskController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\tasks\\createTaskController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::W9BiJuAD0nQddZQW',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::ouOcn4ahZSRAIYQg' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getComments',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\comments\\getCommentsController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\comments\\getCommentsController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::ouOcn4ahZSRAIYQg',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::J2PxJ0Ej9a8UJBJ6' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addComment',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\comments\\addCommentController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\comments\\addCommentController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::J2PxJ0Ej9a8UJBJ6',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::JcEkMIco5evltDLU' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getNotifications',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\notifications\\getNotificationsController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\notifications\\getNotificationsController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::JcEkMIco5evltDLU',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::CzCU6OBIxpae27XN' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkNotification',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\notifications\\checkNotificationController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\notifications\\checkNotificationController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::CzCU6OBIxpae27XN',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::YCxIVtiyKSrkXxh5' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getNotification',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\apiControllers\\notifications\\getNotificationController@__invoke',
        'controller' => 'App\\Http\\Controllers\\apiControllers\\notifications\\getNotificationController',
        'namespace' => null,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::YCxIVtiyKSrkXxh5',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'users' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users{any?}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function () {
        return \\view(\'index\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000037a0000000000000000";}}',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'users',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
        'any' => '.*',
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'tasks' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks{any?}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function () {
        return \\view(\'tasks\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000037c0000000000000000";}}',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'tasks',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
        'any' => '.*',
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'notification' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification{any?}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:57:"function () {
        return \\view(\'notification\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000037e0000000000000000";}}',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'notification',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
        'any' => '.*',
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'profile.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\ProfileController@edit',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'profile.edit',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'profile.update' =>
    array (
      'methods' =>
      array (
        0 => 'PATCH',
      ),
      'uri' => 'profile',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\ProfileController@update',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'profile.update',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'profile.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'profile',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProfileController@destroy',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'profile.destroy',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::2r2Q4HsSi4NJ48iU' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:56:"function () {
    return \\redirect()->route(\'users\'); 
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003780000000000000000";}}',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::2r2Q4HsSi4NJ48iU',
      ),
      'fallback' => true,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'login' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::I3mKiiIpnh3fq9yR' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::I3mKiiIpnh3fq9yR',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'verification.notice' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'verification.verify' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'verification.send' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'password.confirm' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'generated::Iadrsq0g9ceE1BeM' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::Iadrsq0g9ceE1BeM',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'password.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
      ),
      'uri' => 'password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordController@update',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordController@update',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    'logout' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => null,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => null,
      'waitSeconds' => null,
      'withTrashed' => false,
    ),
    ),
    )
);
