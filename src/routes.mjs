import Home from "../view/home.vue.mjs";
import School from "../view/school/school.vue.mjs";
import Student from "../view/cours/student.vue.mjs";

const routes = [
  { path: '/', component: Home },
  { path: '/school/:id1/:id2', component: School, props: true },
  { path: '/cours/student/:id', component: Student, props: true },
];

const router = VueRouter.createRouter({
  history: VueRouter.createWebHashHistory(),
  routes
})

export default router;





