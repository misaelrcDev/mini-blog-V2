import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';

createInertiaApp({
    resolve: name => import(`./Pages/${name}.vue`), // Usando import dinâmico
    setup({ el, App, props }) {
        createApp({ render: () => h(App, props) }).mount(el);
    },
});


