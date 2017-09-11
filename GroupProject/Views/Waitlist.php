
    <form action="index.php"  method="post">
        <h2>Waitlist
        <input type='hidden' name='action' value='addWait'>
        <input type='submit' class='addWait' value='ADD'> 
        </h2>
    </form>
<hr>
<div class="wait">
    <?php
    $currentWaitlist = $waitList->getWaitlist();
    foreach ($currentWaitlist as $index=>$customer):
        ?>
        <p>
            <form action='index.php' method='post'>
            <?php echo $customer->getCustomerName() ?>
            <br>Party of 
            <?php echo $customer->getPartySize() ?>
            <br>
            <input type='hidden' name='action' value='deleteWait'>
            <input type='hidden' name='index' value='<?php echo $index; ?>'>
            <input type='submit' class='deleteWait' value='DELETE'>
        </form>
        </p>

    <?php endforeach; ?>

</div>