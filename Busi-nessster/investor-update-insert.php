<?php
ob_start();
?>
<?php
include('connect.php');
$investor_Id = $_REQUEST['investor_Id'];
$investor_Name = $_REQUEST['investor_Name'];
$investor_Email_Id = $_REQUEST['investor_Email_Id'];
$investor_Password = $_REQUEST['investor_Password'];
$investor_Gender = $_REQUEST['investor_Gender'];
$investor_Address = $_REQUEST['investor_Address'];
$investor_DOB = $_REQUEST['investor_DOB'];
$country_Id = $_REQUEST['country_Name'];
$state_Id = $_REQUEST['state_Name'];
$city_Id = $_REQUEST['city_Name'];
$investor_Contact_No = $_REQUEST['investor_Contact_No'];
$investor_Business_Name = $_REQUEST['investor_Business_Name'];
$investor_Business_Description = $_REQUEST['investor_Business_Description'];
$investor_Business_Website = $_REQUEST['investor_Business_Website'];
$investor_Business_Valuation = $_REQUEST['investor_Business_Valuation'];
$investor_Invested_Companies = $_REQUEST['investor_Invested_Companies'];
$investor_Total_Investment_Values = $_REQUEST['investor_Total_Investment_Values'];

$link->where("investor_Id", $investor_Id);
$sql = $link->update("tb_investor_registration", array(
    "investor_Name" => $investor_Name,
    "investor_Email_Id" => $investor_Email_Id,
    "investor_Password" => $investor_Password,
    "investor_Gender" => $investor_Gender,
    "investor_Address" => $investor_Address,
    "investor_DOB" => $investor_DOB,
    "country_Id" => $country_Id,
    "state_Id" => $state_Id,
    "city_Id" => $city_Id,
    "investor_Contact_No" => $investor_Contact_No,
    "investor_Business_Name" => $investor_Business_Name,
    "investor_Business_Description" => $investor_Business_Description,
    "investor_Business_Website" => $investor_Business_Website,
    "investor_Business_Valuation" => $investor_Business_Valuation,
    "investor_Invested_Companies" => $investor_Invested_Companies,
    "investor_Total_Investment_Values" => $investor_Total_Investment_Values
));

if ($sql) {

    $img = $_FILES['investor_Photo']['name'];
    if ($img != null || $img != "") {
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);

        $pimage = $filename_without_ext . $investor_Id . '.' . $ext;

        if (move_uploaded_file($_FILES['investor_Photo']['tmp_name'], "images/" . $pimage)) {
            $link->where('investor_Id', $investor_Id);
            $a1 = $link->update("tb_investor_registration", array("investor_Photo" => "images/" . $pimage));
        }
    }
    header('location:Profile-dashboard.php');
}