<template>
	<header>
		<div class="header">
			<router-link class="nav-link" to="/">
				<TypedComponent></TypedComponent>
			</router-link>
			<div class="header-right">
				<div class="topnav" id="topNav">
					<div class="dropdown">
						<button class="dropbtn">
							PEIP 2, INFO3
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<router-link
								class="nav-link"
								to="/school/peip-2/application-du-web"
								>Applications du Web 4</router-link
							>
							<router-link
								class="nav-link"
								to="/school/info-3/programmation-web"
								>Programmation Web 6</router-link
							>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropbtn">
							Cours
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<router-link
								class="nav-link"
								v-for="studentName in studentsName"
								:to=studentRoad(studentName)
								:key="studentName"
							>
								{{ capitalize(studentName) }}</router-link
							>
						</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">
							Mes infos
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a
								title="Curriculum Vitae  long de SOLER Lilian"
								href="asset/cv.pdf"
								>CV long
							</a>
							<a
								title="Curriculum Vitae court de SOLER Lilian"
								href="https://vcard.didelo.fr"
								>CV court</a
							>
						</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">
							Admin
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<router-link class="nav-link" to="/login">
								<span>Login</span>
							</router-link>
							<router-link class="nav-link" to="/signup">
								<span>Signup</span>
							</router-link>
						</div>
					</div>

					<a title="Site de Noah SOLER'" href="https://noah.didelo.fr"
						>Noah SOLER</a
					>
					<a href="javascript:void(0);" class="icon" @click="mobileNav()">
						&#9776;</a
					>
				</div>
			</div>
		</div>
	</header>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import TypedComponent from "@/components/Typed.vue";
import _axios from "@/plugins/axios";
import { AxiosResponse } from "axios";


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
}

export default defineComponent({
	name: "Header",
	components: {
		TypedComponent,
	},
	data(): DataComponent {
		return {
			studentsName: [],
		};
	},
	methods: {
		mobileNav() {
			let x = document.getElementById("topNav");
			if (x !== null) {
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		},
		loadStudents(){
			_axios
				.get("student")
				.then((response: AxiosResponse<{ message: string; students: Student[] }>) => {
					let newStudent: string[] = [];
					response.data.students.forEach(element => {
						newStudent.push(element.name);
					});
					this.studentsName = newStudent;
				})
				.catch(error => {
					console.log(error);
				});
		},
		studentRoad(studentName: string) {
			return `/cours/student/${studentName}`;
		},
		capitalize(str: string): string {
			if (str == "") return "";
			if (str.length === 1) return str.toUpperCase();
			str = str.replaceAll("-", " ");
			return str.charAt(0).toUpperCase() + str.slice(1);
		},
	},
	mounted() {
		this.loadStudents();
	},
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
/* Style the header with a grey background and some padding */
.header {
	overflow: hidden;
	background-color: #333;
	padding: 20px 10px;
}

/* Style the header links */
.header a {
	float: left;
	color: black;
	text-align: center;
	padding: 12px;
	text-decoration: none;
	font-size: 18px;
	line-height: 25px;
	border-radius: 4px;
}

a {
	color: white;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
	font-size: 25px;
	font-weight: bold;
	color: white;
}

/* Change the background color on mouse-over */
.header a:hover {
	background-color: #ddd;
	color: black;
}

/* Style the active/current link*/
.header a.active {
	background-color: dodgerblue;
	color: white;
}

/* Float the link section to the right */
.header-right {
	float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 1000px) {
	.header a {
		float: none;
		display: block;
		text-align: left;
	}
	.header-right {
		float: none;
	}
}
/* Add a black background color to the top navigation */
.topnav {
	background-color: #333;
	overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
	float: left;
	display: block;
	color: #f2f2f2;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
	background-color: #4caf50;
	color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
	display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
	float: left;
	overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
	font-size: 17px;
	border: none;
	outline: none;
	color: white;
	padding: 14px 16px;
	background-color: inherit;
	font-family: inherit;
	margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
	z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
	float: none;
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover,
.dropdown:hover .dropbtn {
	background-color: #555;
	color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
	background-color: #ddd;
	color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
	display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 1000px) {
	.topnav a:not(:first-child),
	.dropdown .dropbtn {
		display: none;
	}
	.topnav a.icon {
		float: right;
		display: block;
	}
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 1000px) {
	.topnav.responsive {
		margin-left: 10vw;
		position: relative;
	}
	.topnav.responsive a.icon {
		position: absolute;
		right: 0;
		top: 0;
	}
	.topnav.responsive a {
		float: none;
		display: block;
		text-align: left;
	}
	.topnav.responsive .dropdown {
		float: none;
	}
	.topnav.responsive .dropdown-content {
		position: relative;
	}
	.topnav.responsive .dropdown .dropbtn {
		display: block;
		width: 100%;
		text-align: left;
	}
}
</style>
