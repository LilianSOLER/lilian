const coursTemplate = `
<div class="cours-template">
  <h1>{{ student.class }} - {{ upperFirstLetter(student.name) }}</h1>
    <ul class="parent">
      <div v-for="(cours, index) in student.cours" :key="'courses-'+ index">
        <li>{{ cours.month }}</li>
        <ul>
          <li v-for="(lesson, index2) in cours.lessons" :key="'lesson-' + index2">
            <a :href="lesson.link">{{ lesson.day }} - {{ lesson.title }}</a>
          </li>
        </ul>
      </div>
      <div>
        <li>Utilitaires:</li>
        <ul>
          <div v-for="util in utils">
            <li>
              <a :href="util.link">{{ util.title }}</a>
            </li>
          </div>
        </ul>
      </div>
    </ul>
</div>
`;

export default coursTemplate;
