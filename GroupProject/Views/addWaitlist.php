<?php include('Views/header.php') ?>


<main>
    <section class='waitList'>
        <fieldset>
            <legend>
                Add to Waitlist
            </legend>

            <form action='index.php' method='POST'>

                <label>Customer Name: </label>
                <input type='text' name='cust_name'>
                <br>

                <label>Phone Number: </label>
                <input type='text' name='phone_number'>
                <br>

                <label>Party Size: </label>
                <input type='text' class='pSize' name='party_size'>
                <br>

                <label>Check-in Time: </label>
                <input type='time' name='in_time'>
                <br>
                <input type='hidden' name='action' value='wait_confirm'>
                <input type='submit' value='ENTER'>
            </form>

        </fieldset>

    </section>
</main>



<?php include('Views/footer.php') ?>
