const homeTemplate = `
<div class="home">
  <main>
    <div v-for="(article, index) in articles" :key="'article-' + index">
      <article>
        <p v-for="(paragraph, index2) in article.paragraphs" :key="'paragraph-' + index2">{{ paragraph.text }}</p>
      </article>
      <hr>
    </div>
  </main>
</div>`;

export default homeTemplate;