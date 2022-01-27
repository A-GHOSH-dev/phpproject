
const form = document.getElementById("form") ;
const team = document.getElementById("team") ;
const nam = document.getElementById("nam") ;
const regno = document.getElementById("regno") ;
const dept = document.getElementById("dept") ;
const email = document.getElementById("email") ;
const phone = document.getElementById("phone") ; 
//To prevent submission of form with no values...
form.addEventListener('submit' , (e) => {        
    e.preventDefault() ;
    checkInputs() ;



function checkInputs()
{
    //To get values from the input
    const teamValue = team.value.trim();
    const namValue = nam.value.trim() ;
    const regnoValue = regno.value.trim() ;
    // c    onst deptValue = dept.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
    if (teamValue === '')
    {
        //Error class
        setErrorFor(team , 'Name cannot be blank');
    }else if (teamValue.match(letters))
    {
        setSuccessFor(team) ;
    }
    
    if (namValue === '')
    {
        //Error class
        setErrorFor(nam , 'Name cannot be blank');
    }else if (namValue.match(letters))
    {
        setSuccessFor(nam) ;
    }
    
    
    if (regnoValue === '')
    {
        setErrorFor(regno , 'Registration Number cannot be empty');

    }
    else{
        setSuccessFor(regno);
    }
    if (emailValue === '')
    {
        setErrorFor(email , 'Email cannot be blank');
    }else if (!isEmail(emailValue)){
        setErrorFor(email , 'Enter a valid email ID');
    }else{
        setSuccessFor(email);
    }
    if (deptValue === '' || deptValue === null)
    {
        //Error class
        setErrorFor(nam , 'Name cannot be blank');
    }else if (deptValue.match(letters))
    {
        setSuccessFor(dept) ;
    }
    if (phoneValue === '')
    {
        //Error class
        setErrorFor(phone , 'Phone number cannot be blank');
    }else if (phoneValue.match(numbers))
    {
        setSuccessFor(phone) ;
    }else{
        setErrorFor(phone , 'Enter a valid number');
    }
}

    function setErrorFor(input , message)
    {
        const formControl = input.parentElement ;
        const small = formControl.querySelector('small');
        small.innerText = message ;

        formControl.className = "form-control error" ;
    }
    function setSuccessFor(input)
    {
        const formControl = input.parentElement ;
        formControl.className = "form-control success" ;
    }

    function isEmail(email) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }


const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});
})


$(document).ready(function(){

    $('#teamno').hide() ;
    $('.form-control1').hide() ;
    $('.form-control2').hide();

    $('#Noofteam').on('change' , function() {

        var Noofteam = $(this).val() ;
        console.log(Noofteam);
        if (Noofteam == "zero")
        {
            $('#teamno').hide() ;
            $('.form-control1').hide() ;
            $('.form-control2').hide() ;
            
        }
        else if (Noofteam == "one")
        {
           $('#teamno').show();
           $('.form-control1').show() ;
           $('.form-control2').hide() ;
        }
        else if (Noofteam == "two")
        {
            //$('#teamno').hide();
            $('.form-control1').hide() ;
           $('.form-control2').show() ;
           
        }
        /*else if (Noofteam == "three")
        $('#teamno').hide();
        $('.form-control1').hide();
        $('.form-control2').show();
        */
    });

});
