let hovered = false;

document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("header__menu-toggle");
    const menu = document.querySelector(".header__nav--list");
    const path = location.pathname;

    menu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", function() {
            menuToggle.checked = false;
        });
    });

    document.querySelectorAll("input[type='date']").forEach((input) => {
        input.addEventListener("click", function() {
            this.showPicker();
        });
    });

    document.addEventListener("click", (event) => {
        const target = event.target;
        if (!target.closest(".header__nav") && menuToggle.checked) {
            menuToggle.checked = false;
        }
    });

    $(document).ready(function() {
        let lastScrollTop = 0;
        let navbarHeight = $('.header').outerHeight();

        const toast = swal.mixin({
            icon: "success",
            position: "center",
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 3000,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
    
        $(window).scroll(function() {
            if($(window).width() > 1000) {
                let toTop = $(this).scrollTop();
        
                if (toTop > lastScrollTop && toTop > navbarHeight) {
                    $('.header').css('transform', 'translate3d(0, -200px, 0');
                } else {
                    $('.header').css('transform', 'unset');
                }
                lastScrollTop = toTop;
            }
        });

        $(document).mousemove(function(event) {
            if($(window).width() > 1000) {
                let mouseY = event.clientY;
                if(mouseY < 200) {
                    $('.header').css('transform', 'unset');
                } else {
                    let toTop = $(window).scrollTop();
                    if(toTop > navbarHeight) {
                        $('.header').css('transform', 'translate3d(0, -200px, 0');
                    }
                }
            }
        });

        $(".main-form").on("submit", function( event ) {
            event.preventDefault();
            const checkIn = $("#check_in")[0].value;
            const checkOut = $("#check_out")[0].value;

            const checkInDay = new Date(checkIn).getDate();
            const checkOutDay = new Date(checkOut).getDate();
            const today = new Date(Date.now()).getDate();

            if( checkOutDay < checkInDay ){
                toast.fire({
                    icon: "error",
                    html: `<h3>Departure date must be greater than arrival</h3>`
                });
            } else if(checkInDay < today ) {
                toast.fire({
                    icon: "error",
                    html: `<h3>You cannot order booking before current day</h3>`
                });
            } else {
                window.location.href = `rooms?check_in=${checkIn}&check_out=${checkOut}`;
            }
        })

    });
});