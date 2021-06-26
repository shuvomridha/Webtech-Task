<!DOCTYPE html>
<html>
<body>

<h5>* - Denotes Required Information</h5>
<h4>> 1 Donation > 2 Confirmation > Thank You!</h4>

<h2>Donor Information</h2>
<form action="/action_page.php">
  <label for="username">First Name:</label>
  <input id="user_first_name" name="user[first_name]" size="30" type="text"/><br><br>
  <label for="username">Last Name:</label>
  <input id="user_last_name" name="user[last_name]" size="30" type="text"/><br><br>
  <label for="company">Company:</label>
  <input id="company" name="company[company]" size="30" type="text"/><br><br>
  <label for="address">Address 1:</label>
  <input id="address" name="address[address_1]" size="30" type="text"/><br><br>
  <label for="address">Address 2:</label>
  <input id="address" name="address[address_2]" size="30" type="text"/><br><br>
  <label for="city">City:</label>
  <input id="city" name="city[city]" size="30" type="text"/><br><br>
  <label for="State">State:</label>
  <select name="state" id="state">
    <option value="select a state">Select a State</option>
    <option value="texas">Texas</option>
    <option value="california">California</option>
    <option value="washington">Washington</option>
  </select><br><br>
  <label for="zip code">Zip Code:</label>
  <input id="zip code" name="zip code[zip code]" size="30" type="text"/><br><br>
  <label for="country">Country:</label>
  <select name="country" id="country">
    <option value="select a country">Select a Country</option>
    <option value="usa">USA</option>
    <option value="england">England</option>
    <option value="germany">Germany</option>
  </select><br><br>
  <label for="phone">Phone:</label>
  <input id="phone" name="phone[phone]" size="30" type="text"/><br><br>
  <label for="fax">Fax:</label>
  <input id="fax" name="fax[fax]" size="30" type="text"/><br><br>
  <label for="email">Email:</label>
  <input id="email" name="email[email]" size="30" type="text"/><br><br>
  <label for="donation amount">Donation Amount<br>(Check a button or type in your amount):</label>
  <input type="radio" id="none" name="donation amount" value="none">
  <label for="none">None</label>
  <input type="radio" id="$50" name="donation amount" value="$50">
  <label for="$50">$50</label>
  <input type="radio" id="$75" name="donation amount" value="$75">
  <label for="$75">$75</label>
  <input type="radio" id="$100" name="donation amount" value="$100">
  <label for="$100">$100</label>
  <input type="radio" id="$250" name="donation amount" value="$250">
  <label for="$250">$250</label><br>
  <label for="other amount">Other Amount $:</label>
  <input id="other amount" name="other amount[other amount]" size="30" type="text"/><br><br>
  <label for="recurring donation">Recurring Donation<br>(Check if yes):</label>
  <input type="checkbox" id="none" name="donation amount" value="none">
  <label for="none">I am interested in giving on a regular basis.</label><br><br>
  <label for="amount">Monthly Credit Card $</label>
  <input id="amount" name="amount[donation amount]" size="5" type="text"/>
  <label for="amount">For</label>
  <input id="amount" name="amount[donation amount]" size="5" type="text"/>
  <label for="amount">Month</label>
</form><br><br> 

<h2>Honorarium and Memorial Donation Information</h2>
<form action="/action_page.php"> 
  <label for="donation amount">I would like to make this donation:</label>
  <input type="radio" id="none" name="donation amount" value="none">
  <label for="none">To Honor</label>
  <input type="radio" id="none" name="donation amount" value="none">
  <label for="none">In Memory of</label><br><br>
  <label for="username">Name:</label>
  <input id="user_name" name="user[name]" size="30" type="text"/><br><br>
  <label for="username">Acknowledge donation to:</label>
  <input id="user_name" name="user[name]" size="30" type="text"/><br><br>
  <label for="address">Address:</label>
  <input id="address" name="address" size="30" type="text"/><br><br>
  <label for="city">City:</label>
  <input id="city" name="city" size="30" type="text"/><br><br>
  <label for="State">State:</label>
  <select name="state" id="state">
    <option value="select a state">Select a State</option>
    <option value="texas">Texas</option>
    <option value="california">California</option>
    <option value="washington">Washington</option>
  </select><br><br>
  <label for="zip">Zip:</label>
  <input id="zip" name="zip[zip]" size="30" type="text"/><br><br>
</form>  

<h2>Additional Informaton</h2>
<form action="/action_page.php"> 
   <label for="publication">Please enter your name, company or organization as you would like it to appear in our publication:</label><br><br>
   <label for="username">Name</label>
   <input id="user_name" name="user[name]" size="30" type="text"/><br><br>
   <input type="checkbox" id="none" name="donation amount" value="none">
   <label for="none">I would like my gift to anonymous.</label><br><br>
   <input type="checkbox" id="none" name="donation amount" value="none">
   <label for="none">My employer offers a matching gift program. I will mail the matching gift form</label><br><br>
   <input type="checkbox" id="none" name="donation amount" value="none">
   <label for="none">Please save the cost of acknowledging this gift by not mailing a thank you letter.</label><br><br>
   <label for="comments">Comments<br>(Please type any questions or feedback here)</label><br><br>
   <textarea rows="4" cols="50" name="comment" form="usrform"></textarea><br><br>
   <label for="contact">How may we contact you?</label>
   <input type="checkbox" id="none" name="e-mail" value="none">
   <label for="none">E-mail</label>
   <input type="checkbox" id="none" name="postal mail" value="none">
   <label for="none">Postal Mail</label>
   <input type="checkbox" id="none" name="telephone" value="none">
   <label for="none">Telephone</label>
   <input type="checkbox" id="none" name="fax" value="none">
   <label for="none">Fax</label><br><br>
    <label for="recieve">I would like to recieve newsletters and information about special events by:</label>
   <input type="checkbox" id="none" name="e-mail" value="none">
   <label for="none">E-mail</label>
   <input type="checkbox" id="none" name="postal mail" value="none">
   <label for="none">Postal Mail</label><br><br>
   <input type="checkbox" id="none" name="information" value="none">
   <label for="none">I would like information about volunteering with the organization.</label><br><br>
   <input type="reset" value="Reset">
   <input type="continue" value="continue">  
</form><br>   

<p>Donate online with confidence, You are on a secure server.</p>
<p>If you have any problems or questions, please contact support.</p>

</body>
</html>
