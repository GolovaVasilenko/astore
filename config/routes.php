<?php

use astore\Router;

Router::add('^admin$', ['controller' => 'Maine', 'action' => 'index', 'prefix' => 'admin']);

Router::add('^admin/?(?P<controller>[a-z\-]+)/?(?P<action>[a-z\-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Maine', 'action' => 'index']);

Router::add('^(?P<controller>[a-z\-]+)/?(?P<action>[a-z\-]+)?$');