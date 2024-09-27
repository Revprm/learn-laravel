import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    "builds": [
        {
          "src": "public/*",
          "use": "@vercel/static"
        },
        {
          "src": "api/index.php",
          "use": "@vercel/php"
        }
      ],
      "routes": [
        {
          "src": "/(.*)",
          "dest": "public/index.php"
        }
      ]
});
