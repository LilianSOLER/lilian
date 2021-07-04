<template>
  <div id="app" class="app">
    <h1>{{ normalizeName }}</h1>
    <p class="description">
      Bienvenue dans notre café {{ restaurant.name }}! Nous sommes réputés pour
      notre pain et nos merveilleuses pâtisseries. Faites vous plaisir dès le
      matin ou avec un goûter réconfortant. Mais attention, vous verrez qu'il
      est difficile de s'arrêter.
    </p>

    <section class="menu">
      <h2>Menu</h2>
      <MenuItem
        v-for="item in simpleMenu"
        :addToShoppingCart="addToShoppingCart"
        :name="item.name"
        :image="item.image"
        :quantity="item.quantity"
        :inStock="item.inStock"
        :key="item.name"
      />
    </section>

    <aside class="shopping-cart">
      <h2>Panier d'achat: {{ shoppingCart }} articles</h2>
    </aside>

    <h2>Contactez nous</h2>
    <p>Adresse : {{ restaurant.address }}</p>
    <p>Téléphone : {{ prettyPhoneNumber }}</p>
    <p>Email : {{ restaurant.email }}</p>
    <p>Horaires :</p>
    <ul>
      <li>L-V: 06:00 à 16:00</li>
      <li>Samedi: 07:00 à 14:00</li>
      <li>Dimanche: 07:00 à 12:00</li>
    </ul>

    <footer class="footer">
      <p>Copyright {{ normalizeName + " " + currentYear }}</p>
    </footer>
  </div>
</template>

<script>
import MenuItem from "./components/MenuItem";

export default {
  name: "App",
  components: {
    MenuItem,
  },
  data() {
    return {
      restaurant: {
        name: "La belle vue",
        phoneNumber: "0188888888",
        email: "hello@cafewithavue.bakery",
        adresse: "18 avenue du Beurre, Paris, France",
      },
      simpleMenu: [
        {
          name: "Croissant",
          image: {
            source: "/images/croissant.jpg",
            alt: "Un croissant",
          },
          inStock: true,
          quantity: 1,
        },
        {
          name: "Baguette de pain",
          image: {
            source: "/images/french-baguette.jpeg",
            alt: "Quatre baguettes de pain",
          },
          inStock: true,
          quantity: 1,
        },
        {
          name: "Éclair",
          image: {
            source: "/images/eclair.jpg",
            alt: "Éclair au chocolat",
          },
          inStock: false,
          quantity: 1,
        },
      ],
      shoppingCart: 0,
    };
  },
  computed: {
    prettyPhoneNumber() {
      return this.restaurant.phoneNumber.replace(/(.{5})(?=.)/g, " ");
    },
    normalizeName() {
      return (
        this.restaurant.name[0].toUpperCase() + this.restaurant.name.slice(1)
      );
    },
    currentYear() {
      return new Date().getFullYear();
    },
  },
  methods: {
    addToShoppingCart(amount) {
      this.shoppingCart += amount;
    },
  },
};
</script>

<style lang="scss">
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
