document.addEventListener('DOMContentLoaded', () => {

    //Button swipe
    if (window.innerWidth < 576) {
        document.querySelector('.next_img').src='./img/arrow-width.svg';
        document.querySelector('.carousel-navigation.container').style.display='none';
        document.querySelectorAll(".more").forEach((item) => {
            item.src = "./img/more-mobile.svg";
        });
        document.querySelectorAll(".template__img").forEach((item) => {
            item.src = "./img/subcribe-btn.svg";
        });


    }
    if (window.innerWidth > 576) {
        document.querySelectorAll(".more").forEach((item) => {
            item.src = "./img/more.svg";
        });
    }
    //carousel iteration
    const button = document.querySelector('.next'),
        screens = document.querySelectorAll('.carousel-iterator'),
        iterators = document.querySelectorAll('.carousel-navigation_iterator');
    function hideScreens() {
        screens.forEach(item => {
            item.style.display = 'none';
        });

        screens[0].style.display = 'block';
    }
    button.addEventListener('onClick', () => {
    });
    hideScreens();
    let i=0;
    button.addEventListener('click',()=>{
        screens[i].style.display='none';
        iterators[i].classList.remove('active_iterator');
        i++;
        screens[i].style.display='block';
        iterators[i].classList.add('active_iterator');
        if(i===3){
            button.style.display='none'
        }
    })


});




