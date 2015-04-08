/**
 * Created by olgaoskina on 09/04/15.
 */
var current_tab = 1;

var tabName_1 = "Likes";
var tabName_2 = "History";

function setting() {
    window.battom1 = document.getElementById('bat_1');
    window.battom2 = document.getElementById('bat_2');

    battom1.innerHTML = tabName_1;
    battom2.innerHTML = tabName_2;

    window.taba1 = document.getElementById('tab_1');
    window.taba2 = document.getElementById('tab_2');
}

function show_tab(num) {
    if (num == 1 && current_tab != num) {
        taba1.style.display = 'block';
        battom1.style.border = '1px solid #ffffff';
        battom2.style.border = 'none';
        taba2.style.display = 'none';
        current_tab = num;
    }

    if (num == 2 && current_tab != num) {
        taba2.style.display = 'block';
        battom2.style.border = '1px solid #ffffff';
        battom1.style.border = 'none';
        taba1.style.display = 'none';
        current_tab = num;
    }
}
