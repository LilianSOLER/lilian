const app = Vue.createApp({
	data() {
		return {
			title: "Vue Mart",
			groceries: [
				{ name: "Apples", price: 2 },
				{ name: "Bananas", price: 3 },
				{ name: "Oranges", price: 4 },
				{ name: "Pears", price: 5 },
				{ name: "Lemons", price: 6 },
				{ name: "Limes", price: 7 },
				{ name: "Grapes", price: 8 },
				{ name: "Strawberries", price: 9 },
				{ name: "Blueberries", price: 10 },
			],
		};
	},
	computed: {
		total() {
			return this.groceries.reduce(
				(total, grocery) => total + grocery.price,
				0
			);
		},
	},
});

app.mount(".app");
