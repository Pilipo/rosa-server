<template>
    <div class="card">
        <div class="card-header">
            {{ moment().startOf('week').add(1, 'day').format('ddd, MMM DD') }}
            to
            {{ moment().endOf('week').add(1, 'day').format('ddd, MMM DD') }}
        </div>

        <div class="card-body">
            <!-- <p>I'm an example component.</p>
            <p>{{ testing }}</p>
            <button v-on:click="testing = 'Hey World!'">Change It</button> -->
            <div class="row">
                <div class="col-lg-6 col-sm-12" v-for="(n, index) in 7" v-bind:key="index">
                    <div class="card mb-2">
                        <div class="card-header">
                            {{ moment().startOf('week').add(n, 'days').format('ddd DD') }}
                        </div>
                        <template></template>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Add another...
                                <span class="float-right">
                                    <span class="btn btn-xs btn-default border">add</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                testing: "huh?",
                recipes: []
            }
        },
        mounted() {
            console.log('Component mounted. Testing...')
        }
    }
</script>
