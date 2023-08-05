<?php
ob_start();
?>
<?php
include 'connect.php';

$team_Id = $_REQUEST['team_Id'];
$designation_Id = $_REQUEST['designation_Name'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$contact_No = $_REQUEST['contact_No'];

//update
$link->where("team_Id", $team_Id);
$sql = $link->update("tb_business_team_member", array(
    "designation_Id" => $designation_Id,
    "name" => $name,
    "email" => $email,
    "gender" => $gender,
    "contact_No" => $contact_No,
));
if ($sql) {
    $img = $_FILES['photo']['name'];
    if ($img != null || $img != "") {
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);

        $pimage = $filename_without_ext . $team_Id . '.' . $ext;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], "images/" . $pimage)) {
            $link->where('team_Id', $team_Id);
            $a1 = $link->update("tb_business_team_member", array("photo" => "images/" . $pimage));
        }
    }

    header("location:profile-team.php");
}