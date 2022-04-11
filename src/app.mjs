import router from "./routes.mjs";

const app = Vue.createApp({});


app.use(router);
app.mount('.app');

