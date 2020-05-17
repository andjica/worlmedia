$(document).ready(function(){
            
            
    $('#idemo').on('click',disableButton);
    
    $('#message-match').on('keyup',function(){

        let mmatch = $('#message-match').val();

        if(mmatch=="")
        {
            
            $('#message-match').css('border-color','red');
            checkErrors();
            disableButton();
            
        }
        else
        {
            $('#message-match').css('border-color','blue');
            checkErrors();
        }

    });

    $('#email-match').on('keyup',function(){

        let emailm = $('#email-match').val();

        let emailReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

        if(!emailReg.test(emailm))
        {
            
            $('#email-match').css('border-color','red');
            checkErrors();
            disableButton();
        }
        else
        {
            $('#email-match').css('border-color','blue');
            checkErrors();
            
            
        }


    });
  
    function checkErrors(){
        
        let greske = [];
        let mmatch = $('#message-match').val();

        if(mmatch=="")
        {
            greske.push("bad");
            
            
        }

        let emailm = $('#email-match').val();

        if(emailm=="")
        {
            greske.push("bad");
        }    


    if(greske.length==0)
    {
        
        enableButton();
      
        
    }
        
    
} 
})

function enableButton()
{

    $('#match-apply').prop('disabled',false);  
    

}

function disableButton()
{
    $('#match-apply').prop('disabled',true);
}
 