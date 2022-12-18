function present() {
document.frmUser.action = "present_proc.php";
document.frmUser.submit();

}
function absent() {

document.frmUser.action = "absent_proc.php";
document.frmUser.submit();
}
function late() {

document.frmUser.action = "late_proc.php";
document.frmUser.submit();
}