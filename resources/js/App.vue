<template>
    <div class="container">
        <div class="row text-center" style="margin: 20px 0px 20px 0px;">
            <div class="col-md-4">
                <a href="https://www.fabelio.com/"><img class="img-fluid"src="https://fabelio.com/static/version1582730189/frontend/Fabelio/aurela/id_ID/images/fabelio-logo-2.svg"></a><br>
                <span class="text-secondary">Fabelio Price Monitor</span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Home</router-link>
                    <router-link to="/add" class="nav-item nav-link">Add Product</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>