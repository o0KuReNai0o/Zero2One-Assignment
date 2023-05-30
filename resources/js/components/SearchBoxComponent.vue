<template>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search" v-model="searchText">
                    <button class="btn btn-outline-secondary" type="button" @click="search">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            searchText: '',
        };
    },
    methods: {
        search() {
            // Add your search logic here
            console.log(this.searchText);
        },
    },
};
</script>
