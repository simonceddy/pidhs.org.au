const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

const { styles } = require( '@ckeditor/ckeditor5-dev-utils' );

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    //.js('resources/js/app.js', 'public/js')
    //.react('resources/js/exhibitions.js', 'public/js')
    .webpackConfig({
        module: {
            rules: [
                {
                    // Or /ckeditor5-[^/]+\/theme\/icons\/[^/]+\.svg$/ if you want to limit this loader
                    // to CKEditor 5 icons only.
                    test: /ckeditor5-[^/]+\/theme\/icons\/[^/]+\.svg$/,

                    use: [ 'raw-loader' ]
                },
                {
                    // Or /ckeditor5-[^/]+\/theme\/[^/]+\.css$/ if you want to limit this loader
                    // to CKEditor 5 theme only.
                    test: /ckeditor5-[^/]+\/theme\/[^/]+\.css$/,
    
                    use: [
                        {
                            loader: 'style-loader',
                            options: {
                                singleton: true
                            }
                        },
                        {
                            loader: 'postcss-loader',
                            options: styles.getPostCssConfig( {
                                themeImporter: {
                                    themePath: require.resolve( '@ckeditor/ckeditor5-theme-lark' )
                                },
                                minify: true
                            } )
                        }
                    ]
                }
            ],
        },
        performance: { hints: false }
    })
    .js('resources/js/editor/index.js', 'public/js/editor.js')
    //.react('resources/js/mobileApp/mobileApp.js', 'public/js')
    //.sass('resources/sass/index.scss', 'public/css/app.css')
    /* .options({
       // processCssUrls: false,
        //postCss: [tailwindcss('./tailwind.js')],
        postCss: [
            styles.getPostCssConfig( {
                themeImporter: {
                    themePath: require.resolve( '@ckeditor/ckeditor5-theme-lark' )
                },
                minify: true
            })
        ],
        style: {
            singleton: true
        }
    }) */
    //.sourceMaps()
    .dump()
;
