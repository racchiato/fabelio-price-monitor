import MainPage from './components/MainPage.vue';
import AddProduct from './components/AddProduct.vue';
// import EditBook from './components/EditBook.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: MainPage
    },
    {
        name: 'add',
        path: '/add',
        component: AddProduct
    },
];