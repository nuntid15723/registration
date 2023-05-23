function validateForm() {
    var email = document.getElementById("email").value;
    var phone = document.getElementById("mobile").value;

    // ตรวจสอบรูปแบบอีเมล
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailRegex)) {
        alert("กรุณากรอกอีเมลให้ถูกต้อง");
        return false;
    }

    // ตรวจสอบรูปแบบหมายเลขโทรศัพท์ (ใช้ตัวเลขเท่านั้น)
    var phoneRegex = /^\d+$/;
    if (!phone.match(phoneRegex)) {
        alert("กรุณากรอกหมายเลขโทรศัพท์ให้ถูกต้อง");
        return false;
    }

    return true;
}
