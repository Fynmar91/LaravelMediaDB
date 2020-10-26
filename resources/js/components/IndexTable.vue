<template>
    <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in media" :key="item.id" @dblclick="showMedia(item.id)">
                    <th scope="row">{{ item.id }}</th>
                    <td>{{ item.title }}</td>
                    <td>{{ item.subtitle }}</td>
                </tr>  
            </tbody>
        </table>
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
