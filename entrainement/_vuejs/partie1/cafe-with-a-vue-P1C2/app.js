const app = Vue.createApp({
  data() {
    return {
    restaurant: {
      name: "La belle vue",
      description : `
      Bienvenue dans notre café la belle vue ! Nous sommes réputés pour notre
				pain et nos merveilleuses pâtisseries. Faites vous plaisir dès le matin
				ou avec un goûter réconfortant. Mais attention, vous verrez qu'il est
				difficile de s'arrêter.
        `
    },
    year: new Date().getFullYear()
  };
},
}).mount('.app');

