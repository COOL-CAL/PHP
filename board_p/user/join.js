function checkid(){
	var u_id = document.getElementById("u_id").value;
	if(u_id) 
	{
		url = "check.php?u_id="+u_id;
		window.open(url,"chkid","width=400,height=200");
	} else {
		alert("Enter your ID.");
	}
}

function decide() {
    document.getElementById("decide").innerHTML = "<span style='color:blue;'>You can use this ID.</span>"
    document.getElementById("decide_id").value = document.getElementById("u_id").value
	document.getElementById("u_id").disabled = true
    document.getElementById("join_button").disabled = false
    document.getElementById("check_button").value = "This ID already exist."
	document.getElementById("check_button").setAttribute("onclick", "change()")
}

function change() {
    document.getElementById("decide").innerHTML = "<span style='color:red;'>This ID is already in use.</span>"
    document.getElementById("u_id").disabled = false
	document.getElementById("u_id").value = ""
    document.getElementById("join_button").disabled = true
    document.getElementById("check_button").value = "중복 검사"
	document.getElementById("check_button").setAttribute("onclick", "checkid()")
}

function mail_change(){
    if(document.join.u_mail.options[document.join.u_mail.selectedIndex].value == '0'){
        document.join.u_mail2.disabled = true;
        document.join.u_mail2.value = "";
    }
    if(document.join.u_mail.options[document.join.u_mail.selectedIndex].value == '1'){
        document.join.u_mail2.disabled = false;
        document.join.u_mail2.value = "";
        document.join.u_mail2.focus();
    } else{
        document.join.u_mail2.disabled = false;
        document.join.u_mail2.value = document.join.u_mail.options[document.join.u_mail.selectedIndex].value;
    }
}

function pw_check() {
    var u_pw = document.getElementById("u_pw");
    var u_pw2 = document.getElementById("confirm_pw");

    if (u_pw.value == "") {
        alert("Enter your Password.");
        u_pw.focus();
        return false;
        }
    
    var pwdCheck = /^(?=.*[a-zA-Z])(?=.*[0-9]).{6,12}$/;

    if (!pwdCheck.test(u_pw.value)) {
        alert("Password must be between 6 to 12 characters.");
        u_pw.focus();
        return false;
        }

    if (confirm_pw.value !== u_pw.value) {
        alert("Password incorrect.");
        confirm_pw.focus();
        return false;
        }

    if (u_mail1.value == "") {
        alert("이메일 주소를 입력해주세요.");
        email_id.focus();
        return false;
        }

    //입력 값 전송
    document.join.submit();
}