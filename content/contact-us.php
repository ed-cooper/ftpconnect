<p>
    Have an issue, feature request, or are you in need of some support?
</p>
<p>
    Send us an email at
    <a href="mailto:contact@ftpconnect.tk">contact@ftpconnect.tk</a>,
    or use the form below:
</p>
<form id="emailform" method="post" action="/api/sendmail.php">
    <div class="form-group">
        <label class="control-label" for="emailform-name">Name:</label>
        <input type="text" class="form-control" name="name" id="emailform-name" />
    </div>
    <div class="form-group">
        <label class="control-label" for="emailform-email">Email:*</label>
        <input type="email" class="form-control" name="email" id="emailform-email" required />
    </div>
    <div class="form-group">
        <label class="control-label" for="emailform-subject">Subject:</label>
        <input type="text" class="form-control" name="subject" id="emailform-subject" />
    </div>
    <div class="form-group">
        <label class="control-label" for="emailform-message">Message:*</label>
        <textarea class="form-control" name="message" id="emailform-message" rows="4" required ></textarea>
    </div>
    <input type="submit" class="btn-submit" value="Send" />
</form>
<style>
    #emailform {
        background-color: #e1e8e9;
        border-radius: 3px;
        padding: 10px 20px;
        margin-bottom: 20px;
    }
    
    .form-group {
        margin-bottom: 10px;
    }
    
    .control-label {
        font-family: "roboto slab", sans-serif;
        font-size: 12pt;
        font-weight: bold;
        margin: 5px 0;
        display: block;
    }
    
    .form-control {
        background-color: #f5f9fb;
        width: 100%;
        display: block;
        box-sizing: border-box;
        border: none;
        border-radius: 3px;
        padding: 7px;
        outline: 0;
        transition: background-color 0.2s ease-in;
        font-family: 'Roboto', sans-serif;
    }
    
    .form-control:focus {
        background-color: #ecf2f4;
    }
    
    .invalid {
        background-color: #ff9999;
    }
    
    .form-control.invalid:focus {
        background-color: #ff8080;
    }
    
    .btn-submit {
        background-color: #f5f9fb;
        border: none;
        border-radius: 3px;
        padding: 7px 17px;
        margin-bottom: 10px;
        transition: all 0.2s ease-in;
    }
    
    .btn-submit:hover {
        background-color: #ecf2f4;
    }
</style>
<script>
    var emailform = document.getElementById("emailform");
    var emailinput = document.getElementById("emailform-email");
    var messageinput = document.getElementById("emailform-message");
    
    emailform.onsubmit=function(e) {
        // Check required fields (should be done by browser but use JS if not)
        if (emailinput.value === "") { // No email given
            emailinput.className  = "form-control invalid";
            return;
        } else {
            emailinput.className  = "form-control";
        }
        
        if (messageinput.value === "") { // No message given
            messageinput.className  = "form-control invalid";
            return;
        } else {
            messageinput.className  = "form-control";
        }
        
        // Passed validation
        
        // Create request
        var request = new XMLHttpRequest();
        request.open("POST", "/api/sendmail.php", true);
        request.send(new FormData(emailform));
        e.preventDefault = false;
        return false;
    }
</script>