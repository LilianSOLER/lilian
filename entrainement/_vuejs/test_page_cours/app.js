console.log({studentInfo});
console.log({utilsInfo});

const app = Vue.createApp({
	data() {
		return {
			name: studentInfo.name,
			classe: studentInfo.classe,
			cours: studentInfo.coursInfo,
			utils: utilsInfo,
		};
	},
});

app.mount("#app");
