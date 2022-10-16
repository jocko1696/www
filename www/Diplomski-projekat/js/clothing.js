// window.onload =function(){
//
//   let status_of_link_footer = window.localStorage.getItem('active-link-footer');
//   console.log('Footer'+ status_of_link_footer);
//   if(status_of_link_footer==='idf1')
//   {
//     localStorage.setItem('active-link-footer','idf4');
//     status_of_link_footer = window.localStorage.getItem('active-link-footer');
//   }
//   document.querySelector('.footer-ul .active-link').classList.remove('active-link');
//   let li_active_footer=document.getElementById(status_of_link_footer);
//   li_active_footer.classList.add('active-link');
//
// }


const tabs = document.querySelectorAll("[data-tab-target]");
const tabsContents = document.querySelectorAll("[data-tab-content]");

var xml = new XMLHttpRequest();
xml.onreadystatechange = function () {
    if (this.status == 200 && this.readyState == 4) {
        document.getElementById("main-content").innerHTML = this.responseText;
    }
};
var active_div_name = "";
var pretraga = document.getElementById("search");
var search = document.getElementById("main-content");
var main_content = document.getElementById("main_content");
var search_bar = document.getElementById("search-bar");
pretraga.addEventListener("keyup", ucitaj);
window.addEventListener("load", sakrij);

function sakrij() {
    search.style.display = "none";
}

function ucitaj() {
    search.style.display = "block";
    main_content.style.display = "none";

    xml.open("GET", "../back-end/fetch-data.php?data=" + pretraga.value);
    xml.send();
}

tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        const target = document.querySelector(tab.dataset.tabTarget);
        tabsContents.forEach((tabContent) => {
            tabContent.classList.remove("is-active");
        });

        tabs.forEach((tab) => {
            tab.classList.remove("is-active");
        });
        tab.classList.add("is-active");
        target.classList.add("is-active");
    });
});

const tabs2 = document.querySelectorAll("[data-tab-target2]"); //get all tabs
const tabsContents2 = document.querySelectorAll("[data-tab-content2]"); //get all content divs

tabs2.forEach((tab2) => {
    //For current clicked tab do the function
    tab2.addEventListener("click", () => {
        const target2 = document.querySelector(tab2.dataset.tabTarget2); //get the current tab (tab which is clicked)
        tabsContents2.forEach((tabContent2) => {
            //Loop through all content divs
            tabContent2.classList.remove("is-active-2"); //Remove the active status for each one
        });

        tabs2.forEach((tab2) => {
            //Loop through all tabs(li) and remove active class
            tab2.classList.remove("is-active-2");
        });
        tab2.classList.add("is-active-2");
        target2.classList.add("is-active-2"); //Div from current clicked tab(li) is activated
        search.style.display = "none";
        main_content.style.display = "block";
        active_div_name = $("div.is-active-2").attr("id");
        if (active_div_name === "new-spring-collection") {
            $("div.is-active-2").attr("w3-include-html", "../front-end/slider.html");
            search_bar.style.display = "none";
        } else {
            createCookie("cookie", active_div_name, "1");

            search_bar.style.display = "flex";
            $("div.is-active-2").load("../back-end/fetch-data.php");
        }
    });
});

//Create a cookie which will send name of current active div to back-end side.This name
//will be used as a name of table in database from which data will be fetched
function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
    } else {
        expires = "";
    }

    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}

const menuIcon = document.querySelector(".hamburger-menu");
const navbar = document.querySelector(".navbar");

menuIcon.addEventListener("click", () => {
    navbar.classList.toggle("change");
});

function includeHTML() {
    var z, i, elmnt, file, xhttp;

    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];

        file = elmnt.getAttribute("w3-include-html");
        if (file) {
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        elmnt.innerHTML = this.responseText;
                    }
                    if (this.status == 404) {
                        elmnt.innerHTML = "Page not found.";
                    }

                    elmnt.removeAttribute("w3-include-html");
                    includeHTML();
                }
            };
            xhttp.open("GET", file, true);
            xhttp.send();

            return;
        }
    }
}

includeHTML();
