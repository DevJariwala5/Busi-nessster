<?php
ob_start();
?>
<?php
include('connect.php');
$team_Id = $_REQUEST['team_Id'];
$link->where('team_Id', $team_Id);
$sql = $link->delete("tb_business_team_member");
if ($sql) {
    header('location:profile-team.php');
}