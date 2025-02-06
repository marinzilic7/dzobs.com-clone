


export default defineNuxtConfig({

    app:{
        head:{
            title: 'Oglasi',
            link: [
                // Dodavanje Google Font-a
                {
                  rel: 'stylesheet',
                  href: 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik&display=swap'
                }
              ],
              meta: [
                {
                  hid: 'csrf-token',
                  name: 'csrf-token',
                  content: process.env.CSRF_TOKEN, // Ako koristiš environment varijablu za CSRF token
                }
              ]
        }
    },

    compatibilityDate: '2024-11-01',
    devtools: { enabled: true },

    runtimeConfig: {
      public: {
        apiBaseUrl: process.env.API_BASE_URL || 'http://localhost:8000/api',
      },
    },

    nitro: {
      devProxy: {
        '/api': {
          target: 'http://localhost:8000',
          changeOrigin: true,
        },
      },
    },
    css:[
        'bootstrap/dist/css/bootstrap.min.css',
        '~/assets/main.css',
        'aos/dist/aos.css'
    ],
    plugins: [
        { src: '~/plugins/bootstrap.js', mode: 'client' },  // Uvoz JS u klijentskom načinu
        { src: '~/plugins/toastification.js', mode: 'client' },
        { src: '~/plugins/aos.js', mode: 'client'}
    ],
    vite: {
        server:{
            hmr: {
                clientPort:3000
            },
        },
        define:{
            'process.env.NODE_ENV': JSON.stringify(process.env.NODE_ENV),
            __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: false,
        }
    },


  })
