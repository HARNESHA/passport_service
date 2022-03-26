document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault();
    myform();

});

function myform() {
    let username = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phoneNumber = document.getElementById("phoneNumber").value;
    let password = document.getElementById("password").value;
    let rePassword = document.getElementById("rePassword").value;
    let flag=0;

    const letters = /^[a-zA-Z ]*$/;
    const emailLetters = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
    const phone = /^(\+\d{1,3}[- ]?)?\d{10}$/;
    const passwordLatters = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/;



    if (username == "") {
        document.getElementById("uName").innerHTML = "Username is required";
    } else if (!username.match(letters)) {
        document.getElementById("uName").innerHTML = "Only alphabate is allowed";
    } else {
        document.getElementById("uName").innerHTML = "";
        flag+=1;
    }

    if (email == "") {
        document.getElementById("eMail").innerHTML = "email is required";
    } else if (!email.match(emailLetters)) {
        document.getElementById("eMail").innerHTML = "enter valid email";
    } else {
        document.getElementById("eMail").innerHTML = "";
        flag+=1;
    }

    if (phoneNumber == "") {
        document.getElementById("phNumber").innerHTML = "phone Number is required";
    } else if (!phoneNumber.match(phone)) {
        document.getElementById("phNumber").innerHTML = "enter valid phone number";
    }
    else {
        document.getElementById("phNumber").innerHTML = "";
        flag+=1;
    }

    if (password == "") {
        document.getElementById("pass").innerHTML = "password is required";
    } else if (!password.match(passwordLatters)) {
        document.getElementById("pass").innerHTML = "create strong password min-8 letters";
    } else {
        document.getElementById("pass").innerHTML = "";
        flag+=1;
    }

    if (rePassword == "") {
        document.getElementById("rePass").innerHTML = "password is required";
    } else if (rePassword != password) {
        document.getElementById("rePass").innerHTML = "password does't match";
    } else {
        document.getElementById("rePass").innerHTML = "";
        flag+=1;

    }
    
    if (flag==5) {
            $.ajax({
                url: "datainsert.php",
                type: "POST",
                data: {
                    name: username,
                    email: email,
                    phoneNumber: phoneNumber,
                    password: password
                },
                success: function (data) {
    
                    if (data == "1") {
                        alert("sign up successful");
                        window.location.href = "index.php";
                    } else if(data == "2") {
                        alert("email already exist!!");
                    } else{
                        alert("something went wrong!!");
                    }  
                }
            });       
    }else{
    }
}
