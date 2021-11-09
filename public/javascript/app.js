
$('.btn-cart').on( 'click', (e) => {

    e.preventDefault();

    let curso = $('.btn-cart');
    let curso_id = curso.data('id');
    let nombre = curso.data('nombre');
    let precio = curso.data('precio');

    $.ajax({
        url: '/anadir-carrito',
        method: 'GET',
        data: {
            curso_id,
            precio
        },
        type: 'json',
        success: ( (response) => {

            alert(response.msg);

            window.location.reload();

        })
    })
})

function eliminarCarrito( carrito_id ) {
    $.ajax({
        url: '/eliminar-carrito',
        method: 'GET',
        data: {
            carrito_id
        },
        type: 'json',
        success: ( (response) => {
            alert(response.msg);

            window.location.reload();
        })
    })
}
