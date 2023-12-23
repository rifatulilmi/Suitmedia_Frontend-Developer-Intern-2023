import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Vue from '@vitejs/plugin-vue';
import ViteAxios from 'vite-plugin-axios';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        Vue(),
        ViteAxios(),
    ],
    server: {
        proxy: {
            '/api': {
                target: 'https://suitmedia-backend.suitdev.com',
                changeOrigin: true,
                rewrite: (path) => path.replace(/^\/api/, '/api'),
            },
            '/': {
                target: 'http://127.0.0.1:8000',
                changeOrigin: true,
            },
        },
    },
});
