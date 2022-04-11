import homeTemplate from "../template/home-template.mjs";
import homeArticles from "./home-info.mjs";

const Home = {
	template: homeTemplate,
	data: function () {
		return {
			articles: homeArticles,
		}
	}
};

export default Home;
