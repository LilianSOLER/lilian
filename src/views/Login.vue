<template>
	<section>
		<div class="login">
			<h2>Se connecter à son compte administrateur</h2>
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
				<button type="submit" @click="submitForm">Connexion</button>
			</form>
		</div>
	</section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import {AxiosResponse} from "axios";
import _axios from "@/plugins/axios";


interface DataComponent {
	email: string;
	password: string;
}

export default defineComponent({
	name: "Login",
	data(): DataComponent {
		return {
			email: "",
			password: "",
		};
	},
	methods: {
		submitForm(event: Event) {
			event.preventDefault();
			_axios
				.post("user/login", {
					email: this.email,
					password: this.password,
				})
				.then((response: AxiosResponse<{ userId: string, token: string }> ) => {
					console.log(response.data);
					switch(response.status){
						case 200:
							localStorage.setItem("userId", response.data.userId);
							localStorage.setItem("token", response.data.token);
							localStorage.setItem("expires_at", (new Date().getTime() + 3600).toString());
							location.href = "/admin";
							break;
						case 401:
							alert(response.data);
							break;
						default:
							alert("Une erreur est survenue");
							break;
					}
				})
				.catch((error) => {
					console.log(error);
				});
		},
	},
});
</script>

<style scoped lang="scss">
.login {
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
