// Variables
const editar = document.querySelectorAll('.editar'),
      inputsEditar = document.querySelectorAll('#formEditar input'),
      eliminar = document.querySelectorAll('.eliminar');



editar.forEach(registro => {
    registro.addEventListener('click', (e) => {
        const dataId = e.target.getAttribute('data-id');

        const datosUsuario = e.target.parentElement.parentElement.querySelectorAll('[name]');

        for(let i = 0; i < inputsEditar.length; i++){
            inputsEditar[i].value = datosUsuario[i].textContent;
        }

        document.querySelector('#editar').value = Number(dataId);
    });
});


eliminar.forEach(eliminarRegistro => {
    eliminarRegistro.addEventListener('click', (e) => {
        const dataId = e.target.getAttribute('data-id');

        if(confirm('¿Deseas eliminar este registro?')){
            e.target.value = dataId;
            e.target.href  = `tabla.php?eliminar=${dataId}`;
        }   

        
    });
});


