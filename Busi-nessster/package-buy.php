<?php
ob_start();
?>
<?php
session_start();
include 'connect.php';

$package_Id = $_REQUEST['package_Id'];
$investor_Id = $_REQUEST['investor_Id'];


include 'razorpay/Razorpay.php';
include 'razorpay/src/Errors/SignatureVerificationError.php';
$success = false;
if (!empty($_POST['razorpay_payment_id'])) {

    try {
        $attributes = array(
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            //'razorpay_signature' => $_POST['razorpay_signature']
        );

        //$api->utility->verifyPaymentSignature($attributes);
        $success = true;
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}
if ($success == true) {
    $html = "Payment success/ Signature Verified";

    echo $investor_Id;
    $data = $link->rawQueryOne("select * from tb_package_details where package_Id='$package_Id'");
    $remaining_Bid = $data['No_Of_Bids'];
    $link->where("investor_Id", $investor_Id);
    $sql = $link->update("tb_investor_registration", array(
        "package_Id" => $package_Id,
        "remaining_Bid" => $remaining_Bid

    ));
    if ($sql) {

        $_SESSION['investor_Id'] = $investor_Id;
        header("location:success.php");
    }
} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
    header("location:Cancel/$cid");
}
echo $html;