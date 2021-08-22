const Name=document.getElementById("Name");
const Phone=document.getElementById("Phone");
const Email=document.getElementById("Email1");
const Pass=document.getElementById("Password1");
const pass2=document.getElementById("Password2");
const signup=document.getElementById("signup");
const signin=document.getElementById("signin");
const File1=document.getElementById("customFile");
const comm=document.getElementById("comm");
const Emailin=document.getElementById("Email");
const Passin=document.getElementById("Password");
var name1=false; 
var email=false;
var phone=false;
var pass=false;
signup.addEventListener('click',(event)=>{
    document.getElementById("signin-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
    document.getElementById("SignIn").style.animationName="signinan";
    document.getElementById("SignUp").style.animationName="";
    document.getElementById("SignUp").style.backgroundImage="none";
   
})
signin.addEventListener('click',(event)=>{
    document.getElementById("signin-form").style.display="block";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("SignUp").style.animationName="signupan";
    document.getElementById("SignIn").style.animationName="";

})
Name.addEventListener('change', (event) => {
     if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z ]*$/.test(Name.value)) {
        document.getElementById("name").textContent="";
        name1=true;

     }else{
        document.getElementById("name").textContent="The Name should include only Letters";
        name1=false;
     }
     if(name1 && phone &&pass &&email &&File1.value != "" &&comm.value != "selectcard"){
        document.getElementById("up").disabled = false;
    }else{
        document.getElementById("up").disabled = true;
    } 
});

Phone.addEventListener('change',(event)=>{
    if(Phone.value.slice(0,2) != 01 || Phone.value.length != 11 || /[^0-9]/.test(Phone.value)){
        document.getElementById("number").textContent="Please enter a valid number";
        phone=false;
    }else{
        document.getElementById("number").textContent="";
        phone=true;
    }
    if(name1 && phone &&pass &&email && File1.value != "" &&comm.value != "selectcard"){
        document.getElementById("up").disabled = false;
    }else{
        document.getElementById("up").disabled = true;
    } 
})

Email.addEventListener('change',(event)=>{
    if(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(Email.value)){
        document.getElementById("email").textContent="";
        email=true;
    }else{
        document.getElementById("email").textContent="Please enter a valid e-mail";
        email=false;
    }
    if(name1 && phone &&pass &&email &&File1.value != "" &&comm.value != "selectcard"){
        document.getElementById("up").disabled = false;
    }else{
        document.getElementById("up").disabled = true;
    } 
    
})


Pass.addEventListener('change',(event)=>{
    if(Pass.value.length <6){
     document.getElementById('pass').textContent="Password should be 6 charcter at least";
     pass=false;    
    }else{
        document.getElementById('pass').textContent=""; 
        pass=true;       
    }
    if(name1 && phone &&pass &&email && File1.value != "" &&comm.value != "selectcard"){
        document.getElementById("up").disabled = false;
    }else{
        document.getElementById("up").disabled = true;
    } 
})

pass2.addEventListener('change',(event)=>{
  if(Pass.value==pass2.value){
    document.getElementById('repass').textContent="";  
    if(name1 && phone &&pass &&email && File1.value != "" &&comm.value != "selectcard"){
        document.getElementById("up").disabled = false;
     }    
  }  else{
    document.getElementById('repass').textContent="Two password not the same!";      
    document.getElementById("up").disabled = true;
  }
})

File1.addEventListener('change',(event)=>{
    if(name1 && phone &&pass &&email &&File1.value != "" &&comm.value != "selectcard"){
        document.getElementById("up").disabled = false;
    }else{
        document.getElementById("up").disabled = true;
    } 
})

comm.addEventListener('change',(event)=>{
    if(name1 && phone &&pass &&email &&File1.value != "" &&comm.value != "selectcard"){
        document.getElementById("up").disabled = false;
    }else{
        document.getElementById("up").disabled = true;
    } 
})
//check in sign in form
Emailin.addEventListener('change',(event)=>{
    if(Emailin.value!="" && Passin.value!=""){
        document.getElementById("in").disabled = false;
    }else{
        document.getElementById("in").disabled = true;
    }
})
Passin.addEventListener('change',(event)=>{
    if(Emailin.value!="" && Passin.value!=""){
        document.getElementById("in").disabled = false;
    }else{
        document.getElementById("in").disabled = true;
    }
})
