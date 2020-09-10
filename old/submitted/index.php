<html>
<head>
  <title>Assignment-1</title>
</head>
<body style="background-color:whitesmoke;">
    <span><span style="color: red;">*</span> - Denotes Required Information</span>
    <p> <b> > 1 Donation</b> > 2 Confirmation  >Thank You!</p>
    <h2 style= "color:red""font-weight: bold;">Donor Information</h2>
 <form action="submitted.php" method="post">
  <table>
   <tr>
    <td style="text-align:right"><strong>First Name</strong> <strong style= "color:red""font-weight: bold;">* </strong></td>
    <td><input type="text" name = "first_name"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Last Name</strong> <strong style= "color:red""font-weight: bold;">* </strong></td>
    <td><input type="text" name = "last_name"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Company</td>
    <td><input type="text" name = "company"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Address 1</strong><strong style= "color:red""font-weight: bold;">* </strong></td>
    <td><input type="text" name="address_1"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Address 2</strong></td>
    <td><input type="text" name="address_2" value=""></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>City</strong><strong style= "color:red""font-weight: bold;">* </strong></td>
    <td><input type="text" name= "city"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>State</strong><strong style= "color:red""font-weight: bold;">* </strong></td>
    <td>
    <select style="border-radius: 5px;" name="state">
        <option selected hidden>Select a state</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Cumilla">Cumilla</option>
        <option value="Khulna">Khulna</option>
        <option value="Barishal">Barishal</option>
        <option value="Rajshahi">Rajshahi</option>
    </select>
    </td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Zip Code</strong> <strong style= "color:red""font-weight: bold;">* </strong></td>
    <td><input type="text" name= "zip_code"></td>
   </tr>
   <tr>
   <tr>
    <td style="text-align:right"><b>Country</b><b style= "color:red""font-weight: bold;">* </b></td>
    <td>
    <select style="border-radius: 5px; " name ="country">
        <option selected hidden>Select a Country</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">India</option>
        <option value="Pakistan">Pakistan</option>
        <option value="USA">USA</option>
        <option value="Sudia">Sudia</option>
    </select>
    </td>
   </tr>
    <td style="text-align:right"><strong>Phone</strong></td>
    <td><input type="text" name="phone"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Fax</strong></td>
    <td><input type="text" name="fax"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Email</strong><strong style= "color:red""font-weight: bold;">* </strong></td>
    <td><input type="text" name="email"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Donation Amount</strong><strong style= "color:red""font-weight: bold;">* </strong></td>
    <td>
     <input type="radio" name="amount" value ="None"> None
     <input type="radio" name="amount" value="$50"> $50
     <input type="radio" name="amount" value="$75"> $75
     <input type="radio" name="amount" value="$100"> $100
     <input type="radio" name="amount" value="$250"> $250
     <input type="radio" name="amount" value="Other"> Other
    </td>
   </tr>
   <tr>
    <td style="text-align:right">(Check a button or type in your amount)</td>
    <td style><strong>Other Amount $ </strong><input type="text" name = "other_amount"></td>
   </tr>

   <tr>
    <td style="text-align:right"><b>Recurring Donation</b></td>
    <td>
    <input type="checkbox" name= "recurr_dntion">
    <label for="recuuring_dntion">I am interested in giving on a regular basis</label><br>
    </td>
    <tr>
        <td style="text-align:right">(Check if yes)</td>
        <td>Monthly Credit Card $ <input type="text"  size="5" name="credit"> For <input type="text" size="5" name="months"> Months</td>
       </tr>
   </tr>
   <tr>
       <td> <h2 style="color:red""font-weight: bold;">Honorarioum and Memorial Donation Information</h2></td>
   </tr>
   <tr>
    <td style="text-align:right">I would like to make this donation</td>
    <td>
    <input type="radio" id="To honor" name="option1" value="To Honor">
    <span >To Honor</span><br>
    <input type="radio" id="In memory" name="option1" value="In Memory Of">
    <span >In Memory Of</span><br>
    </td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Name</strong> </td>
    <td><input type="text" name="dntion_name"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Acknowledge Donation to</strong> </td>
    <td><input type="text" name="ack_dntion_to"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Adress</strong></td>
    <td><input type="text" name="address"></td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>City</strong></td>
    <td><input type="text" name="dntion_city"></td>
   </tr>
   <tr>
    <td style="text-align:right"><b>State</b></td>
    <td>
        <select style="border-radius: 5px;" name="dntion_stat">
            <option selected hidden>Select a state</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Cumilla">Cumilla</option>
            <option value="Khulna">Khulna</option>
            <option value="Barishal">Barishal</option>
            <option value="Rajshahi">Rajshahi</option>
        </select>
    </td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>Zip</strong></td>
    <td><input type="text" name="dntion_zip"></td>
   </tr>

   <tr>
    <td> <h3 style="color:red""font-weight: bold;">Additional Information</h3></td>
   </tr>
   <tr>
       <td>Please enter your name, company or organization as you would like it to appear in our publication:</td>
   </tr>
   <tr>
    <td style="text-align:right"><b>Name</b></td>
    <td><input type="text" name="adtion_name"></td>
   </tr>
   <tr>
    <td>
    <input type="checkbox" value="I would like my gift to ramin anonymous." name ="contact[]">
    <label for="I would like my gift to ramin anonymous.">I would like my gift to ramin anonymous.</label><br>
	
    <input type="checkbox" value="My employer offers a matching gift program, i will mail the matching gift from." name ="contact[]">
	
    <label for="My employer offers a matching gift program, i will mail the matching gift from.">My employer offers a matching gift program, i will mail the matching gift from.</label><br>
	
    <input type="checkbox" value="Please Save the cost of acknowledging this gift by not mailing a thank you letter" name ="contact[]">
	
    <label for="Please Save the cost of acknowledging this gift by not mailing a thank you letter.">Please Save the cost of acknowledging this gift by not mailing a thank you letter.</label><br>
    </td>
   </tr>
   <tr>
       <td style="text-align:right""><strong>Comments</strong><br><span>(Please type any question or feedback here)</span></td>
       <td> 
           <textarea rows="4" cols="50" name="feedback">
            </textarea>
       </td>
   </tr>
   <tr>
    <td style="text-align:right"><strong>How may we contact you?</strong></td>
    <td>
    <input type="checkbox" value="E-mail" name="contact2[]">
    <label for="E-mail">E-mail</label><br>
    </td>
   </tr>
   <tr>
       <td style="text-align: right;"></td>
        <td>
            <input type="checkbox" value="Postal Mail" name="contact2[]">
            <label for="Postal Mail">Postal Mail</label><br>
            <input type="checkbox" value="Telephone" name="contact2[]">
            <label for="Telephone">Telephone</label><br>
            <input type="checkbox" value="Fax" name="contact2[]">
            <label for="Fax">Fax</label>
        </td>
   </tr>
    <tr>
        <td colspan="2" style="color: slategray;">I would like to receive newsletters and information about special events by:</td>
    </tr>
    <tr>
        <td style="text-align: right;"></td>
         <td>
             <input type="checkbox" value="E-Mail" name="newsletters[]">
             <label for="E-Mail">E-Mail</label><br>
             <input type="checkbox" value="Postal Mail" name="newsletters[]">
             <label for="Postal Mail">Postal Mail</label>
         </td>
    </tr>
   <tr>
       <td>
    <input type="checkbox" value="I would like to inormation about volunteering with the" name="volunteering">
    <label for="I would like to inormation about volunteering with the">I would like to inormation about volunteering with the</label><br>
    </td>
   </tr>
   <tr>
       <td style="text-align:right">
           <button style="border-radius: 10px;">Reset</button>
		   <input type = "submit" value="Continue" style="border-radius: 10px;">
       </td>
   </tr>
   <tr>
       <td>Donate online with confidence. You are on a secure server.</td>
   </tr>
   <tr>
    <td>If you have any problems or questions, please contact <span style="color: slategray;">support.</span></td>
   </tr>
  </table>
 </form>
</body>
</html>