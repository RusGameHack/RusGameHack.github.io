$(document).ready(function(){   
    $('#button-msg').click(function(e) {
        e.preventDefault();
        let $form = $("#form");
        //if(!$form.valid()) return false;
        $.ajax({
            url: "../php/mailer/send.php",
            type: "POST",
            dataType: "html",
            data: $form.serialize()
        }).done(function() {
            alert('Пиздец');
            //$(this).find("input").val("");
            //$('#consultation, #order').fadeOut();
            //$('.overlay, #thanks').fadeIn('slow');
            //$($form).trigger('reset');
        });
        return false;
    });
});

const hamburger = document.querySelector('.hamburger'),
    menu = document.querySelector('.menu'),
    closeElem = document.querySelector('.menu__close'),
    animTurn = document.querySelector('.animTurn'),
    animLeave = document.querySelector('.animLeave');

hamburger.addEventListener('click', () => {
    menu.classList.add('active'),
    closeElem.classList.add('animTurn'),
    hamburger.classList.add('animLeave');
});

closeElem.addEventListener('click', () => {
    menu.classList.remove('active'),
    closeElem.classList.remove('animTurn'),
    hamburger.classList.remove('animLeave');
});

const counters = document.querySelectorAll('.skills__ratings-counter'),
      lines = document.querySelectorAll('.skills__ratings-line span');

counters.forEach( (item, i) => {
    lines[i].style.width = item.innerHTML;
});