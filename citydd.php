<?php
ob_start();
?>
<?php
include('connect.php');
$stateID = $_REQUEST['state_Id'];

?>
<div class="col-lg-6">
    <div class="form-group">

        <div class="controls">
            <select id="city_Name" name="city_Name" class="form--control" onchange="citydropdown(this.value);">
                <option selected>Select City</option>
                <?php

                $data = $link->rawQuery("select * from tb_city where state_Id=$stateID");
                if ($link->count > 0) {
                    foreach ($data as $d) {
                ?> <option value="<?php echo $d['city_Id']; ?>">
                    <?php echo $d['city_Name']; ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <span id="m7" style="color:red;">
    </div>
</div>