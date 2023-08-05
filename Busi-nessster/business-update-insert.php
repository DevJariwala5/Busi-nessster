<?php
ob_start();
?>
<?php
include('connect.php');
$business_Id = $_REQUEST['business_Id'];
$business_Name = $_REQUEST['business_Name'];
$business_Email_Id = $_REQUEST['business_Email_Id'];
$business_Password = $_REQUEST['business_Password'];
$category_Id = $_REQUEST['category_Name'];
$business_Address = $_REQUEST['business_Address'];
$country_Id = $_REQUEST['country_Name'];
$state_Id = $_REQUEST['state_Name'];
$city_Id = $_REQUEST['city_Name'];
$business_Contact_No = $_REQUEST['business_Contact_No'];
$business_Year_Of_Established = $_REQUEST['business_Year_Of_Established'];
$business_Patnership = $_REQUEST['business_Patnership'];
$business_Website = $_REQUEST['business_Website'];
$business_Description = $_REQUEST['business_Description'];
$percentage_Of_Ownership = $_REQUEST['current_Revenue'];
$current_Revenue = $_REQUEST['current_Revenue'];
$percentage_Of_Growth = $_REQUEST['percentage_Of_Growth'];

$link->where("business_Id", $business_Id);
$sql = $link->update("tb_business_registration", array(
    "business_Name" => $business_Name,
    "business_Email_Id" => $business_Email_Id,
    "business_Password" => $business_Password,
    "category_Id" => $category_Id,
    "business_Address" => $business_Address,
    "country_Id" => $country_Id,
    "state_Id" => $state_Id,
    "city_Id" => $city_Id,
    "business_Contact_No" => $business_Contact_No,
    "business_Year_Of_Established" => $business_Year_Of_Established,
    "business_Patnership" => $business_Patnership,
    "business_Website" => $business_Website,
    "business_Description" => $business_Description,
    "percentage_Of_Ownership" => $percentage_Of_Ownership,
    "current_Revenue" => $current_Revenue,
    "percentage_Of_Growth" => $percentage_Of_Growth
));

if ($sql) {

    $img = $_FILES['business_Logo']['name'];
    if ($img != null || $img != "") {
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);

        $pimage = $filename_without_ext . $business_Id . '.' . $ext;

        if (move_uploaded_file($_FILES['business_Logo']['tmp_name'], "images/" . $pimage)) {
            $link->where('business_Id', $business_Id);
            $a1 = $link->update("tb_business_registration", array("business_Logo" => "images/" . $pimage));
        }
    }
    header('location:Profile-business-dashboard.php');
}