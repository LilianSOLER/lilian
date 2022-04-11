import coursTemplate from '../../template/cours-template.mjs';
import StudentInfo from './student-info.mjs';

const Student = {
	template: coursTemplate,
	props: {
		id: {
			required: true,
			type: String,
			default: 'amandine',
		},
	},
	computed: {
		student() {
			return StudentInfo.students[this.id];
		},
		utils() {
			return StudentInfo.utils;
		}
	},
	methods: {
		upperFirstLetter(str) {
			return str.charAt(0).toUpperCase() + str.slice(1);
		},
	},
};

export default Student;
