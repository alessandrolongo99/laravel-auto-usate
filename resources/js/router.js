import VueRouter from 'vue-router';

import Main from './components/Main';
import SingleCar from './pages/SingleCar';

const router = new VueRouter ({
    mode: 'history',
    routes: [
        {
            path: '/main',
            name: 'main',
            component: Main
        },

        {
            path: '/SingleCar/:id',
            name: 'SingleCar',
            component: SingleCar
        }
    ]
})
export default router;