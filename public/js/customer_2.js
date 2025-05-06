
function CustomerStore() {
    var formData = new FormData(document.getElementById("Customer"));
    axios({
            method: 'post',
            url: '../CustomerStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel

            datatable_load();
                 alert('Registrado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
 // Función para cargar proyectos desde el servidor
 function ProjectList() {
    axios.get('../ProjectList') // Cambia esta ruta a tu endpoint en Laravel
        .then(response => {
            const select = document.getElementById('project_id');
            const select2 = document.getElementById('project_id_2');
            const projects = response.data; // Asegúrate de que este formato sea un array de objetos [{id, name}]
            // Iterar sobre los proyectos y crear opciones
            projects.forEach(project => {
                const option = document.createElement('option');
                option.value = project.id;
                option.textContent = project.title;
                select.appendChild(option);
                select2.appendChild(option);
            });
        })
        .catch(error => {
            console.error('Error al cargar los proyectos:', error);
        });


}

function CustomerStorePublic() {
    const btn = document.getElementById("submitBtn");
    const text = document.getElementById("submitText");
    const spinner = document.getElementById("submitSpinner");

    // Mostrar el spinner
    text.classList.add("d-none");
    spinner.classList.remove("d-none");
    btn.disabled = true;

    var formData = new FormData(document.getElementById("Customer"));
    let code_country = init.getSelectedCountryData().dialCode;
    formData.append("code_country", code_country);

    axios({
        method: 'post',
        url: 'CustomerStorePublic',
        data: formData,
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    })
    .then(function(response) {
        document.getElementById("mycontent").innerHTML = response.data;
        alert('Registrado Correctamente');
        window.location.reload();
    })
    .catch(function(response) {
        console.log(response);
        alert('Verifíque los datos correctamente');
    })
    .finally(function() {
        // Restaurar botón
        text.classList.remove("d-none");
        spinner.classList.add("d-none");
        btn.disabled = false;
    });
}

function CustomerDestroy(id) {
    if (confirm("Esta seguro de Eliminar?")) {
        var formData = new FormData(document.getElementById("Customer"));
        formData.append("id", id);
        axios({
                method: 'post',
                url: "../../CustomerDestroy",
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function(response) {
                //handle success
                var contentdiv = document.getElementById("mycontent");
                contentdiv.innerHTML = response.data;
                     //carga pdf- csv - excel
                     datatable_load();
              alert('Eliminado Correctamente');
            })
            .catch(function(response) {
                //handle error
                console.log(response);
            });
    }
}

function CustomerEdit(id) {
    var formData = new FormData(document.getElementById("Customer"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: '../CustomerEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            Customer.id.value = response.data["id"];
            Customer.dni.value = response.data["dni"];
            Customer.firstname.value = response.data["firstname"];
            Customer.lastname.value = response.data["lastname"];
            Customer.names.value = response.data["names"];



            Customer.cellphone.value = response.data["cellphone"];

            Customer.message.value = response.data["message"];





        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function CustomerUpdate() {
    var formData = new FormData(document.getElementById("Customer"));
    axios({
            method: 'post',
            url: '../CustomerUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
                 datatable_load();
                 alert('Modificado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

