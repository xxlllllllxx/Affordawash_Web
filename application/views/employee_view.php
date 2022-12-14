<h1 class="employee">Employee <?= $name ?>
</h1>
<p class="affordawash">AFFORDAWASH <?= $title ?>
</p>

<form action="<?= base_url('main/employee/addCustomer') ?> " method="post">
    <input type="text" placeholder="Enter Customer name" name="customer_name" required="required" class="textbox">
    <input type="submit" value="Enter a new Customer's Name" id="newcustomer">
</form>
-
<style>
    .textbox {
        font-family: 'Courier New', Courier, monospace;
        font-size: 13px;
        padding: 13px;
        width: 300px;
        border: 3px solid white;
        border-radius: 10px;
        background-color: transparent;
        margin: 10px;
        color: white;
    }

    .employee {
        text-align: left;
        margin-left: 5px;
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 4px #000000;
    }

    .affordawash {
        text-align: left;
        margin-left: 5px;
        font-size: 100%;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 4px #000000;
    }


    #newcustomer {
        margin-top: 8px;
        cursor: pointer;
        border-color: #ffffff;
        margin-bottom: 9px;
        border-radius: 10px;
        font-weight: bold;
        color: #ffffff;
        border-width: 0;
        padding: 10px;
        margin-left: 8px;
        margin-bottom: 5px;
        background-color: #0099ff;
    }
</style>