<template>
    <tags-input element-id="tags"
    v-model="selectedTags"
    :existing-tags="[
        { key: 'web-development', value: 'Web Development' },
        { key: 'php', value: 'PHP' },
        { key: 'javascript', value: 'JavaScript' },
    ]"
    :typeahead="true"></tags-input>
</template>

<script>
import VoerroTagsInput from '@voerro/vue-tagsinput';
Vue.component('tags-input', VoerroTagsInput);

export default {
    props: ['existing-tags'],
}
</script>

<style>
.tags-input-wrapper-default {
    margin-right: -15px;
    margin-left: -15px;
}
</style>
