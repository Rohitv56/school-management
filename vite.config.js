import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/signature.css",
                "resources/js/app.js",
                "vendor/tomatophp/filament-simple-theme/resources/css/theme.css",
            ],
            refresh: true,
        }),
    ],
});
