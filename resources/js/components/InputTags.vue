<template>
    <tags-input element-id="tags" required
        v-model="selectedTags"
        :existing-tags="existingTags"
        :typeahead="true">
    </tags-input>
</template>

<script>

export default {
    props: ['tags'],
    data() {
        return {
            selectedTags: [],
            existingTags: [],
        }
    },
    mounted() {
        var dict = [];
            
        this.tags.forEach(element => {
            dict.push({
                key:   element.id,
            value: element.name,
            });
        });
        this.existingTags = dict;
        
        console.log("Test: ", this.existingTags);
    },
}
</script>

<style>
.tags-input-wrapper-default {
    margin-right: -15px;
    margin-left: -15px;
}
</style>
