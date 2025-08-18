<?php

$db_pass = '';
$db_user = 'root';
$db_name = 'viraza';
$db_host = 'localhost';
$base_url = "https://";
$my_email = "contacts@";

$leslettres = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Database connection failed");

function confirmQuery($result)
{

    global $connection;

    if (!$result) {

        die("<h1>L'application est actuellement indisponible</h1>" . mysqli_error($db));
    }
}

function insertQuery($query)
{
    global $connection;
    $executeQuery = mysqli_query($db, $query);
    confirmQuery($executeQuery);
    echo 'Operation effectuee avec succes';
}

function deleteSthTableColId($table, $column, $id)
{
    global $connection;
    $query = mysqli_query($db, "DELETE FROM $table WHERE $column = $id");
    confirmQuery($query);
}

function isConnect()
{
    return isset($_SESSION["USER"]["id"]) ? true : false;
}

function isAdmin()
{
    return (isConnect() && $_SESSION['USER']['admin'] == '1') ? true : false;
}

function isDev($type = 'ALL')
{
    return (isAdmin() && $_SESSION['USER']['dev'][$type] == '1') ? true : false;
}

function claps_number($value = 0)
{
    $len = (strlen($value) - 1) / 3;
    if ($len >= 3) {
        return substr($value, 0, strlen($value) - 9) . "MD";
    } elseif ($len >= 2) {
        return substr($value, 0, strlen($value) - 6) . "M";
    } elseif ($len >= 1) {
        return substr($value, 0, strlen($value) - 3) . "K";
    } else {
        return $value;
    }
}

function print_a(array $array = NULL)
{
    print "<pre>";
    print_r($array);
    print "</pre>";
}

function traite_files($classe, $programme, $FILE)
{
    if (!$FILE["error"]) {
        if (!is_dir("./Cours/$classe/")) mkdir("./Cours/$classe/");
        if (!is_dir("./Cours/$classe/$programme/")) mkdir("./Cours/$classe/$programme/");
        $dte = time(); move_uploaded_file(
            $FILE["tmp_name"],
            "./Cours/$classe/$programme/" . $dte . $FILE["name"]
        );
        return $dte . $FILE["name"];
    } else  return "NULL";
}

function this_or_null($Val, String $String = NULL)
{
    return ($Val) ? $Val : $String;
}

function died()
{
    die('<meta http-equiv="refresh" content="0; url=/">');
}

function require_connected($file = "./error/undefined-link.php", $once = false)
{
    global $connection;
    $id = isset($_SESSION["USER"]["id"]) ? $_SESSION["USER"]["id"] : 0;

    if (isset($_SESSION["USER"]["id"]) && $once) require_once $file;
    elseif ($once) require_once "./error/no-connected.php";

    elseif (isset($_SESSION["USER"]["id"])) require $file;
    else require "./error/no-connected.php";
}

function exitWin()
{
    die("<script>window.close()</script>");
}

function Jscript(String $script = null)
{
    echo "<script>";
    echo $script;
    echo "</script>";
}

function main()
{
    global $connection, $user_content;

    if (isset($_SESSION["USER"]["id"]) && $is = $_SESSION["USER"]["id"]) {
        $user = mysqli_query($db, "SELECT * FROM univ_membres WHERE user_id = $is AND user_validate = 1") or die('Error : ' . mysqli_error($db) . '<br /> at config.php on line 117');
        if ($user && $row = mysqli_fetch_array($user)) return $user_content = $row;
        else header('Location:/univer/reject.php?cause=not-agreate');
    } else header('Location:/univer/reject.php?cause=no-connected');
}
main();

$user_id = $user_content['id'];
$user_level = $user_content['user_level'];
$user_key = $user_content['token'];
$user_sexe = $user_content['user_sexe'];

function debug ($var = null) {
    return var_dump($var);
}

function nextLink($HTTP_REFERER){
    $a = explode('--',"http://localhost:84/app/?fa69951bc733eb82713e936be33597e1=DATA_CRYPTING_ON:fa69951bc733eb82713e936be33597e1=WABTECHS_CRYPTING_ON: e91497f38407364c8e86ade9098950d978814190&MCISME_LAVINGOL&b557c222c8ddcdf87e033706aad08e4ef7cf90d3MCISME_LAVINGOL&b557c222c8ddcdf87e033706aad08e4ef7cf90d3VIRAZA_LAVINGOL&b557c222c8ddcdf87e033706aad08e4ef7cf90d3&MCISME_LAVINGOL&b557c222c8ddcdf87e033706aad08e4ef7cf90d3&WABTECHS_CRYPTING_ON_LAVINGOL&MCISME_LAVINGOL&b557c222c8ddcdf87e033706aad08e4ef7cf90d3&b557c222c8ddcdf87e033706aad08e4ef7cf90d3=student--request");
    return end($a);
}