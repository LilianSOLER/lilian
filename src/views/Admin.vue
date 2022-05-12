<template>
	<div class="admin">
		<main>
			<section class="admin-select">
				<h2>Choisir un type d'objet</h2>
				<form>
					<label for="object">
						<span>Nom de l'objet</span>
						<select name="object" v-model="objectSelected">
							<option v-for="object in objects" :value="object" :key="object">
								{{ object }}
							</option>
						</select>
					</label>
				</form>
			</section>
			<hr />
			<AdminStudent v-if="objectSelected == 'student'" />
		</main>
	</div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import AdminStudent from "@/components/AdminStudent.vue";

interface DataComponent {
	objectSelected: string;
	objects: string[];
}

export default defineComponent({
	name: "Admin",
	components: {
		AdminStudent,
	},
	data(): DataComponent {
		return {
			objectSelected: "",
			objects: ["home", "school", "student"],
		};
	},
});
</script>

<style scoped lang="scss">
.admin {
	width: 80vw;
	margin: 0 auto;
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
