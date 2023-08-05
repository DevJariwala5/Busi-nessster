<?php
ob_start();
?>
<?php
session_start();
include 'connect.php';
$package_Id = $_REQUEST['package_Id'];
$amount = $_REQUEST['amount'];
$investor_Id = $_SESSION['investor_Id'];

$inv = $link->rawQueryOne("select * from tb_investor_registration where investor_Id =?", array($investor_Id));
?>
<!DOCTYPE html>

<head>
</head>

<body>


    <form method="POST" id="rform" action="https://api.razorpay.com/v1/checkout/embedded">
        <input type="hidden" name="key_id" value="rzp_test_aDNW3jpLU7vwbQ">
        <input type="hidden" name="name" value="Busi Nessster">
        <input type="hidden" name="amount" value="<?php echo $amount * 100; ?>">
        <input type="hidden" name="description" value="Busi Nessster">
        <input type="hidden" name="prefill[name]" value="Jay Kolawala">
        <input type="hidden" name="prefill[contact]" value="7383379383">
        <input type="hidden" name="prefill[email]" value="devjariwala8444@gmail.com">
        <!--Address changes-->
        <input type="hidden" name="notes[shipping address]" value="India">
        <input type="hidden" name="notes[shipping address]" value="Gujarat">
        <input type="hidden" name="notes[shipping address]" value="Surat">
        <input type="hidden" name="notes[shipping address]" value="395017">
        <input type="hidden" name="notes[shipping address]" value="B-101,Sudhan Complex,Bhatar">
        <input type="hidden" name="notes[shipping address]" value="">

        <!-- <input type="hidden" name="notes[shipping address]" value="">-->
        <input type="hidden" name="callback_url"
            value="http://localhost/Busi-Nessster/package-buy.php?package_Id=<?php echo $package_Id; ?>&investor_Id=<?php echo $investor_Id; ?>">
        <input type="hidden" name="cancel_url" value="http://localhost/Busi-Nessster/cancel.php">
        <button type="submit" style="display:none;" id="btnsubmit">Submit</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#rform').submit();
    });
    </script>
</body>

</html>