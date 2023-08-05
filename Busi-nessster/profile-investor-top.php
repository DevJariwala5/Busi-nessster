<?php
ob_start();
?>
<?php
$investor_Id = $data['investor_Id'];
$data4 = $link->rawQueryOne("select * from tb_investor_registration where investor_Id='$investor_Id'");
$data5 = $link->rawQueryOne("SELECT COUNT(bid_Id) as bid_count FROM tb_bid where investor_Id='$investor_Id'");
$data6 = $link->rawQueryOne("SELECT COUNT(bid_Id) as bid_approve FROM tb_bid where bid_Status=1 and investor_Id='$investor_Id'");
$bidcount = $data5['bid_count'];
$bidapprove = $data6['bid_approve'];
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
                        <h6 class="title">Approved Bids</h6>
                        <h3 class="ammount theme-two"><?php echo $bidapprove ?></h3>
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
                        <h6 class="title">All Bids</h6>
                        <h3 class="ammount text--base"><?php echo $bidcount; ?></h3>
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
                        <h6 class="title">Remaing Bid</h6>
                        <h3 class="ammount theme-one"><?php echo $data4['remaining_Bid']; ?></h3>
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