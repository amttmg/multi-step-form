<template>
    <div class="row mt-3">
        <div class="col-md-12 text-lg-right text-center">
            <a v-if="back" href="#" @click.prevent="$emit('back')"
               class="btn-custom btn-primary">Back</a>
            <a href="#" @click.prevent="$emit('next')"
               class="btn-custom btn-primary">Next</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ActionButtons",
        props: {'back': {default: true}, 'next': {default: true}}
    }
</script>

<style scoped>

</style>
