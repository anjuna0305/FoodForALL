<?php $this->view('includes/header')?>
<link rel="stylesheet" href="<?=ROOT?>/assets/leaderboard.css">
<?php $this->view('includes/navbar')?>
<?php $this->view('includes/submenu')?>

<?php $month =date('F', strtotime("last month"))?>
<div class="begining">
<h2>Volunteer Leaderboard &nbsp;- &nbsp;&nbsp;<small><b><?=$month?></b></small></h2>



<div class="index">
   
    <small>Total<i class="fa-solid fa-circle"></i></small>
    <small>Mild<i class="fa-solid fa-circle"></i></small>
    <small>Moderate<i class="fa-solid fa-circle"></i></small>
    <small>Heavy<i class="fa-solid fa-circle"></i></small>
</div>
</div>

<div class="change">
    
    <a href="leaderboard" class="volunteer">Donor</a>
    <a href="leaderboard_v" class="donor">Volunteer</a>
</div>
<?php if($data):?>
<div class="top">
<?php if(isset($data[1])):?>
    <div class="container">

        <?php $place = "2nd Place"?>
        <?php if ($data[1]->place == 1) {
    $place = "1st Place";
}?>

        <p>
            <?=$place?>
        </p>

        <div class="second">
            <?php $pic = "./images/user_icon.png";
if ($data[1]->profile_pic) {
    $pic = $data[1]->profile_pic;}?>

            <img src="<?=$pic?>">
            <p> <?=$data[1]->v_count?> events</p>

        </div>

        <span><b><?=$data[1]->first_name?></b></span>
        <span><i class="fa-solid fa-location-dot"></i>&nbsp;<?=$data[1]->city?></span>
        <div class="v_types">
            <span class="one"><b><?=$data[1]->v_count?></b></span>
            <span class="two"><b><?=$data[1]->mild_v?></b></span>
            <span class="three"><b><?=$data[1]->average_v?></b></span>
            <span class="four"><b><?=$data[1]->heavy_v?></b></span>
        </div>
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
            <p><?=$data[0]->v_count?> events</p>

        </div>

        <span><b><?=$data[0]->first_name?></b></span>
        <span><i class="fa-solid fa-location-dot"></i>&nbsp;<?=$data[0]->city?></span>
        <div class="v_types">
            <span class="one"><b><?=$data[0]->v_count?></b></span>
            <span class="two"><b><?=$data[0]->mild_v?></b></span>
            <span class="three"><b><?=$data[0]->average_v?></b></span>
            <span class="four"><b><?=$data[0]->heavy_v?></b></span>
        </div>

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
        <p>
            <?=$place?>
        </p>

        <div class="third">
            <?php $pic = "./images/user_icon.png";
if ($data[2]->profile_pic) {
    $pic = $data[2]->profile_pic;}?>
            <img src="<?=$pic?>">
            <p><?=$data[2]->v_count?> events</p>

        </div>
        <span><b><?=$data[2]->first_name?></b></span>
        <span><i class="fa-solid fa-location-dot"></i>&nbsp;<?=$data[2]->city?></span>
        <div class="v_types">
            <span class="one"><b><?=$data[2]->v_count?></b></span>
            <span class="two"><b><?=$data[2]->mild_v?></b></span>
            <span class="three"><b><?=$data[2]->average_v?></b></span>
            <span class="four"><b><?=$data[2]->heavy_v?></b></span>
        </div>
    </div>
<?php endif; ?>
</div>

<?php $i = 0;?>

<?php $data_sliced = array_slice($data, 3);?>
<?php if ($data_sliced): ?>

<?php foreach ($data_sliced as $value): ?>

<div class="long-card">
    <small>


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
    <div class="v_types">
        <span class="one"><b><?=$data_sliced[$i]->v_count?></b></span>
        <span class="two"><b><?=$data_sliced[$i]->mild_v?></b></span>
        <span class="three"><b><?=$data_sliced[$i]->average_v?></b></span>
        <span class="four"><b><?=$data_sliced[$i]->heavy_v?></b></span>
    </div>
</div>

<?php $i++;?>
<?php endforeach;?>
<?php endif?>
<?php endif?>
<?php if(!$data):?>
    <div class="empty"><h3 ><i class="fa-solid fa-chart-simple"></i> &nbsp;No data to show</h3></div>
    <?php endif ?>
<?php $this->view('includes/footer')?>


<!-- <script src="<?=ROOT?>/assets/organizationpage.js"></script> -->