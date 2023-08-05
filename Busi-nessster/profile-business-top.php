<?php
ob_start();
?>
<?php
$t = 0;
$e = 0;
$business_Id = $data['business_Id'];
$data4 = $link->rawQueryOne("select COUNT(bid_Id) as bid_investor from tb_bid where business_Id='$business_Id'");

$qry = "SELECT * from tb_bid where business_Id='$business_Id'";
$res = mysqli_query($connect, $qry);
while ($data5 = mysqli_fetch_array($res)) {
    // $data6 = $link->rawQueryOne("SELECT COUNT(team_Id) as team_Count FROM tb_business_team_member t ,tb_business_designation d where t.designation_Id=d.designation_Id and  d.business_Id='$business_Id'");

    if ($data5['bid_Status'] == 0) {

        $amount = 0;
        $equity = 0;
    } else {

        $t = $t + $data5['amount'];
        $e = $e + $data5['equity'];
    }
}
?>
<div class="col-lg-9">
    <div class="user-toggler-wrapper d-flex d-lg-none">
        <h4 class="title">User Dashboard</h4>
        <div class="user-toggler">
            <i class="las la-sliders-h"></i>
        </div>
    </div>
    <div class="row justify-content-center g-4">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
            <div class="dashboard-item">
                <div class="dashboard-item-header">
                    <div class="header-left">
                        <h6 class="title">Earning Total</h6>
                        <h3 class="ammount theme-two">₹<?php echo $t ?></h3>
                    </div>
                    <div class="right-content">
                        <div class="icon">
                            <img src="assets/images/dashboard/Icon.png" alt="dashboard">
                        </div>
                    </div>
                </div>
                <div class="dashboard-item-body">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
            <div class="dashboard-item">
                <div class="dashboard-item-header">
                    <div class="header-left">
                        <h6 class="title">Equity Sell</h6>
                        <h3 class="ammount text--base"><?php echo $e ?>%</h3>
                    </div>
                    <div class="icon">
                        <img src="assets/images/dashboard/icon2.png" alt="dashboard">
                    </div>
                </div>
                <div class="dashboard-item-body">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
            <div class="dashboard-item">
                <div class="dashboard-item-header">
                    <div class="header-left">
                        <h6 class="title">Total Bid Investors</h6>
                        <h3 class="ammount theme-one"><?php echo $data4['bid_investor']; ?></h3>
                    </div>
                    <div class="icon">
                        <img src="assets/images/dashboard/icon3.png" alt="dashboard">
                    </div>
                </div>
                <div class="dashboard-item-body">
                </div>
            </div>
        </div>
    </div>