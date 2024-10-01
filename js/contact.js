
const CountryChoices = () => {

    // Get Country choiches
    fetch('https://restcountries.com/v2/all')
    .then((response) => response.json())
    .then((data) => {
        // console.log(data);
        const countrySelect = document.querySelector('.country-select');
        let choices = "";
        choices += "<option selected disabled>Select country..</option>";
        data.forEach(function (country){
            // console.log(country);
            choices += "<option>"+country['name']+"</option>";
        });
        countrySelect.innerHTML = choices;
    });

}

const InterestSelect = () => {
    const interestSelect = document.querySelector('#interest');
    const emailToInput = document.querySelector('#email_to');
    const selected = interestSelect.options[interestSelect.selectedIndex];
    const emailToAttribute = selected.dataset.email;
    emailToInput.value = emailToAttribute;
    // console.log(emailToInput.value);
}

$('#interest').change(function(){
    InterestSelect();
})
// InterestSelect();
CountryChoices();


// document.getElementById("fnamelabel").style.visibility = "hidden";
// document.getElementById("lnamelabel").style.visibility = "hidden";
// document.getElementById("companylabel").style.visibility = "hidden";
// document.getElementById("email_fromlabel").style.visibility = "hidden";
// document.getElementById("joblvllabel").style.visibility = "hidden";
// document.getElementById("industrylabel").style.visibility = "hidden";
// document.getElementById("countrylabel").style.visibility = "hidden";
// document.getElementById("phonelabel").style.visibility = "hidden";
// document.getElementById("about_uslabel").style.visibility = "hidden";
// document.getElementById("messagelabel").style.visibility = "hidden";
// document.getElementById("gcaptchalabel").style.visibility = "hidden";
// document.getElementById("submitlabel").style.visibility = "hidden";

// const getInterestValue = () => {

//     var interest = document.getElementById("interest").value; 

//      if(interest == 'Careers'){
//         document.getElementById("fnamelabel").style.visibility = "visible";
//         document.getElementById("lnamelabel").style.visibility = "visible";
//         document.getElementById("companylabel").style.visibility = "visible";
//         document.getElementById("email_fromlabel").style.visibility = "visible";
//         document.getElementById("joblvllabel").style.visibility = "visible";
//         document.getElementById("industrylabel").style.visibility = "hidden";
//         document.getElementById("countrylabel").style.visibility = "visible";
//         document.getElementById("phonelabel").style.visibility = "visible";
//         document.getElementById("about_uslabel").style.visibility = "visible";
//         document.getElementById("messagelabel").style.visibility = "visible";
//         document.getElementById("gcaptchalabel").style.visibility = "visible";
//         document.getElementById("submitlabel").style.visibility = "visible";
//     }else{
//         document.getElementById("fnamelabel").style.visibility = "visible";
//         document.getElementById("lnamelabel").style.visibility = "visible";
//         document.getElementById("companylabel").style.visibility = "visible";
//         document.getElementById("email_fromlabel").style.visibility = "visible";
//         document.getElementById("joblvllabel").style.visibility = "visible";
//         document.getElementById("industrylabel").style.visibility = "visible";
//         document.getElementById("countrylabel").style.visibility = "visible";
//         document.getElementById("phonelabel").style.visibility = "visible";
//         document.getElementById("about_uslabel").style.visibility = "visible";
//         document.getElementById("messagelabel").style.visibility = "visible";
//         document.getElementById("gcaptchalabel").style.visibility = "visible";
//         document.getElementById("submitlabel").style.visibility = "visible";
//     }
     
//   }


const interest   = document.getElementById("interest")
const fname      = document.getElementById("fname")
const lname      = document.getElementById("lname")
const company    = document.getElementById("company")
const email_from = document.getElementById("email_from")
const joblvl     = document.getElementById("joblvl")
const industry   = document.getElementById("industry")
const country    = document.getElementById("country")
const phone      = document.getElementById("phone")
const about_us   = document.getElementById("about_us")
const message    = document.getElementById("message")
const gcaptcha   = document.getElementById("gcaptcha")
const submit     = document.getElementById("btnSubmit")
const inquiryform = document.getElementById("inquiry")


submit.addEventListener("click", function () {


    const valueData = validateInputs();

     if(valueData === 1){
       inquiryform.submit();
     }

});


const setError = (element, message) => {

    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    // inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


const validateInputs = () => {
    
    const interestValue      = interest.value.trim();
    const fnameValue         = fname.value.trim();
    const lnameValue         = lname.value.trim();
    const companyValue       = company.value.trim();
    const email_fromValue    = email_from.value.trim();
    const joblvlValue        = joblvl.value.trim();
    const industryValue      = industry.value.trim();
    const countryValue       = country.value.trim();
    const phoneValue         = phone.value.trim();
    const about_usValue      = about_us.value.trim();
    const messageValue       = message.value.trim();
    const responseCaptcha    = grecaptcha.getResponse();

    // for captcha message 
    const gcaptcha   = document.getElementById("gcaptcha")


    if(interestValue === ''){
        setError(interest, 'Interest is required');
        var validate =  0;
    }else{
        setSuccess(interest);
        var validate =  1;
    }

    if(fnameValue === ''){
        setError(fname, 'First name is required');
        var validate =  0;
    }else{
        setSuccess(fname);
        var validate =  1;
    }

    if(lnameValue === ''){
        setError(lname, 'Last name is required');
        var validate =  0;
    }else{
        setSuccess(lname);
        var validate =  1;
    }

    if(companyValue === ''){
        setError(company, 'Company is required');
        var validate =  0;
    }else{
        setSuccess(company);
        var validate =  1;
    }

    if(email_fromValue === ''){
        setError(email_from, 'Email is required');
        var validate =  0;
    }else if(!isValidEmail(email_fromValue)){
        setError(email_from, 'Provide a valid email address');
        var validate =  0;
    }else{
        setSuccess(email_from);
        var validate =  1;
    }

    if(joblvlValue === ''){
        setError(joblvl, 'Job Level is required');
        var validate =  0;
    }else{
        setSuccess(joblvl);
        var validate =  1;
    }

    if(industryValue === ''){
        setError(industry, 'Industry is required');
        var validate =  0;
    }else{
        setSuccess(industry);
        var validate =  1;
    }

    if(countryValue === 'Select country..'){
        setError(country, 'Country is required');
        var validate =  0;
    }else{
        setSuccess(country);
        var validate =  1;
    }

    if(phoneValue === ''){
        setError(phone, 'Phone is required');
        var validate =  0;
    }else{
        setSuccess(phone);
        var validate =  1;
    }

    if(about_usValue === ''){
        setError(about_us, 'How did you hear about us? is required');
        var validate =  0;
    }else{
        setSuccess(about_us);
        var validate =  1;
    }

    if(messageValue === ''){
        setError(message, 'Message is required');
        var validate =  0;
    }else{
        setSuccess(message);
        var validate =  1;
    }

    if(responseCaptcha.length === 0){
        var validate =  0;
    }

    return validate;

}