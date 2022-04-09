const app = Vue.createApp({
	data() {
		return {
			name: "Kevin",
			cours: [
				{
					name: "Janvier",
					lessons: [
						{
							day: 24,
							title: "Cours Nombre décimaux",
							link: "media/image/cours_24_01_kevin_j.pdf",
						},
						{
							day: 24,
							title: "Execercice calcul nombre décimaux",
							link: "https://forms.gle/6iPu3JCByMBztR9t8",
						},
					],
				},
				{
					name: "Fevrier",
					lessons: [
						{
							day: 07,
							title: "Cours Angle et Correction DS",
							link: "media/image/cours_07_02_kevin_j.pdf",
						},
						{
							day: 07,
							title: "Exercice opérations",
							link: "media/image/exo_operations_6.pdf",
						},
						{
							day: 07,
							title: "Exercice mesure angle",
							link: "media/image/exo_mesure_angle_6.pdf",
						},
						{
							day: 14,
							title: "Cours Opération",
							link: "media/image/cours_14_02_kevin_j.pdf",
						},
						{
							day: 28,
							title: "Astuce pour gagner au jeu de la course",
							link: "media/image/astuce_28_02_kevin_j.pdf",
						},
						{
							day: 28,
							title: "Exercice opération",
							link: "media/image/exo_operations_7.pdf",
						},
					],
				},
				{
					name: "Mars",
					lessons: [
						{
							day: 07,
							title: "Correction EX9 et Cours division Euclidienne",
							link: "media/image/cours_07_03_kevin_j.pdf",
						},
						{
							day: 07,
							title: "Exercice division euclidienne",
							link: "https://docs.google.com/forms/d/e/1FAIpQLScDst6wYCwirF294u_OGsniviXvkSrK9TzOWB7V_-r0jhDnsA/viewform?usp=sf_link",
						},
						{
							day: 14,
							title: "Exercice division",
							link: "https://forms.gle/G62XeYoobRzySHzX8",
						},
						{
							day: 28,
							title: "Cours & Exo Polygone",
							link: "media/image/cours_28_03_kevin_j.pdf",
						},
					],
				},
				{
					name: "Avril",
					lessons: [
						{
							day: 04,
							title: "Exo Division / Polygone",
							link: "#",
						},
					],
				},
			],
			utils: [
				{
					title: "Tables (multiplication, addition, soustraction)",
					link: "apprendre_table.php?op=2",
				},
				{
					title: "Entrainement opération",
					link: "entrainement_op.php?op=plus",
				},
				{
					title: "Rendu Exercice",
					link: "rendu_exercice.php",
				},
			],
		};
	},
});

app.mount("#app");
