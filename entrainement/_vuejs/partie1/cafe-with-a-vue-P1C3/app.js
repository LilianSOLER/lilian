const app = Vue.createApp({
	data() {
		return {
			restaurant: {
				name: "Café avec vue",
				adress: {
					street: "Avenue du Beurre",
					number: "18",
					city: "Paris",
					country: "France",
				},
				phone: "0188888888",
				email: "hello@cafewithavue.bakery",
				schedule: [
					{ name: "L-V", hours: "06:00 - 16:00" },
					{ name: "S", hours: "08:00 - 14:00" },
					{ name: "D", hours: "closed" },
				],
			},
			year: new Date().getFullYear(),
		};
	},
	computed: {
		copyright() {
			return `© ${this.restaurant.name} ${this.year}`;
		},
		completeAdress() {
			return `${this.restaurant.adress.street} ${this.restaurant.adress.number}, ${this.restaurant.adress.city}, ${this.restaurant.adress.country}`;
		},
		prettierPhone() {
			return this.restaurant.phone;
		},
	},
});

app.mount(".app");
