<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{titulo}}</div>

                    <div class="card-body">
                        Escrever as regras aqui!
                    </div>
                </div>
                <br>
                <br>
                <div class="col-md-12">
                    <center>
                        <a type="button" v-bind:href="url" class="btn btn-primary">{{nomebotao}}</a>
                    </center>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo', 'link', 'url', 'nomebotao'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>



