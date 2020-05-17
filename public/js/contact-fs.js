$(document).ready(function(){
    $('#contact-fs').submit(function(e){

        let den = $('#val1').val();
        let erden = document.getElementById('erval1');

        let and = $('#val2').val();
        let erand = document.getElementById('erval2');

        let svetlanica = $('#val3').val();
        let ersvetlanica = document.getElementById('erval3');

        let ljubisa = $('#val4').val();
        let erljubisa = document.getElementById('erval4');


        let errors = [];

        if(den == ""){
          e.preventDefault();
          errors.push = "Please fil in your name";
          erden.innerHTML = "Please fil in your name";     

        }

        if(and == ""){
          e.preventDefault();
          errors.push = "ouch, mistake is made";
          erand.innerHTML = "please fill in your email";
        }

        if(svetlanica == ""){
          e.preventDefault();
          errors.push = "ouch, another mistake";
          ersvetlanica.innerHTML = "please fill in the subject";
        }

        if(ljubisa == ""){
          e.preventDefault();
          errors.push = "mistake again";
          erljubisa.innerHTML = "please fill in the message";
        }
        let emailReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

        if(!emailReg.test(and))
        {

              erand.innerHTML = "Please enter a valid email address";
              errors.push = "nije ok";
              e.preventDefault();
        }

        if(erros.length == 0){
          return true;
        }

        
                          


    });
});