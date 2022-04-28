<template>
	<div class="admin">
		<main>
			<section>
				<h2>Ajouter un étudiant</h2>
				<form>
					<label for="student">
						<span>Nom de l'étudiant</span>
						<input type="text" name="student" v-model="student" required />
					</label>
					<label for="classe">
						<span>Classe</span>
						<input type="text" name="classe" v-model="classe" required />
					</label>
					<button type="submit" @click="submitCreateStudent">Click Here</button>
				</form>
			</section>
			<hr />
			<section>
				<h2>Modifier un étudiant</h2>
				<form>
					<label for="student">
						<span>Nom de l'étudiant</span>
						<select name="student" v-model="studentSelected">
							<option
								v-for="studentName in studentsName"
								:value="studentName"
								:key="studentName"
							>
								{{ studentName }}
							</option>
						</select>
					</label>
					<label for="month">
						<span>Mois</span>
						<input type="text" name="month" v-model="month" required />
					</label>
					<label for="day">
						<span>Jour</span>
						<input type="text" name="day" v-model="day" required />
					</label>
					<label for="link">
						<span>Lien</span>
						<input type="text" name="link" v-model="link" required />
					</label>
					<label for="title">
						<span>Titre</span>
						<input type="text" name="title" v-model="title" required />
					</label>
					<button type="submit" @click="submitUpdateStudent">Click Here</button>
				</form>
			</section>
			<hr />
			<section>
				<h2>Supprimer un étudiant</h2>
				<form>
					<label for="student">
						<span>Nom de l'étudiant</span>
						<select name="student" v-model="studentSelectedDeleted">
							<option
								v-for="studentName in studentsName"
								:value="studentName"
								:key="studentName"
							>
								{{ studentName }}
							</option>
						</select>
					</label>
					<button type="submit" @click="submitDeleteStudent">Click Here</button>
				</form>
			</section>
			<hr />
		</main>
	</div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import axios, { AxiosResponse } from "axios";

interface Student {
	_id: string;
	name: string;
	class: string;
	cours: {
		_id: string;
		__v: number;
		month: string;
		lessons: {
			_id: string;
			day: string;
			title: string;
			link: string;
		}[];
	}[];
}

interface DataComponent {
	studentsName: string[];
	student: string;
	month: string;
	classe: string;
	day: string;
	link: string;
	title: string;
	studentSelected: string;
	studentSelectedDeleted: string;
}

export default defineComponent({
	name: "Admin",
	data(): DataComponent {
		return {
			studentsName: [],
			student: "",
			month: "",
			classe: "",
			day: "",
			link: "",
			title: "",
			studentSelected: "",
			studentSelectedDeleted: "",
		};
	},
	methods: {
		loadStudentsName(): void {
			this.studentsName = [];
			axios
				.get("https://sheltered-basin-99154.herokuapp.com/api/student/")
				.then(
					(
						response: AxiosResponse<{ message: string; students: Student[] }>
					) => {
						response.data.students.forEach((student: Student) => {
							this.studentsName?.push(student.name);
						});
						this.student = "";
						this.classe = "";
					}
				);
		},
		submitCreateStudent(e: Event): void {
			e.preventDefault();
			if (localStorage.getItem("token") === null) {
				alert("Vous n'êtes pas connecté");
				setTimeout(() => {
					window.location.href = "/login";
				}, 5000);
				return;
			} else if (localStorage.getItem("expires_at") != null) {
				if (
					new Date(localStorage.getItem("expires_at") as string) < new Date()
				) {
					alert("Votre session a expiré");
					setTimeout(() => {
						window.location.href = "/login";
					}, 5000);
					return;
				} else {
					axios
						.post(
							"https://sheltered-basin-99154.herokuapp.com/api/student",
							{ name: this.student, class: this.classe },
							{
								headers: {
									Authorization: `Bearer ${localStorage.getItem("token")}`,
								},
							}
						)
						.then((response: AxiosResponse) => {
							console.log(response);
							alert("Ajouté !");
							this.loadStudentsName();
						})
						.catch((error: Error) => {
							alert("Erreur !");
							console.log(error);
						});
				}
			} else {
				alert("Erreur !");
			}
		},
		submitUpdateStudent(e: Event): void {
			e.preventDefault();
			axios
				.put(
					`https://sheltered-basin-99154.herokuapp.com/api/student/${this.student}`,
					{
						name: document.querySelector("select")?.value,
						month: this.month,
						lessons: 
							{
								day: this.day,
								title: this.title,
								link: this.link,
							},
					},
					{
						headers: {
							Authorization: `Bearer ${localStorage.getItem("token")}`,
						},
					}
				)
				.then((response: AxiosResponse) => {
					console.log(response);
					alert("Modifié !");
					this.month = "";
					this.day = "";
					this.title = "";
					this.link = "";
				})
				.catch((error: Error) => {
					console.log(error);
					alert("Erreur !");
				});
		},
		submitDeleteStudent(e: Event): void {
			e.preventDefault();
			axios
				.delete(`https://sheltered-basin-99154.herokuapp.com/api/student/`, {
					data: {
						name: this.studentSelectedDeleted,
					},
					headers: {
						Authorization: `Bearer ${localStorage.getItem("token")}`,
					},
				})
				.then((response: AxiosResponse) => {
					console.log(response);
					alert("Supprimé !");
					this.loadStudentsName();
				})
				.catch((error: Error) => {
					alert("Erreur !");
					console.log(error);
				});
		},
	},
	mounted() {
		this.loadStudentsName();
	},
});
</script>

<style scoped lang="scss">
.admin {
	width: 80vw;
	margin: 0 auto;
	main {
		section {
			width: 60vw;
			margin: auto 20vh;
			h2 {
				font-size: 2em;
				text-align: center;
				margin-bottom: 1vh;
			}
			form {
				width: max-content;
				margin: 0 auto;
				display: flex;
				flex-direction: column;
				font-size: 1em;
				label {
					margin-bottom: 2vh;
					span {
						margin-right: 0.5vw;
					}
				}
				button {
					margin-top: 2vh;
					width: fit-content;
					align-self: center;
				}
			}
		}
	}
	hr {
		display: block;
		border: 1px solid white;
		width: 40vw;
		margin-top: 5vh;
		margin-bottom: 5vh;
		text-align: center;
	}
}
</style>
