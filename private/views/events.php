<?php $this->view('includes/header')?>
<link rel="stylesheet" href="<?=ROOT?>/assets/events.css">
<?php $this->view('includes/navbar')?>
<?php $this->view('includes/submenu')?>  
 

<div class="heading">Upcoming Events</div>
    <div class="search">
        <form action="">
             <input type="text" name="find" placeholder="Search event by name " class="search-bar">
         <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
       

        <div class="filter">
            <p>Filter by</p>
            <form action="">
            
            <label for="date" >Date</label>
            <input type="date" name="date">
            <label for="location">Location</label>
            <select name="location" id="location">
                <option value="default">Select</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Colombo">Colombo</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Kandy">Kandy</option>
                <option value="Matale">Matale</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Galle">Galle</option>
                <option value="Matara">Matara</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Matara">Matara</option>
                <option value="erlang">Matara</option>
                <option value="erlang">Matara</option>
            </select>
            <button class="b2">Search</button>
            </form>
        </div>
    </div>
    <div class="event-container">
        <div class="event-row">
        <?php $i=0;?>
        <?php if($rows):?>
        <?php foreach($rows as $value):?>
            
            <?php if($i%3==0 && $i!=0) : ?>
                </div>
                <div class="event-row">
             
            <?php endif ?>
            <div class="event">
                <div class="event-top">
                    <p><?php echo $rows[$i] -> name?></p>
                    <div class="event-image">
                    </div>
                    <p class="date"><?php echo $rows[$i]->date?></p>
                </div>

                <div class="event-details">
                    <div class="donations">
                        <p>Donations</p>
                        <p><img src="./images/Icons/ArrowLog.png"><?=$rows[$i]->total_amount?> LKR</p>
                    </div>

                    <div class="progress">
                        <div class="progress-bar">
                            <div></div>
                        </div>
                        <span>50%</span>
                    </div>
                    <div class="volunteers">
                        <p>Volunteers </p>
                        <p><img src="./images/Icons/ArrowLog.png"><?=$rows[$i]->no_of_volunteers?> people</p>
                    </div>

                    <div class="progress">
                        <div class="progress-bar">
                            <div></div>
                        </div>
                        <span>50%</span>
                    </div>
                </div>

                <div class="event-button">
                    <button class="b1">Donate</button>
                    <button class="b2">Volunteer</button>
                </div>
            </div>
            <?php $i++;
            // echo ($i); ?>
            
        <?php endforeach; ?>
        <?php endif?>
        </div>
        

    </div>
<?php $this->view('includes/footer')?>