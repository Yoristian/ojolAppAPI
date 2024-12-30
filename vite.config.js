import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], // Sesuaikan dengan file input Anda
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build', // Direktori output
    },
});
