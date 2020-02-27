<template>
    <div>
        <h3 class="text-center">Add Link</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="searchProduct">
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" class="form-control" v-model="search.url">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
        <div class="row" v-show="show">
            <div class="col-md-12">
                <h2 class="text-center">Product Found!</h2>
            </div>
            <div class="col-md-6">
                <h3>{{ product.product.title }}</h3>
                <p>{{ product.product.description }}</p>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item" v-for="(image,idx) in product.images" :class="{ active: idx==0 }">
                      <img :src="image.url" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                search: {},
                product: {},
                show: false
            }
        },
        methods: {
            searchProduct() {
                this.axios
                    .post('http://localhost:8000/api/product/search', this.search)
                    .then(response => {
                        this.product = response.data,
                        this.show = true,
                        console.log(response.data)
                    })
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>