<template>
	<section>
		<div class="cours-template">
			<h1>{{ student?.class }} - {{ student?.name }}</h1>
			<ul class="parent">
				<div v-for="(cours, index) in student?.cours" :key="'courses-' + index">
					<li>{{ cours.month }}</li>
					<ul>
						<li
							v-for="(lesson, index2) in cours?.lessons"
							:key="'lesson-' + index2"
						>
							<a :href="'/' + lesson.link"
								><span v-if="lesson.day != '-1'">{{ lesson.day }} - </span
								>{{ lesson.title }}</a
							>
						</li>
					</ul>
				</div>
				<div>
					<li>Utilitaires:</li>
					<ul>
						<div v-for="(util, index3) in utils" :key="'util-' + index3">
							<li>
								<a :href="'/' + util.link">{{ util.title }}</a>
							</li>
						</div>
					</ul>
				</div>
			</ul>
		</div>
	</section>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
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

interface Util {
	_id: string;
	title: string;
	link: string;
	__v: number;
}

interface DataComponent {
	student: null | Student;
	utils: null | Util[];
}

export default defineComponent({
	name: "Students",

	props: {
		name: {
			type: String as PropType<string>,
			required: true,
			default: "kevin-j",
		},
	},

	data: (): DataComponent => ({
		student: null,
		utils: null,
	}),

	mounted() {
		this.loadStudent();
		this.loadUtils();
	},

	watch: {
		name() {
			this.loadStudent();
		},
	},

	methods: {
		capitalize(str: string): string {
			if (str == "") return "";
			if (str.length === 1) return str.toUpperCase();
			str = str.replaceAll("-", " ");
			return str.charAt(0).toUpperCase() + str.slice(1);
		},
		loadStudent(): void {
			axios
				.get(
					`https://sheltered-basin-99154.herokuapp.com/api/student/${this.name}`
				)
				.then((response: AxiosResponse<{ student: Student }>) => {
					this.student = response.data.student;
					this.student.name = this.capitalize(this.student.name);
				});
		},
		loadUtils(): void {
			axios
				.get(`https://sheltered-basin-99154.herokuapp.com/api/studentUtils`)
				.then((response: AxiosResponse<Util[]>) => {
					this.utils = response.data;
				});
		},
	},
});
</script>

<style lang="scss" scoped>
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
