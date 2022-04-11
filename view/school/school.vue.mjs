import schoolTemplate from '../../template/school-template.mjs';
import schoolInfo from './school-info.mjs';

const School = {
	template: schoolTemplate,
	props: {
		id1: {
			required: true,
			type: String,
			default: 'peip2',
		},
		id2: {
			required: true,
			type: String,
			default: 'application-du-web',
		},
	},
	computed: {
		school() {
			return schoolInfo[this.id1][this.id2];
		}
	},
	methods: {
		upperFirstLetter(str) {
			return str.charAt(0).toUpperCase() + str.slice(1);
		},
	},
};

export default School;
