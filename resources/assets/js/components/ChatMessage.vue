<template>
    <div class="">
        <div class="panel-body"><strong><p class="text-info">{{message.message}}<small>*****</small><small class="text-danger">{{message.user}}</small></p></strong></div>

    </div>
</template>

<script>
    export default {
        props : ['message']

    }
</script>