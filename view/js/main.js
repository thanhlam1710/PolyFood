// var dropMenuDis = document.getElementById('dropdown-district');
// var dropMenuCate = document.getElementById('dropdown-cate');
// var dropDis = document.getElementById('district');
// var dropCate = document.getElementById('cate');

// function handleMenuToggleDis() {
//     if (dropMenuDis.style.display == 'block') {
//         dropMenuDis.style.display = "none";
//         dropDis.style.backgroundColor = 'transparent';
//     } else {
//         dropMenuDis.style.display = "block";
//         dropDis.style.backgroundColor = 'white';
//         dropDis.style.borderTopLeftRadius = '5px';

//     }
// }

// function handleMenuToggleCate() {
//     if (dropMenuCate.style.display == 'block') {
//         dropMenuCate.style.display = "none";
//         dropCate.style.backgroundColor = 'transparent';
//     } else {
//         dropMenuCate.style.display = "block";
//         dropCate.style.backgroundColor = 'white';
//         dropCate.style.borderTopRightRadius = '5px';
//     }
// }

let tabButtons = document.querySelectorAll('.clarify-item .dropdown-toggle');
let tabPanes = document.querySelectorAll('.clarify-item .dropdown-visible');
let hide = document.getElementById('#hide');

function showPane(paneIndex, colorBgc, borderRadius) {
    tabButtons.forEach(function(node) {
        node.style.backgroundColor = "";
        node.style.borderRadius = "";
    });
    tabButtons[paneIndex].style.backgroundColor = colorBgc;
    tabButtons[paneIndex].style.borderRadius = borderRadius;
    tabPanes.forEach(function(node) {
        node.style.display = 'none';
    });
    tabPanes[paneIndex].style.display = 'block';
    tabPanes[paneIndex].style.backgroundColor = colorBgc;
}