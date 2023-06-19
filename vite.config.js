import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            /*En este arreglo debes incluir los archivos css y js que necesites para el funcionamiento de
            tu modulo*/
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/carrusel.js',
            ],
            refresh: true,
        }),
    ],
});
