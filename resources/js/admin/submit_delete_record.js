import Swal from "sweetalert2";

const delete_record = document.getElementById("delete_record");


delete_record.addEventListener('click', (e) => {

    e.preventDefault();

    Swal.fire({
        title: '¿Está segura/o que desea eliminar este registro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            delete_record.form.submit();
        }
    })

});
