function data(){
    var gender = document.forms["valform"]["gen"].value;
    var hobby = document.forms["valform"]["hobby"];
    var name = document.forms["valform"]["NAME"].value;
    var email = document.forms["valform"]["email"].value;
    var pass = document.forms["valform"]["pass"].value;
    var cpass = document.forms["valform"]["cpass"].value;
    var miss = [];
    var emailval = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/;
    var passval = /^[a-zA-Z0-9]+$/;
    var hobbysel = false;
    var selectedHobbies = [];
    
    for (var i = 0; i < hobby.length; i++) {
        if (hobby[i].checked) {
            selectedHobbies.push(hobby[i].value);
        }
    }

    if (gender === "") miss.push("GENDER");
    if (selectedHobbies.length === 0) miss.push("Hobby");
    if (name === "") miss.push("Name");
    if (email === "") miss.push("Email");
    if (pass === "") miss.push("Password");
    if (cpass === "") miss.push("Confirm Password");
    if (name.length > 10) {
        miss.push("NAME SHOULD BE WITHIN 10 CHARACTERS");
    }
    if (pass !== cpass) {
        alert("The passwords are not the same");
        return false;
    }
    if (miss.length > 0) {
        alert("ERROR:\n" + miss.join(", "));
        return false;
    } else {
        return true;
    }
}
