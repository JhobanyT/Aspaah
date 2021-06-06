new Glider(document.querySelector('.slider__lista_imgvehiculos'), {
    slidesToScroll: 1,
    slidesToShow: 2,
    draggable: true,
    dots: '.indicadores',
});
new Glider(document.querySelector('.carousel__lista'), {
    slidesToShow: 1,
    arrows: {
        prev: '.carousel__anterior',
        next: '.carousel__siguiente'
    }
});