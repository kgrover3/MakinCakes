
//Ken Grover, 4/19/2013

<?php 
 $to = "megan@makincakes.com";
 $from = $_REQUEST['email'];
 $name = $_REQUEST['lastname'];
 $subject = "Cake Order";
 
 $fields = array();
 $fields["lastname"] = "Last Name";
 $fields["firstname"] = "First Name";
 $fields["email"] = "Email";
 $fields["phone"] = "Phone";
 $fields["address"] = "Address";
 $fields["city"] = "City";
 $fields["state"] = "State";
 $fields["zip"] = "Zip";
 
 $fields["event"] = "Event Type";
 $fields["otherEvent"] = "Other Event Type";
 $fields["guests"] = "Number of Guests";
 $fields["month"] = "Month";
 $fields["day"] = "Day";
 $fields["year"] = "Year";
 $fields["time"] = "Time of Day";
 
 $fields["flavor"] = "Flavor";
 $fields["frosting"] = "Frosting";
 $fields["embellishments"] = "Embellishments";
 $fields["fondant"] = "Fondant";
 $fields["style"] = "Style";
 $fields["servings"] = "Number of Servings";
 $fields["sheet"] = "Additional Sheet Cakes";
 $fields["sheetserve"] = "Additional Servings";
 $fields["details"] = "Cake Details";
 
 $body = "Cake Order:\n\n"; foreach($fields as $a => $b){ 	$body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); } 
 
 if($from == '') {print "You have not entered an email, please go back and try again";} 
 else { 
 if($name == '') {print "You have not entered a name, please go back and try again";} 
 else { 
 $send = mail($to, $subject, $body);  
 if($send) 
 {header( "Location: http://www.makincakes.com/thankyou.html" );} 
 else 
 {print "We encountered an error sending your mail, please notify webmaster@YourCompany.com"; } 
 }
}
 ?> 