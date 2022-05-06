<template>
	<section>
		<div class="signup">
			<h2>Créer un compte administrateur</h2>
			<form>
				<label for="email">
					<input
						type="email"
						name="email"
						id="email"
						placeholder="Email"
						required
						v-model="email"
					/>
				</label>
				<label for="password">
					<input
						type="password"
						name="password"
						id="password"
						placeholder="Mot de passe"
						required
						v-model="password"
					/>
				</label>
				<label for="admin_password">
					<input
						type="password"
						name="admin_password"
						id="admin_password"
						placeholder="Mot de passe admin"
						required
						v-model="admin_password"
					/>
				</label>
				<button type="submit" @click="submitForm">Connexion</button>
			</form>
		</div>
	</section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import { AxiosResponse } from "axios";
import _axios from "@/plugins/axios";

interface DataComponent {
	email: string;
	password: string;
	admin_password: string;
}

export default defineComponent({
	name: "Signup",
	data(): DataComponent {
		return {
			email: "",
			password: "",
			admin_password: "",
		};
	},
	methods: {
		submitForm(event: Event) {
			event.preventDefault();
			_axios
				.post("user/signup", {
					email: this.email,
					password: this.password,
					admin_password: this.admin_password,
				})
				.then((response: AxiosResponse<{ message: string }>) => {
					console.log(response.data);
					switch (response.status) {
						case 201:
							alert("Votre compte a bien été créé");
							break;
						case 401:
							alert("Vous n'êtes pas autorisé à créer un compte administrateur");
							break;
						default:
							alert("Une erreur est survenue");
							break;
					}
					this.resetInfo();
				})
				.catch((error: Error) => {
					alert(error);
					this.resetInfo();
				});
		},
		resetInfo() {
			this.email = "";
			this.password = "";
			this.admin_password = "";
		},
	},
});
</script>

<style scoped lang="scss">
.signup {
	border: 1px solid #ccc;
	width: 60vw;
	margin: 0 auto;
	text-align: center;
	form {
		width: 40vw;
		margin: 0 auto;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		label {
			display: flex;
			flex-direction: column;
			margin: 10px 0;
			input {
				width: 100%;
				border: 1px solid #ccc;
				padding: 5px;
			}
		}
		button {
			width: 10vw;
			min-width: min-content;
			border: 1px solid #ccc;
			padding: 5px;
			margin: 10px 0;
		}
	}
}
</style>
