<h2>Waitlist</h2>
<hr>
<div class="wait">
    <?php
    $currentWaitlist = $waitList->getWaitlist();
    foreach ($currentWaitlist as $index=>$customer):
        ?>
        <p>
            <?php echo $customer->getCustomerName() ?>
            <br>Party of 
            <?php echo $customer->getPartySize() ?>
            <br>
        <form action='index.php' method='post'>
            <input type='hidden' name='action' value='deleteWait'>
            <input type='hidden' name='index' value='<?php echo $index; ?>'>
            <input type='submit' class='deleteWait' value='DELETE'>
        </form>
        </p>

    <?php endforeach; ?>
    <form action="index.php"  method="post">
        <input type='hidden' name='action' value='addWait'>
        <input type='submit' class='addWait' value='ADD'> 
    </form>
</div>