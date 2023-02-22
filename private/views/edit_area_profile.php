<?php $this->view('includes/header')?>
<link rel="stylesheet" href="<?=ROOT?>/assets/profile.css">
<?php $this->view('includes/navbar')?>
<?php $this->view('includes/submenu')?>

<div class="heading">
        <p>My Profile</p>
    </div>

    <div class="profile">
        <div class="details">
            <div class="profile-pic">
                <?php
                $image="./images/user_icon.png";
                if(file_exists($rows->profile_pic)){
                    $image=$rows->profile_pic;
                    // echo $user["profile_pic"];
                }
                
                ?>

                <img src="<?php echo $image?>" alt="" class="des-user-icon" >
                <div class="remove">
                    <a href="changepic">Upload new |</a>
                    <form method="post" action="./delete_pic.php" class="remove_form"><button type="submit"
                            class="remove_button">Remove</button> </form>
                </div>
                <a href="current_password"><button class="change-pwd">Change Password</button></a>
            </div>

            <div class="profile-details">
                <form action="" class="form" method="post">

                    <div class="name">

                        <div class="f1">
                            <label for="name">Name</label>
                            <input type="text" value="<?php echo $rows->name?>" class="small"
                                name="name" >
                        </div>
                    </div>
                    <div class="f3">
                        <label for="NIC">NIC</label>
                        <input type="text" value="<?php echo $rows->nic?>" class="small" name="nic">
                    </div>

                    <div class="f4">
                        <label for="email">Email</label>
                        <input type="text" value="<?php echo $rows->email?>" class="small" name="email" readonly>
                    </div>
                    <div class="address_n_city">
                        <div class="f">
                            <label for="address">District</label>
                            <input type="text" value="<?php echo $rows->district?>" name="district" readonly>
                        </div>
                        <div class="f">
                            <label for="city">Area</label>
                            <input type="text" value="<?php echo $rows->area?>" class="small" name="area" readonly>
                        </div>
                    </div>

                    <div class="f">
                        <label for="postal_code">Phone Number</label>
                        <input type="text" value="<?php echo $rows->phone_no?>" class="small" name="phone_no">
                    </div> 
                    <button class="save" type="submit" name="submit">Save Changes</button>
                </form>
            </div> 
        </div> 
    </div>

<?php $this->view('includes/footer')?>