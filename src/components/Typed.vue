<template>
	<div class="typed">
		<span>{{ typedString }}</span>
	</div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import { Typed } from "typed.ts";

export default defineComponent({
	name: "TypedComponent",
	data() {
		return {
			typedString: "",
		};
	},
	async mounted() {
		const typed = new Typed({
			callback: (text) => (this.typedString = text),
		});

		const strings = [
			"Soler Lilian",
			"Entreprise Didelo",
			"Developpeur Web",
			"Platforme pour élèves",
		];

		const options = {
			eraseDelay: { min: 40, max: 80 },
			perLetterDelay: { min: 80, max: 160 },
			errorMultiplier: 0,
		};

		strings.forEach((string) => {
			typed
				.type(string, options)
				.wait(1000)
				.backspace(string.length)
				.wait(1000);
		});
		await typed.run();
		await typed.reset(true);
		typed.type(strings[0], options);
		typed.run();
	},
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
span {
	color: white;
	font-family: Avenir, Helvetica, Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
</style>
