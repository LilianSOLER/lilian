<template>
  <Header/>
	<div class="text-center">
		<router-view></router-view>
	</div>
  <Sidebar/>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Header from '@/components/Header.vue'; // @ is an alias to /src
import Sidebar from '@/components/Sidebar.vue';

export default defineComponent({
  name: 'Home',
  components: {
    Header,
    Sidebar,
  },
});
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  color: white;
  background-color: #1e1e1e;
  min-width: 600px;
}

.text-center {
  margin-top: 10vh;
  margin-left: 10vw;
  width: 80vw;
}

a {
	color: white;
  text-decoration: underline;
  cursor: pointer;
}
</style>
