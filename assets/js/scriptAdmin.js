function toggleSide() {
    var element = document.getElementById("sidebar");
    var element2 = document.getElementById("content");
    var element3 = document.getElementById("footer");

    element.classList.toggle("toggleHide");
    element2.classList.toggle("toggleExpand");
    element3.classList.toggle("toggleExpand");
}