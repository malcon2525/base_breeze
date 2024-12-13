import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/app/css/site.css', // Adicionando o arquivo adicional
                'resources/app/css/adm.css', // Adicionando o arquivo adicional
            ],
            refresh: true,
        }),
    ],
});
