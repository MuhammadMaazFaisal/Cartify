

const cardCounter = document.getElementsByClassName('card-counter')
for (let i = 0; i < cardCounter.length; i++) {
    const element = cardCounter[i];
    const minus = element.getElementsByClassName('minus')[0]
    const plus = element.getElementsByClassName('plus')[0]
    const st = element.getElementsByClassName('st')[0]
    const firstbtn = element.getElementsByClassName('first-btn')[0];
    minus.style.display = 'none'
    st.style.display = 'none'
    // firstbtn.style.display = 'none'
    plus.style.display = 'none'
    element.style.backgroundColor = 'white'

    if (firstbtn) {
        firstbtn.addEventListener('click', () => {

            st.value = parseInt(st.value) + 1
            if (minus.style.display == 'none') {
                minus.style.display = 'block'
                firstbtn.style.display = 'none'
                element.style.backgroundColor = 'rgb(232, 232, 232)'
                plus.style.display = 'block'

            }
            if (st.style.display == 'none') {
                st.style.display = 'block'
            }
        })


    }


    if (minus) {
        minus.addEventListener('click', () => {

            if (st.value < 2) {
                st.value = 0
                minus.style.display = 'none'
                st.style.display = 'none'
                element.style.backgroundColor = 'white'
                firstbtn.style.display = 'block'
                plus.style.display = 'none'
            } else { st.value = st.value - 1 }
        })


    }
    if (plus) {
        plus.addEventListener('click', () => {
            st.value = parseInt(st.value) + 1
            if (minus.style.display == 'none') {
                minus.style.display = 'block'
                element.style.backgroundColor = 'rgb(232, 232, 232)'
            }
            if (st.style.display == 'none') {
                st.style.display = 'block'
            }
        })
    }


}

// ---------------cart-card-Counter----------------

const cartcardCounter = document.getElementsByClassName('cart-card-counter')
for (let i = 0; i < cartcardCounter.length; i++) {
    const element = cartcardCounter[i];
    const minus = element.getElementsByClassName('minus')[0]
    const plus = element.getElementsByClassName('plus')[0]
    const st = element.getElementsByClassName('st')[0]
    minus.style.display = 'block'
    st.style.display = 'block'
    plus.style.display = 'block'
    // element.style.backgroundColor = 'white' 

    if (plus) {
        plus.addEventListener('click', () => {

            st.value = parseInt(st.value) + 0
            if (minus.style.display == 'none') {
                minus.style.display = 'block'
                element.style.backgroundColor = 'rgb(232, 232, 232)'
                plus.style.display = 'block'

            }
            if (st.style.display == 'none') {
                st.style.display = 'block'
            }
        })


    }


    if (minus) {
        minus.addEventListener('click', () => {

            if (st.value < 2) {
                st.value = 0
                minus.style.display = 'block'
                st.style.display = 'block'
                // element.style.backgroundColor = 'white'
                plus.style.display = 'block'
            } else { st.value = st.value - 1 }
        })


    }
    if (plus) {
        plus.addEventListener('click', () => {
            st.value = parseInt(st.value) + 1
            if (minus.style.display == 'none') {
                minus.style.display = 'block'
                // element.style.backgroundColor = 'rgb(232, 232, 232)'
            }
            if (st.style.display == 'none') {
                st.style.display = 'block'
            }
        })
    }


}


// ------------preview-----------

let previewContainer = document.querySelector('.products-preview');
let previewBox = previewContainer.querySelectorAll('.preview');

document.querySelectorAll('.home-cards .card-image').forEach(product => {
    product.onclick = () => {
        previewContainer.style.display = 'flex'
        let name = product.getAttribute('data-name');
        previewBox.forEach(preview => {
            let target = preview.getAttribute('data-target');
            if (name == target) {
                preview.classList.add('active');
            }
        })
    }
});


previewBox.forEach(close => {
    close.querySelector('.bi-x').onclick = () => {
        close.classList.remove('active');
        previewContainer.style.display = 'none'
    };
});


// ---------------navbar--------------


const chc = document.querySelector('#shopping-cart-checkbox');
var element = document.getElementById("SideNav");
function FuncClick() {
    if (chc.checked) {
        element.classList.remove("-left-[17rem]");
        element.classList.add("left-0");
    } else {
        element.classList.remove("left-0");
        element.classList.add("-left-[17rem]");
    }
}
const chka = document.querySelector('#Shopping-cartbtn');
var element2 = document.getElementById("Shopping-cart-menu");
function FuncClick2() {
    if (chka.checked) {
        element2.classList.add("shop-visible");
        element2.classList.remove("hide-visible");
    } else {
        element2.classList.add("hide-visible");
        element2.classList.remove("shop-visible");
    }
}


var count = 1;
function Decrement(element) {
    var x = element.nextElementSibling;
    count = x.innerHTML;
    if (count > 1) {
        count--;
        x.innerHTML = count;
        let cart_count_input = element.parentElement.querySelector("#cart_count_input");
        cart_count_input.setAttribute('value', count);

        cartfun();
    }
};
function Increment(element) {
    var x = element.previousElementSibling;
    count = x.innerHTML;
    if (count < 10) {
        count++;
        x.innerHTML = count;
        let cart_count_input = element.parentElement.querySelector("#cart_count_input");
        cart_count_input.setAttribute('value', count);
        cartfun();
    }
};

// ---------------load more--------------

$(document).ready(function () {
    $(".cards").slice(0, 6).fadeIn();
    $(".load-more").click(function () {
        $(".cards").slice(0, 16).fadeIn();
        $(this).fadeOut();
    });
});

// ---------------add to cart--------------

const cart = document.getElementsByClassName('cart')[0]
const continueShopping = document.getElementById('continue-shopping')

if (continueShopping) {
    continueShopping.addEventListener('click', () => {
        cart.style.right = '-900px'
    })
}

const cartOpen = document.getElementsByClassName('cart-open')[0]

if (cartOpen) {
    cartOpen.addEventListener('click', () => {
        cart.style.right = '0px'
    })
}

// ---------down-nav-add to cart----------------
const cartOpen1 = document.getElementsByClassName('cart-open-1')[0]
const cartOpen2 = document.getElementById('cart-open-1')


if (cartOpen1) {
    cartOpen1.addEventListener('click', () => {
        cart.style.right = '0px'
    })

}

if (cartOpen2) {
    continueShopping.addEventListener('click', () => {
        cart.style.right = '-900px'
    })
}


// ------------------------filter-----------------------


const filterbox = document.getElementsByClassName('filter-box')[0]
const cancel = document.getElementById('cancel')

if (cancel) {
    cancel.addEventListener('click', () => {
        filterbox.style.left = '-900px'
    })
}

const filterOpen = document.getElementsByClassName('filter')[0]

if (filterOpen) {
    filterOpen.addEventListener('click', () => {
        filterbox.style.left = '0px'
    })
}


// -------------------scroll----------------------

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})


// ------------------side-form---------------------

const slideform = document.getElementsByClassName('slide-form')[0]
const formcancel = document.getElementById('form-cancel')

if (formcancel) {
    formcancel.addEventListener('click', () => {
        slideform.style.right = '-900px'
    })
}

const formopen = document.getElementsByClassName('form-open')[0]

if (formopen) {
    formopen.addEventListener('click', () => {
        slideform.style.right = '0px'
    })
}

// -----------------search-bar-suggetions--------------------


// window.onload=function(){
//     var searchResult = document.getElementById("drop-down-box");
//     document.onclick = function(event){
//         if(event.target.id !== 'drop-down-box'){
//             searchResult.style.display = "block";
//         }

//         if(event.target.id !== 'SearchInput'){
//             searchResult.style.display = "none";
//         }
//     }
// }
// ----------------------------------------------

(function ($bs) {
    const CLASS_NAME = 'has-child-dropdown-show';
    $bs.Dropdown.prototype.toggle = function (_orginal) {
        return function () {
            document.querySelectorAll('.' + CLASS_NAME).forEach(function (e) {
                e.classList.remove(CLASS_NAME);
            });
            let dd = this._element.closest('.dropdown').parentNode.closest('.dropdown');
            for (; dd && dd !== document; dd = dd.parentNode.closest('.dropdown')) {
                dd.classList.add(CLASS_NAME);
            }
            return _orginal.call(this);
        }
    }($bs.Dropdown.prototype.toggle);

    document.querySelectorAll('.dropdown').forEach(function (dd) {
        dd.addEventListener('hide.bs.dropdown', function (e) {
            if (this.classList.contains(CLASS_NAME)) {
                this.classList.remove(CLASS_NAME);
                e.preventDefault();
            }
            if (e.clickEvent && e.clickEvent.composedPath().some(el => el.classList && el.classList.contains('dropdown-toggle'))) {
                e.preventDefault();
            }
            e.stopPropagation(); // do not need pop in multi level mode
        });
    });

    // for hover
    function getDropdown(element) {
        return $bs.Dropdown.getInstance(element) || new $bs.Dropdown(element);
    }

    document.querySelectorAll('.dropdown-hover, .dropdown-hover-all .dropdown').forEach(function (dd) {
        dd.addEventListener('mouseenter', function (e) {
            let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
            if (!toggle.classList.contains('show')) {
                getDropdown(toggle).toggle();
            }
        });
        dd.addEventListener('mouseleave', function (e) {
            let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
            if (toggle.classList.contains('show')) {
                getDropdown(toggle).toggle();
            }
        });
    });
})(bootstrap);




/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

// -----------------product-------------------- //

function GetProducts() {
    let products = document.getElementById("products");
    $.ajax({
        url: "functions.php",
        type: "POST",
        data: {
            "function": "GetProducts"
        },
        success: function (data) {
            data = JSON.parse(data);
            for (i = 0; i < data.length && i < 12; i++) {
                let div = document.createElement("div");
                div.className = "cards col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6";
                div.style = "display:block";
                let div1 = document.createElement("div");
                div1.className = "card h-100";
                div1.id = data[i].id;
                let div5 = document.createElement("div");
                div5.className = "card-image";
                div5.setAttribute("data-name", "p-1");
                let img = document.createElement("img");
                img.className = "card-img-top";
                img.setAttribute("src", "images/1.PNG");
                let div6 = document.createElement("div");
                div6.className = "card-body";
                let h5 = document.createElement("h5");
                h5.className = "card-title text-center";
                let h4 = document.createElement("h4");
                h4.className = "tag mx-auto mb-2";
                h4.innerHTML = data[i].price;
                h5.innerHTML = data[i].name;
                let div8 = document.createElement("div");
                div8.className = "card-counter d-flex";
                div8.style = "background-color: white;";
                let a1 = document.createElement("a");
                a1.classList.add("custom-d-none");
                a1.addEventListener("click", function () {
                    RemoveQuantity(this);
                });
                let i2 = document.createElement("i");
                i2.className = "bi bi-dash-circle-fill minus";
                let input = document.createElement("input");
                input.type = "number";
                input.className = "st text-center custom-d-none";
                input.value = 0;
                let a2 = document.createElement("a");
                a2.addEventListener("click", function () {
                    AddQuantity(this);
                });
                let i3 = document.createElement("i");
                i3.className = "bi bi-plus-circle-fill plus d-none";
                let btn = document.createElement("button");
                btn.className = "first-btn";
                btn.addEventListener("click", function () {
                    this.classList.add("d-none");
                    btn = this.previousElementSibling;
                    btn.children[0].classList.remove("d-none");
                    AddQuantity(btn);
                });
                let p = document.createElement("p");
                p.innerHTML = "Add";
                btn.appendChild(p);
                a2.appendChild(i3);
                a1.appendChild(i2);
                div8.appendChild(a1);
                div8.appendChild(input);
                div8.appendChild(a2);
                div8.appendChild(btn);
                div6.appendChild(h5);
                div6.appendChild(h4);
                div6.appendChild(div8);
                div5.appendChild(img);
                div1.appendChild(div5);
                div1.appendChild(div6);
                div.appendChild(div1);
                products.appendChild(div);





            }
        }
    });
}

// -----------------cart-------------------- //

function GetQuantity(qty, id) {
    $.ajax({
        url: "functions.php",
        type: "POST",
        data: {
            "function": "GetQuantity",
            "id": id
        },
        success: function (data) {
            data = JSON.parse(data);
            qty.value = data[0];
            AddtoCart(id, qty.value);
        }
    });
}

function Checkout() {
    $.ajax({
        url: "functions.php",
        type: "POST",
        data: {
            "function": "Checkout"
        },
        success: function (data) {
            data = JSON.parse(data);
            if (data.status == "success") {
                Swal.fire({
                    icon: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    location.reload();
                });
            }
        }
    });
}

function AddQuantity(btn) {
    btn.classList.remove("plus");
    id = btn.parentNode.parentNode.parentNode.id;
    qty = btn.previousElementSibling;
    qty.classList.remove("custom-d-none");;
    qty.previousElementSibling.classList.remove("custom-d-none");
    GetQuantity(qty, id);

}

function RemoveQuantity(btn) {
    id = btn.parentNode.parentNode.parentNode.id;
    qty = btn.nextElementSibling;
    qty.value = parseInt(qty.value) - 1;
    if (qty.value == 0) {
        qty.classList.add("custom-d-none");
        btn.classList.add("custom-d-none");
    }
    AddtoCart(id, qty.value);
}

function AddtoCart(id, qty) {
    $.ajax({
        url: "functions.php",
        type: "POST",
        data: {
            "function": "AddtoCart",
            "id": id,
            "qty": qty
        },
        success: function (data) {
            GetCartProducts()
        }
    })
}

function GetCartProducts() {
    let cart = document.getElementById("cart-product");
    document.getElementById("total").innerHTML = "";
    $.ajax({
        url: "functions.php",
        type: "POST",
        data: {
            "function": "GetCartProducts"
        },
        success: function (data) {
            data = JSON.parse(data);
            if (data.status != "error") {
                cart.innerHTML = "";
                let total = 0;
                for (let i = 0; i < data[0].length; i++) {
                    category = document.createElement("h3");
                    category.innerHTML = data[0][i];
                    for (let j = 0; j < data[1][data[0][i]].length; j++) {
                        div0 = document.createElement("div");
                        div0.id = data[1][data[0][i]][j]["id"];
                        div = document.createElement("div");
                        div.className = "selected-product";
                        span = document.createElement("span");
                        img = document.createElement("img");
                        img.src = "images/9.jpeg";
                        img.style = "width: 50px;";
                        div1 = document.createElement("div");
                        div1.className = "s-product-detail";
                        p = document.createElement("p");
                        p.innerHTML = data[1][data[0][i]][j]["name"];
                        h5 = document.createElement("h5");
                        h5.innerHTML = data[1][data[0][i]][j]["price"];
                        div2 = document.createElement("div");
                        div2.className = "cart-card-counter d-flex";
                        let a1 = document.createElement("a");
                        let i1 = document.createElement("i");
                        let a2 = document.createElement("a");
                        let i2 = document.createElement("i");
                        let input1 = document.createElement("input");
                        input1.type = "number";
                        input1.className = "st";
                        input1.value = data[1][data[0][i]][j]["qty"];
                        input1.readOnly = true;
                        i1.className = "bi bi-plus-circle-fill plus";
                        i2.className = "bi bi-dash-circle-fill minus";
                        a1.onclick = function () {
                            AddQuantity(this)
                        };
                        a2.onclick = function () {
                            RemoveQuantity(this)
                        };
                        a1.appendChild(i1);
                        a2.appendChild(i2);
                        div2.appendChild(a2);
                        div2.appendChild(input1);
                        div2.appendChild(a1);
                        div1.appendChild(p);
                        div1.appendChild(h5);
                        span.appendChild(img);
                        span.appendChild(div1);
                        div.appendChild(span);
                        div.appendChild(div2);
                        div0.appendChild(div);
                        cart.appendChild(category);
                        cart.appendChild(div0);
                        let price = (data[1][data[0][i]][j]["price"]).toString().slice(0, 4);
                        price = price.split(" ");
                        price = price[0].replace(":", ".");
                        let quantity = parseInt(data[1][data[0][i]][j]["qty"]);
                        total += (parseFloat(price) * quantity);

                    }
                }
                total1 = total.toFixed(1).toString().replace(".", ":");
                document.getElementById("total").innerHTML = total1;
                p_message = 1000 - total;
                if (p_message > 0) {
                    p_message = p_message.toFixed(1).toString().replace(".", ":");
                    document.getElementById("p_message").innerHTML = "Shop for " + p_message + " more";
                    percent= (total/1000)*100;
                    document.getElementById("p-bar").style.width = percent+"%";
                    total += 95;
                }else if (p_message <= 0) {
                    document.getElementById("p_message").innerHTML = "Your delivery is free";
                    document.getElementById("p_message2").innerHTML = "";
                    document.getElementById("p-bar").style.width = "100%";
                    document.getElementById("delivery").innerHTML = "Free";
                }
                document.getElementById("grand_total").innerHTML = total;
                document.getElementById("checkout").disabled = false;
            }
        }
    });
}

function EmptyCart() {
    let cart = document.getElementById("cart-product");
    $.ajax({
        url: "functions.php",
        type: "POST",
        data: {
            "function": "EmptyCart"
        },
        success: function (data) {
            cart.innerHTML = "";
            $("#staticBackdrop").modal("hide");
            GetCartProducts()

        }
    })
}

// -----------------search-bar-------------------- //

function Search(search) {
    $.ajax({
        url: "functions.php",
        type: "POST",
        data: {
            "function": "search",
            "search": search
        },
        success: function (data) {
            data = JSON.parse(data);
            GetSessionData(data);

        }
    })
}

function GetSessionData(data) {
    let search_dropdown = $("#drop-down-box");
    $.ajax({
        url: "functions.php",
        type: "POST",
        data: {
            "function": "GetSession"
        },
        success: function (response) {
            new_data = JSON.parse(response);
            for (let i = 0; i < data.length; i++) {
                let div = document.createElement("div");
                div.classList.add("custom-row", "row");
                div.style = " --bs-gutter-x: 0!important;";
                div.id = data[i].id;
                let div1 = document.createElement("div");
                div1.classList.add("col-2", "p-2");
                let img = document.createElement("img");
                img.src = "images/3.webp";
                img.classList.add("w-full", "search-img");
                div1.appendChild(img);
                div.appendChild(div1);
                let div2 = document.createElement("div");
                div2.classList.add("col-6");
                let h4 = document.createElement("h4");
                h4.classList.add("text-dark", "text-lg", "pt-2", "text-primary");
                h4.innerHTML = data[i].name;
                div2.appendChild(h4);
                let p = document.createElement("p");
                p.classList.add("text-sm");
                p.innerHTML = data[i].category + " / " + data[i].sub_category + " / " + data[i].subsub_category;
                let p1 = document.createElement("p");
                p1.classList.add("text-sm", "font-bold");
                p1.innerHTML = data[i].price;
                div2.appendChild(p);
                div2.appendChild(p1);
                div.appendChild(div2);
                let div3 = document.createElement("div");
                div3.classList.add("col-4", "d-flex", "justify-content-end", "pe-1");
                let div4 = document.createElement("div");
                div4.classList.add("mt-4", "row");
                let button = document.createElement("button");
                let input = document.createElement("input");
                let button1 = document.createElement("button");
                button.addEventListener("click", function (e) {
                    e.preventDefault();
                    RemoveQuantity(this);

                })
                button1.addEventListener("click", function (e) {
                    e.preventDefault();
                    AddQuantity(this);
                })
                input.readOnly = true;
                let i1 = document.createElement("i");
                let i2 = document.createElement("i");
                i1.classList.add("fas", "fa-plus");
                i2.classList.add("fas", "fa-minus");
                array = isInArray(data[i].id, new_data)
                if (array != false) {
                    button.classList.add("ms-0", "btn", "btn-secondary", "btn-sm", "rounded-circle", "quantity");
                    input.classList.add("form-control", "form-control-sm", "w-25", "text-center", "quantity");
                    button1.classList.add("btn", "btn-success", "btn-sm", "rounded-circle", "quantity", "plus");
                    input.value = array;
                } else {
                    button.classList.add("ms-0", "btn", "btn-secondary", "btn-sm", "rounded-circle", "quantity", "custom-d-none");
                    input.classList.add("form-control", "form-control-sm", "w-25", "text-center", "quantity", "custom-d-none");
                    button1.classList.add("btn", "btn-success", "btn-sm", "rounded-circle", "quantity", "plus");
                    input.value = 0;
                }

                button1.appendChild(i1);
                button.appendChild(i2);
                div4.appendChild(button);
                div4.appendChild(input);
                div4.appendChild(button1);
                div3.appendChild(div4);
                div.appendChild(div3);
                let hr = document.createElement("hr");
                div.appendChild(hr);
                search_dropdown.append(div);
            }
            search_dropdown.show();


        }
    })
}

function isInArray(value, array) {
    if (array.length == 0) {
        return false;
    } else {
        for (let i = 0; i < array.length; i++) {
            if (array[i][0] === value) {
                return array[i][1];
            } else {
                return false;
            }
        }
    }
}

$(document).ready(function () {
    GetProducts();
    GetCartProducts();
    let search_dropdown = $("#drop-down-box");
    $(document).on('click', function (event) {
        if (!search_dropdown.is(event.target) && search_dropdown.has(event.target).length === 0) {
            search_dropdown.hide();
        }
    });

    $("#SearchInput").on("input", function () {
        let search = $(this).val().toLowerCase();
        if (search.length == 0) {
            search_dropdown.hide();
        } else {
            search_dropdown.empty();
            Search(search);
        }
    });

})