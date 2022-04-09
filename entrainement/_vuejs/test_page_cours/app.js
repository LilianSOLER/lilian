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
					],
				},
				{
					name: "Mars",
					lessons: [
						{
							day: 07,
							title: "Correction EX9 et Cours division Euclidienne",
							link: "#",
						},
						{
							day: 07,
							title: "Exercice division euclidienne",
							link: "#",
						},
						{
							day: 14,
							title: "Exercice division",
							link: "#",
						},
						{
							day: 28,
							title: "Cours & Exo Polygone",
							link: "#",
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
          title: "Table de multiplication",
          link: "#"
        },
        {
          title: "Table d'addition",
          link: "#"
        },
        {
          title: "Table de soustraction",
          link: "#"
        },
        {
          title: "Entrainement opération",
          link: "#"
        },
        {
          title: "Rendu Exercice",
          link: "#"
        },
      ],
		};
	},
});

app.mount("#app");