<?php
ob_start();
?>
<!DOCTYPE html>

<head>
</head>

<body>


    <form method="POST" id="rform" action="https://api.razorpay.com/v1/checkout/embedded">
        <input type="text" name="key_id" value="rzp_test_aDNW3jpLU7vwbQ">
        <input type="text" name="name" value="Busi Nessster">
        <input type="text" name="amount" value="50000">
        <input type="text" name="description" value="Busi Nessster">
        <input type="text" name="prefill[name]" value="Jay Kolawala">
        <input type="text" name="prefill[contact]" value="7383379383">
        <input type="text" name="prefill[email]" value="devjariwala8444@gmail.com">
        <!--Address changes-->
        <input type="text" name="notes[shipping address]" value="India">
        <input type="text" name="notes[shipping address]" value="Gujarat">
        <input type="text" name="notes[shipping address]" value="Surat">
        <input type="text" name="notes[shipping address]" value="395017">
        <input type="text" name="notes[shipping address]" value="B-101,Sudhan Complex,Bhatar">
        <input type="text" name="notes[shipping address]" value="">

        <!-- <input type="hidden" name="notes[shipping address]" value="">-->
        <input type="text" name="callback_url" value="">
        <input type="text" name="cancel_url" value="">
        <button type="submit" id="btnsubmit">Submit</button>
    </form>
</body>

</html>