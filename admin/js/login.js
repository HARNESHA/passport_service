document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault();
    myform();

});

function myform() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email == "") {
        document.getElementById("err-email").innerHTML = "email is required";
    } else {
        document.getElementById("err-email").innerHTML = "";
    

    if (password == "") {
        document.getElementById("err-password").innerHTML = "password is required";
    } else {
        document.getElementById("err-password").innerHTML = "";

        $.ajax({
            url: "login.php",
            type: "POST",
            data: {
                email: email,
                password: password
            },
            success: function (data) {
                if (data == "1") {
                    alert("login successful");
                    window.location.href = "ajax-load.php";
                } else {
                    alert("email or password is wrong!!");
                }


            }
        });
    }
    }

}




