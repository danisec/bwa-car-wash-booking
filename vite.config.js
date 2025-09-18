import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        watch: {
            usePolling: true,
        },
        hmr: {
            host: 'localhost',
            port: 5173,
        },
        port: 5173,
        host: true,
        cors: {
            origin: ['http://localhost:8001', 'http://0.0.0.0:8001'],
            credentials: true,
            optionsSuccessStatus: 200,
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
