$(document).ready(function(){
    $('#adding-info').submit(function(e){

      let link = $('#link').val();
      let erurl = document.getElementById('er-url');
      let suurl = document.getElementById('su-url');
     
      let mobile = $('#mobile').val();
      let ermobile = document.getElementById('er-mobile');
      let sumobile = document.getElementById('su-mobile');

      let regexurl = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
      let regexmobile = /^\+[1-9][0-9 ]{7,}$/

      let errors = [];

      if(!regexmobile .test(mobile)) 
      {
          e.preventDefault();
          $('#mobile').css('border-color','red');
          ermobile.innerHTML ='Enter url adrress like: +381609636935';
          errors.push = "Mistake";
      }
      else
      {
        $('#mobile').css('border-color','blue');
        sumobile.innerHTML = 'Mobile ok';
      }

      if(!regexurl.test(link)) 
      {
          e.preventDefault();
          $('#link').css('border-color','red');
          erurl.innerHTML ='Enter url adrress like: http://dfambusiness.com/';
          errors.push = "Mistake";
      }
      else
      {
          $('#link').css('border-color','blue');
          suurl.innerHTML = 'Link for web is ok';
      }

      
      if(errors.length == 0)
      {
        return true;
      }
    });
  });

  $(document).ready(function(){
    $('#form-password').submit(function(e){
       
        let pass1 = $('#pass1').val();
        let pass2 = $('#pass2').val();

        let erpass = document.getElementById('er-pass');

        if(pass1 != pass2)
        {
            e.preventDefault();
            $('#pass2').css('border-color','red');
            erpass.innerHTML ='Password must be the same';
        } 

        return true;
    });
});