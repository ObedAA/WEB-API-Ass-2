
var registerForm = document.getElementById('registerForm');
registerForm.addEventListener('submit', function(event){
    event.preventDefault();
    let formData = new FormData;
    formData.append('name', registerForm.elements['fname'].value);
    formData.append('dob', registerForm.elements['dob'].value);
    formData.append('email', registerForm.elements['email'].value);
    formData.append('phone', registerForm.elements['phone'].value);
    formData.append('cardId', registerForm.elements['cardId'].value);
    formData.append('gender', registerForm.elements['gender'].value);
    formData.append('mStatus', registerForm.elements['mStatus'].value);
    formData.append('pic', new File([registerForm.elements['pic'].files[0]], 'profile_pic'));

    ajaxResquest(formData);
})

function ajaxResquest(fData){
    let xhttp = new XMLHttpRequest;
    xhttp.onreadystatechange = function(){
        if(this.status == 200){
            document.getElementById('formBox').innerHTML = this.response;
        }
    }
    xhttp.open('POST', 'home.php');
    xhttp.send(fData);
}