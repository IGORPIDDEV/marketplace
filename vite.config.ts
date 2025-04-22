import vue from '@vitejs/plugin-vue';
// import autoprefixer from 'autoprefixer';
// import laravel from 'laravel-vite-plugin';
import path from 'path';
// import tailwindcss from 'tailwindcss';
// import { resolve } from 'node:path';
import { defineConfig } from 'vite';

export default defineConfig({
  root: 'resources/js',
  build: {
    outDir: '../../public/build',
    emptyOutDir: true,
  },
  server: {
    port: 3000,
    host: '0.0.0.0',
    proxy: {
      '/api': {
        target: 'http://laravel_nginx',
        changeOrigin: true,
        secure: false,
      },
    },
    strictPort: true,
    hmr: {
      host: 'localhost',
    },
  },
  plugins: [
    vue(),
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),
    },
  },
});
