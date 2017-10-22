function checkPass()
    	{
    		var pass1 = document.getElementById('pass1');
    		var pass2 = document.getElementById('pass2');
    		var message = document.getElementById('ConfirmMessage');

    		var succ_color = "#66cc66";
    		var fail_color = "#ff6666";

    		if (pass1.value == pass2.value)
    		{
    			pass2.style.backgroundcolor = succ_color;
    			message.style.color = succ_color;
    			message.innerHTML = "Passwords Match";
    		}
    		else
    		{
    			pass2.value.backgroundcolor = fail_color;
    			message.style.color = fail_color;
    			message.innerHTML = "Passwords do not match!";
    		}
    	}


    	function validate(txt)
    	{
    		txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
		}


		function email_validate(email)
		{
			var regmail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

		    if(regmail.test(email) == false)
    		{
    			document.getElementById("status").innerHTML = "<span class='warning'>Email-ID is not valid yet.</span>";
    		}
    		else
    		{
    			document.getElementById("status").innerHTML	= "<span class='valid'>You have entered a valid Email-ID!</span>";	
    		}
		}
