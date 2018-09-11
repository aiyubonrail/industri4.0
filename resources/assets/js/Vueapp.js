 import Vue from 'vue'
    import VueRouter from 'vue-router'

    Vue.use(VueRouter)

    import App from './components/App'
    import Welcome from './components/Welcome'
    import Page from './components/Page'

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/home',
                name: 'welcome',
                component: Welcome,
                props: { title: "This is APP for Industrial Revolution 4.0" }
            },
            {
                path: '/about',
                name: 'page',
                component: Page,
                props: { 
                    title: "This is APP for Industrial Revolution 4.0",
                    author : {
                        name : "Muhammad Aiyub",
                        role : "Software Engineer",
                        code : "Always keep it clean"
                    }
                }
            },    
        ],
    })
    const app = new Vue({
        el: '#app',
        components: { App },
        router,
    });