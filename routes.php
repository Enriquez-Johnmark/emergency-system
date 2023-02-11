<?php

// Auth
$router->get('/', 'controllers/auth/home.php');
$router->get('/login', 'controllers/auth/index.php');
$router->post('/login', 'controllers/auth/login.php');
$router->post('/logout', 'controllers/auth/logout.php');

// Register
$router->get('/register', 'controllers/register/index.php');
$router->post('/register', 'controllers/register/store.php');

//User Dashboard
$router->get('/user', 'controllers/dashboard/user.php');
$router->get('/dashboard', 'controllers/dashboard/admin.php');



// User My Reports
$router->get('/reports', 'controllers/user-reports/create.php');
$router->post('/reports', 'controllers/user-reports/store.php');
$router->get('/my-reports', 'controllers/user-reports/index.php');
$router->post('/my-reports', 'controllers/user-reports/index.php');



// Incident Reports
$router->get('/pending', 'controllers/incident/pending.php');
$router->get('/ongoing', 'controllers/incident/ongoing.php');
$router->get('/completed', 'controllers/incident/completed.php');
$router->get('/incident', 'controllers/incident/edit.php');
$router->put('/incident', 'controllers/incident/update.php');


// Incidents Types
$router->get('/incident-types', 'controllers/incident-types/index.php');
$router->get('/incident-type', 'controllers/incident-types/edit.php');
$router->get('/incident-types/create', 'controllers/incident-types/create.php');
$router->post('/incident-types', 'controllers/incident-types/store.php');
$router->put('/incident-type', 'controllers/incident-types/update.php');
$router->delete('/incident-type', 'controllers/incident-types/destroy.php');


// Respondent Type
$router->get('/respondent-types', 'controllers/respondent-types/index.php');
$router->get('/respondent-type', 'controllers/respondent-types/edit.php');
$router->get('/respondent-types/create', 'controllers/respondent-types/create.php');
$router->post('/respondent-types', 'controllers/respondent-types/store.php');
$router->put('/respondent-type', 'controllers/respondent-types/update.php');
$router->delete('/respondent-type', 'controllers/respondent-types/destroy.php');

// Respondent 
$router->get('/respondents', 'controllers/respondents/index.php');
$router->get('/respondent', 'controllers/respondents/edit.php');
$router->get('/respondents/create', 'controllers/respondents/create.php');
$router->post('/respondents', 'controllers/respondents/store.php');
$router->put('/respondent', 'controllers/respondents/update.php');
$router->delete('/respondent', 'controllers/respondents/destroy.php');


// Hotlines

$router->get('/hotlines', 'controllers/hotline/index.php');
$router->get('/hotline', 'controllers/hotline/edit.php');
$router->get('/hotlines/create', 'controllers/hotline/create.php');
$router->post('/hotlines', 'controllers/hotline/store.php');
$router->put('/hotline', 'controllers/hotline/update.php');
$router->delete('/hotline', 'controllers/hotline/destroy.php');


$router->get('/dispatchers', 'controllers/dispatcher/index.php');
$router->get('/dispatcher', 'controllers/dispatcher/edit.php');
$router->get('/dispatchers/create', 'controllers/dispatcher/create.php');
$router->post('/dispatchers', 'controllers/dispatcher/store.php');
$router->put('/dispatcher', 'controllers/dispatcher/update.php');
$router->delete('/dispatcher', 'controllers/dispatcher/destroy.php');
