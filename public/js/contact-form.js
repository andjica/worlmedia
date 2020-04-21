$(document).ready(function(){
    $('#contact-form-an').submit(function(e){
        
        let subject = $('#subject').val();
        let ersubject = document.getElementById('er-subject');

        
        let message = $('#message').val();
        let ermessage = document.getElementById('er-message');

        let errors = [];

        if(subject == "")
        {
          e.preventDefault();
          ersubject.innerHTML = "Please enter a subject";
          errors.push = "Mistake";
        }

        if(message == "")
        {
            e.preventDefault();
            ermessage.innerHTML = "Please enter a message";
            errors.push = "Mistake";
        }

        if(errors.length == 0)
        {
           return true;
        }

    });
});