import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/home.jsx', 'resources/js/app.jsx', 'resources/js/user.jsx'],
            refresh: true,
        }),
        react(),
    ],
});