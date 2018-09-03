<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{titulo}}</div>

                    <div class="card-body">
                        {{regra1}}
                        <br/>
                        {{regra2}}
                        <br/>
                        {{regra3}}
                        <br/>
                        {{regra4}}
                        <br/>
                        {{regra5}}
                        <br/>
                        {{regra6}}
                        <br/>
                        {{regra7}}
                        <br/>
                        <br/>
                        <br/>
                        {{regra8}}
                        <br/>
                        <br/>
                        {{"Welcome to the game"}}
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
        props:['titulo', 'link', 'url', 'nomebotao', 'regra1', 'regra2', 'regra3', 'regra4', 'regra5', 'regra6', 'regra7', 'regra8'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>



