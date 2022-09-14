
// select all accordion items
const accItems = document.querySelectorAll(".accordion__item");

// add a click event for all items
accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

function toggleAcc() {
    // remove active class from all items exept the current item (this)
    accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
    );

    // toggle active class on current item
    if (this.classList != "accordion__item--active") {
        this.classList.toggle("accordion__item--active");
    }
}
