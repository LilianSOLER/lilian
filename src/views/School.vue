<template>
	<section>
		<div class="school-template">
			<h1>{{ school?.title }}</h1>
			<ul class="parent">
				<div
					v-for="(content, index) in school?.contents"
					:key="'content-' + index"
				>
					<li>{{ content.title }}</li>
					<ul>
						<li
							v-for="(subContent, index2) in content.subcontents"
							:key="'sub-content-' + index2"
						>
							<a :href="'/' + subContent?.link">{{ subContent?.title }}</a>
						</li>
					</ul>
				</div>
			</ul>
		</div>
	</section>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import { AxiosResponse } from "axios";
import _axios from "@/plugins/axios";

interface School {
	_id: string;
	level: string;
	title: string;
	contents: [
		{
			title: string;
			_id: string;
			subcontents: [
				{
					title: string;
					_id: string;
					link: string;
				}
			];
		}
	];
}

interface DataComponent {
	school: null | School;
}

export default defineComponent({
	name: "School",
	props: {
		levelProp: {
			required: true,
			type: String as PropType<string>,
			default: "peip-2",
		},
		titleProp: {
			required: true,
			type: String as PropType<string>,
			default: "application-du-web",
		},
	},
	data(): DataComponent {
		return {
			school: null,
		};
	},
	methods: {
		capitalize(str: string): string {
			if (str === "") return "";
			if (str.length === 1) return str.toUpperCase();
			str = str.replaceAll("-", " ");
			return str.charAt(0).toUpperCase() + str.slice(1);
		},
		loadSchool(): void {
			_axios
			.get(`school/${this.titleProp}`)
			.then(
				(res: AxiosResponse<{ message: string; schoolSubject: School[] }>) => {
					console.log(res.data);
					this.school = res.data.schoolSubject[0];
					this.school.title = this.capitalize(this.school.title);
				}
			);
		},
	},
	mounted() {
		this.loadSchool();
	},
	watch: {
		titleProp() {
			this.loadSchool();
		},
	},
});
</script>

<style scoped lang="scss">
section {
	border: 1px solid white;
	overflow: none;
	.parent {
		width: 100%;
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
		grid-gap: 2vh 5vw;
		margin-bottom: 2vh;
	}

	.parent div li {
		width: 100%;
		font-size: 1.5rem;
	}

	h1 {
		text-align: center;
		font-size: 3rem;
	}
}
</style>
