<template>
	<div class="admin">
		<main>
			<AdminStudent />
		</main>
	</div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import AdminStudent from "@/components/AdminStudent.vue";

interface DataComponent {
	message: string;
}

export default defineComponent({
	name: "Admin",
	components: {
		AdminStudent,
	},
	data(): DataComponent {
		return {
			message: "",
		};
	},
});
</script>

<style scoped lang="scss">

</style>

