<template>
    <div>
        <div class="row pb-3">
            <div class="d-flex">
                <div class="pr-5"><strong>{{ media.length }}</strong> entries</div>
                <div class="pr-5"><strong>999</strong> completed</div>
                <div class="pr-5"><strong>999</strong>%</div>
            </div>
            <a href="/m/create">Medieneintrag hinzufügen</a>
        </div>    
        <div class="row">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Subtitle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="pointer" v-for="item in media" :key="item.id" @click="showMedia(item.id)">
                        <th scope="row">{{ item.id }}</th>
                        <td>{{ item.title }}</td>
                        <td>{{ item.subtitle }}</td>
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['media'],
        mounted() {
            console.log('Component mounted.');
        },
        methods: {
            showMedia(id){
                window.location.href = "/m/" + id;
            }
        }
    }
</script>

<style scoped>
    .pointer {
        cursor: pointer;
    }
</style>
