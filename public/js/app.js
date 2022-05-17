

// EFECTO ZOOM Y OPACIDAD CAJITAS PROYECTOS HOME
function hoverproyecto(x){
    x.childNodes[1].style.transform = "scale(1.2)";
}
function salirhoverproyecto(x){
    x.childNodes[1].style.transform = "scale(1)";
}
// EFECTO ZOOM Y OPACIDAD CAJITAS PROYECTOS HOME

// EFECTO OPACIDAD FILTROS PORTFOLIO
function hoverfiltro(x){
    x.childNodes[3].style.opacity = 0;
    x.childNodes[1].style.opacity = 1;
}
function salirhoversalir(x){
    x.childNodes[3].style.opacity = 1;
    x.childNodes[1].style.opacity = 0;
}
// EFECTO OPACIDAD FILTROS PORTFOLIO


//EFECTO FILTRADOR (hacer que solo se jecute cuando estoy en el protoflio)
window.onload = function() {
    // AGREGANDO CLASE ACTIVE AL PRIMER ENLACE //
    $('.filtros .filtro[category="all"]').addClass('ct_item-active');

    // FILTRANDO PRODUCTOS
    $('.filtro').click(function(){
        var catProduct = $(this).attr('category');
        console.log(catProduct);

        // AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
        $('.filtro').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');

        // OCULTANDO PRODUCTOS =========================
        $('.proyecto').css('transform', 'scale(0)');
        function hideProduct(){
            $('.proyecto').hide();
        } setTimeout(hideProduct,400);

        // MOSTRANDO PRODUCTOS =========================
        function showProduct(){
            $('.proyecto[category="'+catProduct+'"]').show();
            $('.proyecto[category="'+catProduct+'"]').css('transform', 'scale(1)');
        } setTimeout(showProduct,400);
    });

    // MOSTRANDO TODOS LOS PRODUCTOS =======================
    $('.filtro[category="all"]').click(function(){
        function showAll(){
            $('.proyecto').show();
            $('.proyecto').css('transform', 'scale(1)');
        } setTimeout(showAll,400);
    });
};
//EFECTO FILTRADOR





