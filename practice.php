<?php
include('config/init.php');

if(isset($_REQUEST['newInventoryItem'])){
    insertInventoryItem(
        $_REQUEST['name'],
        $_REQUEST['description'],
        $_REQUEST['category']
    );
    //redirect page
}

?>
<h1>
        Add inventory form
</h1>
<form action='' method='post'>
        Name:
        <input type='text' name='name' /><br />
        
        Description
        <input type='text' name='description' /><br />

        Position:
        <select name='category'>
                <option value='Produce'>Fruits and veggies</option>
                <option value='Drink'>Soda and other drinks</option>
                <option value='Frozen'>Frozen food aisle</option>
                <option value='Dairy'>The dairy section</option>
        </select>

        <br/><br/>
        <input type='submit' name='newInventoryItem' value='Submit your application' />
</form>