const schoolTemplate = `<div class="school-template">
	<h1>{{ school.title }}</h1>
	<ul class="parent">
		<div v-for="(content, index) in school.contents" :key="'content-' + index">
			<li>{{ content.title }}</li>
			<ul>
				<li v-for="(subContent, index2) in content.subContents" :key="'sub-content-' + index2">
					<a :href="subContent.link">{{ subContent.title }}</a>
				</li>
			</ul>
		</div>
	</ul>
</div>`;

export default schoolTemplate;