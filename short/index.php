<pre>
<?php
$link = isset($_GET['to']) ? ([
    'apadpaac2tr' => '/app/admin/pages/actions/student-all-resultat',
    'apadpaac2tr2' => '/app/admin/pages/actions/student-resultat',
    'aplo' => '/app/login',
    'ch' => '/check-resultat'
][$_GET['to']].'?'.$_SERVER['QUERY_STRING'] ?? '/?short-linked') : '/?short-linked';
header('location:'.$link);