$(document).ready(function(){
    $("#FormSendSection5").submit(function(e) { 
    		e.preventDefault();
            var form_data = $(this).serialize(); 
            console.log(form_data);
            $.ajax({
            type: "POST", 
            url: "send.php", 
            data: form_data,
            success: function() {
                   alert("Your message has been sent!");
            }
            });
    });
});    