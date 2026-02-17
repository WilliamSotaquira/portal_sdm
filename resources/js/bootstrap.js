import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Opcional: JavaScript personalizado para SDM
document.addEventListener('DOMContentLoaded', function() {
    // Tu código JavaScript personalizado aquí
    console.log('SDM cargado con Bootstrap 5');
});
