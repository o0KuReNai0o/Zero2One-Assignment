<template>
    <div class="container">
        <!-- search box -->
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6">
                <div class="input-group">
                    <input class="form-control" type="text" name="query" placeholder="Search text" v-model="searchText" />
                    <button class="btn btn-outline-secondary" type="button" @click="search">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- search box -->

        <!-- results -->
        <div class="row justify-content-center mt-3" v-if="results.length > 0">
            <div class="col-lg-6">
                <h2 class="mt-4 mb-2">Results</h2>
                <ul class="list-group">
                    <li class="list-group-item result-b" v-for="result in results" :key="result.place_id">
                        <h5 class="mt-2">{{ result.name }}</h5>
                        <p>Location: {{ result.formatted_address }}</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- results -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            // set default text to "Bang sue"
            searchText: 'Bang sue',
            results: [],
        };
    },
    methods: {
        async search() {
            try {
                //call search() in MainController with params
                const { data } = await axios.get('api/places/search', {
                    params: { query: this.searchText },
                });
                this.results = data;
            } catch (error) {
                console.log(error);
            }
        },
    },
};
</script>
