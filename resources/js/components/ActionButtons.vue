<template>
    <div class="row mt-3">
        <div class="col-md-12 text-lg-right text-center">
            <a v-if="back" href="#" @click.prevent="$emit('back')"
               class="btn-custom btn-primary">Back</a>
            <a v-if="next" href="#" @click.prevent="$emit('next')"
               class="btn-custom btn-primary">Next</a>
            <a v-if="submit" href="#" @click.prevent="$emit('submit')"
               class="btn-custom btn-primary">Submit</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ActionButtons",
        props: {'back': {default: true}, 'next': {default: true}, 'submit': {default:false}}
    }
</script>

<style scoped>

</style>
