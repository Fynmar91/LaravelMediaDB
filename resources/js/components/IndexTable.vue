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
                        <th scope="col" @click="sort('id')">#</th>
                        <th scope="col" @click="sort('title')">Title</th>
                        <th scope="col" @click="sort('subtitle')">Subtitle</th>
                        <th scope="col" @click="sort('status')">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="pointer" v-for="item in sortedMedia" :key="item.id" @click="showMedia(item.id)">
                        <th scope="row">{{ item.id }}</th>
                        <td>{{ item.title }}</td>
                        <td>{{ item.subtitle }}</td>
                        <td>{{ item.status }}</td>
                    </tr>  
                </tbody>
            </table>
            debug: sort={{currentSort}}, dir={{currentSortDirection}}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['media'],
        data() {
            return {
                mediaData: [],
                currentSort:'id',
                currentSortDirection:'asc'
            }
        },
        mounted() {
            console.log('Component mounted.');
            this.mediaData = this.media;
            console.log(this.mediaData);
        },
        methods: {
            showMedia: function(id){
                window.location.href = "/m/" + id;
            },
            sort: function(s) {
                if (s === this.currentSort) {
                  this.currentSortDirection = this.currentSortDirection==='asc'?'desc':'asc';
                }
                this.currentSort = s;
            }
        },
        computed:{
            sortedMedia: function() {
                return this.mediaData.sort((a,b) => {
                    let modifier = 1;
                    if (this.currentSortDirection === 'desc') modifier = -1;
                    if (this.currentSort === 'id') {
                        if (a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
                        if (a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
                    }
                    else {
                        if (a[this.currentSort] === null) return 1 * modifier;
                        if (b[this.currentSort] === null) return -1 * modifier;
                        if (a[this.currentSort].toString().toLowerCase() < b[this.currentSort].toString().toLowerCase()) return -1 * modifier;
                        if (a[this.currentSort].toString().toLowerCase() > b[this.currentSort].toString().toLowerCase()) return 1 * modifier;
                    }                    
                    return 0;
                });
            }
        }
    }
</script>

<style scoped>
    .pointer {
        cursor: pointer;
    }
</style>
