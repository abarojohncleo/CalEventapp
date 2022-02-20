<template>
    <div :class="[ data ? data : '']" class="alert alert-dismissible">
        <strong>Success!</strong> Added to the database. Refresh to reload data.
    </div>
</template>
<script>
    export default {
    name: 'alert-box',
    props: {
        data: {
            type: String,
            default: ''
        },
    }
    }
</script>
<style scoped>
.alert {
    position: absolute;
    top: 2px;
    right: 2px
}
</style>
