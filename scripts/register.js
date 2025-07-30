

         
const form = document.getElementById('form');
const fields = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

const emailRegex = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/ ;

var email = $("#email"); 
email.blur(function() { 
    $.ajax({ 
        url: 'verificaEmail.php', 
        type: 'POST', 
        data:{"email" : email.val()}, 
        success: function(data) { 
        console.log(data); 
        data = $.parseJSON(data); 
        $("#resposta").text(data.email);
    } 
}); 
}); 

function setError(sections){
fields[sections].style.border ='solid darkred 2px';
spans[sections].style.display ='block';
}

function removeError(sections){
    fields[sections].style.border ='solid gray 1px';
    spans[sections].style.display ='none';
}

function nameValidate(){

if(fields[0].value.length < 3){
    setError(0);
}
else{
    removeError(0);
}
}

function emailValidate(){
if(!emailRegex.test(fields[1].value))
{
    setError(1);
  
}
else{
    removeError(1);
}
}

function mainPasswordValidate(){
    if(fields[2].value.length < 8){
        setError(2);
    }
    else{
        removeError(2);
        
    }
}

function comparePassword(){
    if(fields[2]. value == fields[3]. value && fields[3].value.length >= 8){
        removeError(3);
    }
    else{

        setError(3);
    }
}
function verifyFields(){
    nameValidate();
    emailValidate();
    mainPasswordValidate();
    comparePassword();
}

