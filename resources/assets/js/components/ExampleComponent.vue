<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Single File Component</div>

                    <div class="card-body">
                        I’m an example of a Vue.js single file component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Single File Component mounted.')
        }
    }
</script>

<style scoped>

</style>
