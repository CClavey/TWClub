const emailInput = document.getElementById('emailID');
const signupButton = document.getElementById('signup');
emailInput.addEventListener('input', validateEmail);
function validateEmail() {
	if (emailInput.validity.patternMismatch || emailInput.value === '') 
	{
	  signupButton.disabled = true;
	} 
	else 
	{
	  signupButton.disabled = false;
	}
}
