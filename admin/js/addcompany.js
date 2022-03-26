document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault();
    myform();

});

function myform() {
    let cname = document.getElementById("cname").value;
    let website = document.getElementById("website").value;
    let phone_no = document.getElementById("phone_no").value;
    let address = document.getElementById("address").value;
    let city = document.getElementById("city").value;
    let state = document.getElementById("state").value;
    let country = document.getElementById("country").value;
    let select = document.getElementById("industry");
    let industry = select.options[select.selectedIndex].value;
    let flag = 0;

    const letters = /^[a-zA-Z ]*$/;
    const phone = /^(\+\d{1,3}[- ]?)?\d{10}$/;
    const url = /https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,}/;

    if (cname == "") {
        document.getElementById("Cname").innerHTML = "Company name is required";
    } else if (!cname.match(letters)) {
        document.getElementById("Cname").innerHTML = "Only alphabate is allowed";
    } else {
        document.getElementById("Cname").innerHTML = "";
        flag += 1;
    }

    if (website == "") {
        document.getElementById("Website").innerHTML = "website is required";
    } else if (!website.match(url)) {
        document.getElementById("Website").innerHTML = "enter valid website";
    } else {
        document.getElementById("Website").innerHTML = "";
        flag += 1;
    }

    if (phone_no == "") {
        document.getElementById("Phone_no").innerHTML = "phone Number is required";
    } else if (!phone_no.match(phone)) {
        document.getElementById("Phone_no").innerHTML = "enter valid phone number";
    }
    else {
        document.getElementById("Phone_no").innerHTML = "";
        flag += 1;
    }

    if (address == "") {
        document.getElementById("Address").innerHTML = "address is required";
    } else {
        document.getElementById("Address").innerHTML = "";
        flag += 1;
    }

    if (city == "") {
        document.getElementById("City").innerHTML = "city is required";
    } else {
        document.getElementById("City").innerHTML = "";
        flag += 1;
    }

    if (state == "") {
        document.getElementById("State").innerHTML = "state is required";
    } else {
        document.getElementById("State").innerHTML = "";
        flag += 1;
    }

    if (country == "") {
        document.getElementById("Country").innerHTML = "country is required";
    } else {
        document.getElementById("Country").innerHTML = "";
        flag += 1;
    }

    if (industry == "") {
        document.getElementById("Industry").innerHTML = "industry type is required";
    } else {
        document.getElementById("Industry").innerHTML = "";
        flag += 1;
    }

    if (flag == 8) {
        $.ajax({
            url: "register.php",
            type: "POST",
            data: {
                cname: cname,
                website: website,
                phone_no: phone_no,
                address: address,
                city: city,
                state: state,
                country: country,
                industry: industry
            },
            success: function (data) {

                if (data == "1") {
                    alert("company details added successfully.");
                    $("#myform").trigger('reset');
                } else {
                    alert("something went wrong!!");
                }
            }
        });
    } else {
    }

}




