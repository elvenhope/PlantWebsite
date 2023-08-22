function burgerMenu() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
}

function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}

function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("footer-column-mobile");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}


function assistant() {
    let heading = document.getElementById("assistantText");
    let assistantCall = document.getElementById("assistantCall");
    if (heading.innerText === "Hi, I'm Alex, your Mage's Greens guide!") {
        heading.innerText = "Click the chat widget on the bottom right of the screen!";
        assistantCall.style.display = "block";
    } else {
        heading.innerText = "Hi, I'm Alex, your Mage's Greens guide!";
        assistantCall.style.display = "none";
    }
}