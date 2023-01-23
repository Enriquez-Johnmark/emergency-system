<?php

// Auth
$router->get('/', 'controllers/auth/index.php');


// Dashboard
$router->get('/dashboard', 'controllers/dashboard/index.php');

// User


// Incident Reports
$router->get('/incident', 'controllers/incident/index.php');


// Incidents Types
$router->get('/incident-types', 'controllers/incident-types/index.php');
$router->get('/incident-type', 'controllers/incident-types/edit.php');
$router->get('/incident-types/create', 'controllers/incident-types/create.php');
$router->post('/incident-types', 'controllers/incident-types/store.php');
$router->put('/incident-type', 'controllers/incident-types/update.php');


// Respondent Type
$router->get('/respondent-types', 'controllers/respondent-types/index.php');
$router->get('/respondent-types/create', 'controllers/respondent-types/create.php');
$router->post('/respondent-types', 'controllers/respondent-types/store.php');
// Respondent 
$router->get('/respondents', 'controllers/respondents/index.php');
$router->get('/respondents/create', 'controllers/respondents/create.php');
$router->post('/respondents', 'controllers/respondents/store.php');