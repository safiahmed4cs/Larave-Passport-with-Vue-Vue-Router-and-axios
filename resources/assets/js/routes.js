import VueRouter from 'vue-router';

let routes = [
	{
		path: '/user',
		component: require('./pages/user')
	}
]

export default new VueRouter({
	routes,

	linkActiveClass: 'is-active' 
});