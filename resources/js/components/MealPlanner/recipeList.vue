<template>
  <div class="card">
    <div class="card-header">Searchbar and sort selection here...</div>
    <div class="card-body">
      <!-- <p>I'm an example component.</p>
            <p>{{ testing }}</p>
            <button v-on:click="testing = 'Hey World!'">Change It</button> -->
      <ul class="list-group list-group-flush">
        <li class="list-group-item" v-for="(recipe, index) in recipes.data" v-bind:key="index">{{ recipe.name }} <em class="text-muted">({{ recipe.yield }})</em></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      recipes: [],
    };
  },
  mounted() {
    axios
      .get('http://api.rosa.philliplehner.net/recipes')
      .then((response) => {
        this.recipes = response.data;
        console.log(this.recipes.data);
      })
    console.log("Component mounted. Testing...");
  },
};
</script>
