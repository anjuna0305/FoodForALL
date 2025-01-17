<?php $this->view('includes/header')?>
<link rel="stylesheet" href="<?=ROOT?>/assets/leaderboard.css">
<?php $this->view('includes/navbar')?>
<?php $this->view('includes/submenu')?>

<?php $month =date('F', strtotime("last month"))?>
<h2>Donor Leaderboard</h2>

<span><b>- <?=$month?> -</b></span>
<div class="change">
<a href="leaderboard" class="donor">Donor</a>
<a href="leaderboard_v" class="volunteer">Volunteer</a>
</div>
<?php if($data):?>
<div class="top">
<?php if(isset($data[1])):?>
    <div class="container">

        <?php $place = "2nd Place"?>
        <?php if ($data[1]->place == 1) {
    $place = "1st Place";
}?>

        <p><?=$place?></p>

        <div class="second">
            <?php $pic = "./images/user_icon.png";
if ($data[1]->profile_pic) {
    $pic = $data[1]->profile_pic;}?>

            <img src="<?=$pic?>">
            <p>Rs. <?=$data[1]->tot_amount?></p>

        </div>

        <span><?=$data[1]->first_name?></span>
        <span><i class="fa-solid fa-location-dot"></i>&nbsp;<?=$data[1]->city?></span>

    </div>
<?php endif; ?>
    <?php if(isset($data[0])):?>
    <div class="container">
        <p>1st Place</p>
      
        <div class="first">

            <?php $pic = "./images/user_icon.png";
if ($data[0]->profile_pic) {
    $pic = $data[0]->profile_pic;}?>

            <img src="<?=$pic?>">
            <i class="fa-solid fa-trophy fa-2xl"></i>
            <p>Rs. <?=$data[0]->tot_amount?> </p>

        </div>

        <span><?=$data[0]->first_name?></span>
        <span><i class="fa-solid fa-location-dot"></i>&nbsp;<?=$data[0]->city?></span>

    </div>
    <?php endif; ?>

    <?php if(isset($data[2])):?>
    <div class="container">
    <?php $place = "3rd Place"?>
    <?php if ($data[2]->place == 2) {
    $place = "2nd Place";
}?>
            <?php if ($data[2]->place == 1) {
    $place = "1st Place";
}?>
        <p><?=$place?></p>

        <div class="third">
            <?php $pic = "./images/user_icon.png";
if ($data[2]->profile_pic) {
    $pic = $data[2]->profile_pic;}?>
                        <img src="<?=$pic?>">
                        <p>Rs. <?=$data[2]->tot_amount?></p>

        </div><span><?=$data[2]->first_name?></span>
        <span><i class="fa-solid fa-location-dot"></i>&nbsp;<?=$data[2]->city?></span>
    </div>
    <?php endif; ?>
</div>


<?php $i = 0;?>

<?php $data_sliced = array_slice($data, 3);?>
<?php if ($data_sliced): ?>

<?php foreach ($data_sliced as $value): ?>

<div class="long-card">
    <small>
    
    <?php

?>

    <?=$data_sliced[$i]->place?>
    </small>
    <?php
$pic = "./images/user_icon.png";
if ($data_sliced[$i]->profile_pic) {
    $pic = $data_sliced[$i]->profile_pic;}
?>

    <img src="<?=$pic?>">
    <p><?=$data_sliced[$i]->first_name?></p>
    <p><i class="fa-solid fa-location-dot"></i>&nbsp;<?=$data_sliced[$i]->city?></p>
    <span><b>Rs. <?=$data_sliced[$i]->tot_amount?></b></span>

</div>

<?php $i++;?>
<?php endforeach;?>

<?php endif ?>
<?php endif ?>
<?php if(!$data):?>
    <div class="empty"><h3 ><i class="fa-solid fa-chart-simple"></i> &nbsp;No data to show</h3></div>
    <?php endif ?>
<?php $this->view('includes/footer')?>
<!-- <script src="<?=ROOT?>/assets/organizationpage.js"></script> -->