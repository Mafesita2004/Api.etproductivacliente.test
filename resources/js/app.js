// Asegúrate de que Axios está disponible
import axios from 'axios';

document.addEventListener('DOMContentLoaded', function () {
    // Aquí colocas el código para hacer la petición cuando la página se cargue
    axios.get(process.env.MIX_URL_SERVER_API + '/users')
        .then(response => {
            console.log(response.data);
        })
        .catch(error => {
            console.error('Error en la solicitud:', error);
        });
});
