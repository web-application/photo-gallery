/**
 * Created by olgaoskina on 17/04/15.
 */
var id_menu = ['sub_menu_1'];

startList = function allclose() {
    for (i = 0; i < id_menu.length; i++) {
        document.getElementById(id_menu[i]).style.display = "none";
    }
};
function openMenu(id) {
    for (i = 0; i < id_menu.length; i++) {
        if (id != id_menu[i]) {
            document.getElementById(id_menu[i]).style.display = "none";
        }
    }
    if (document.getElementById(id).style.display == "block") {
        document.getElementById(id).style.display = "none";
    } else {
        document.getElementById(id).style.display = "block";
    }
}
window.onload = startList;
