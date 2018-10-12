<?php
session_start();
  require_once 'tools.php';
      top_module('Check Out');
      top_nav();
      sign();
?>
<main class='area'>
    <div>
        <div>
            <h1>Payment Details</h1>
        </div>
        <form action='Checkout.php?action=validate' method='post'>
        <table class='checkTable'>
            <tr>
                <th>Name</th>
                <td><input type='username' name='userName' class='info' value='' required/></td>
                </tr>
                <tr>
                <th>Email</th>
                <td><input type='email' name='email' class='info' value='' required/></td>
                </tr>
                <tr>
                <th>Address</th>
            <td><textarea rows="2" name='address' class='info' value='' required/></textarea></td>
            </tr>
            <tr>
                <th>Mobile Phone</th>
            <td><input type='text' name='mobilePhone' class='info' value='' required/></td>
            </tr>
            <tr>
                <th>Credit Card</th>
            <td><input type='text' id = 'creditCard' name='creditCard'  oninput="OnInput (event)" class='info' value='' required/><img src='../../A3media/visa.jpg' id='visa' class='visa' /></td>
            </tr>
            <tr>
                <th>Expire Date</th>
            <td><input type='date' name='expireDate' class='info' value='' required/></td>
            </tr>
        </table>
            <button type='submit' class='btnCheck'>Submit</button>
</form>
    </div>
</main>
<?php
end_module();
