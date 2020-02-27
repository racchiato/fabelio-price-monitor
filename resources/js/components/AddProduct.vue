<template>
    <div>
        <h3 class="text-center">Add Link</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addBook">
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" class="form-control" v-model="product.url">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="product.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" v-model="product.description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Link</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product: {}
            }
        },
        methods: {
            addBook() {
                this.axios
                    .post('http://localhost:8000/api/product/add', this.product)
                    .then(response => {
                        this.$router.push({name: 'home'}),
                        console.log(response.data)
                    })
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
