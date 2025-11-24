import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Importar Bootstrap
import 'bootstrap';

// Opcional: JavaScript personalizado para el Portal SDM
document.addEventListener('DOMContentLoaded', function() {
    // Tu código JavaScript personalizado aquí
    console.log('Portal SDM cargado con Bootstrap 5');
});
