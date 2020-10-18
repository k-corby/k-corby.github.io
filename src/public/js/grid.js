var elements = document.getElementsByClassName("table-row-list");
var elements2 = document.getElementsByClassName("table-row-grid");
var i;

// List View
function listView() {
  while (elements2.length) {
    elements2[0].className = 'table-row-list'; // removes elements[0] from elements!
    document.getElementById("order-table").className = 'list-view';
  }
}

// Grid View
function gridView() {
  while (elements.length) {
    elements[0].className = 'table-row-grid'; // removes elements[0] from elements!
    document.getElementById("order-table").className = 'grid-view';
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("table-option-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}