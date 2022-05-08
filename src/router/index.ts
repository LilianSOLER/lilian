import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";
import Home from "../views/Home.vue";

const routes: Array<RouteRecordRaw> = [
	{
		path: "/",
		name: "Home",
		component: Home,
	},
	{
		path: "/cours/student/:name",
		name: "Students",
		component: () => import("../views/Students.vue"),
		props: true,
	},
	{
		path: "/school/:levelProp/:titleProp",
		name: "School",
		component: () => import("../views/School.vue"),
		props: true,
	},
	{
		path: "/signup",
		name: "Signup",
		component: () => import("../views/Signup.vue"),
	},
	{
		path: "/login",
		name: "Login",
		component: () => import("../views/Login.vue"),
	},
	{
		path: "/admin",
		name: "Admin",
		component: () => import("../views/Admin.vue"),
		meta: {
			requiresAuth: true,
		},
	},
];

const router = createRouter({
	history: createWebHistory(),
	routes,
});

router.beforeEach((to, from, next) => {
	if (to.matched.some((record) => record.meta.requiresAuth)) {
		if (!localStorage.getItem("token") || !localStorage.getItem("expires_at")) {
			next("/login");
		}
		if (new Date(localStorage.getItem("expires_at") as string) < new Date()) {
			localStorage.removeItem("token");
			localStorage.removeItem("expires_at");
			next("/login");
		} else {
			next();
		}
	} else {
		next();
	}
});

export default router;
