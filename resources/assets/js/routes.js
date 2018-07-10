import VueRouter from 'vue-router'; //ES6 Module引入

let routes = [
    {
        path:'/home', //路徑
              component:require('./components/Home')//Component
    },
    {
        path:'/video',
        component:require('./components/Video')
    },
    {
        path:'/data',
        component:require('./components/Data')
    },
    {
        path:'/movie',
        component:require('./components/Movie')
    }
];

export default new VueRouter({
    mode :'history', //因為Vue router 會自動產生hashtag(#)
    routes //ES6語法，當key和value一樣時可省略key
})