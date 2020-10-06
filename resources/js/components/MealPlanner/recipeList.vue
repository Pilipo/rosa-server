<template>
  <div>
    <div class="card">
      <div class="card-header">Searchbar and sort selection here...</div>
      <div class="card-body">
        <!-- <p>I'm an example component.</p>
              <p>{{ testing }}</p>
              <button v-on:click="testing = 'Hey World!'">Change It</button> -->
        <ul class="list-group list-group-flush">
          <li class="list-group-item" v-for="recipe in recipes" :key="recipe.id">{{ recipe.name }} <em class="text-muted">({{ recipe.yield }})</em></li>
        </ul>
      </div>
    </div>
    <nav class="navbar fixed-bottom navbar-light bg-white">
      <a class="navbar-brand" href="#" v-on:click="addRecipe">Add Recipe</a>
    </nav>
  </div>

</template>

<script>
export default {
  data() {
    return {
      recipes: [],
    };
  },
  methods: {
    addRecipe: function() {
      console.log('adding recipe');
      axios
      .post('https://api.rosa.philliplehner.com/recipes',{
        name: 'wizard fingers',
        yield: '48'
      })
      .then((response) => {
        console.log(this.recipes);
        this.recipes.push(response.data)
        console.log(response.data);
      })
    }
  },
  mounted() {
    axios
      .get('https://api.rosa.philliplehner.com/recipes')
      .then((response) => {
        this.recipes = response.data.data;
      })
    console.log("Component mounted. Testing...");
  },
};
</script>
