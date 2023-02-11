<?php



use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// $respondents = $db->query('SELECT respondents.id, respondents.name, respondent_types.name AS types,respondents.team_leader, respondents.mobile_no, respondents.created_at, respondents.status
// FROM respondents
// INNER JOIN respondent_types  ON respondents.respondent_type_id=respondent_types.id;')->get();
// $pending = 'pending';

$reports = $db->query('SELECT reports.*, incident_types.name, users.first_name, users.last_name
FROM reports 
INNER JOIN incident_types   ON reports.incident_type_id=incident_types.id  
INNER JOIN users   ON reports.user_id=users.id
WHERE user_id = :id
ORDER BY updated_at desc;
',[
    'id' => 5
])->get();




view("user-reports/index.view.php", [
    'heading' => 'My Reports',
    'reports' => $reports,
    // 'errors' => []
]);