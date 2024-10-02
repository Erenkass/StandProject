import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import postcssImport from 'postcss-import';
import autoprefixer from 'autoprefixer';
import purgecss from '@fullhuman/postcss-purgecss';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [
                postcssImport(),
                autoprefixer(),
                purgecss({
                    content: [
                        './resources/views/frontend/inc/header.blade.php',
                        './resources/views/frontend/inc/footer.blade.php',
                        './resources/views/frontend/layout/layout.blade.php',
                        './resources/views/frontend/index.blade.php',

                    ],
                    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
                }),
            ],
        },
    },
});
