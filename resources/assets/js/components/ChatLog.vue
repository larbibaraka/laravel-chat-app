<template>
    <div class="chat-message">
        <chat-message v-for="message in messages" :message="message" ></chat-message>
    </div>
</template>

<script>
    export default {
        name : "ChatLog",
        props : ['messages'],

    }
</script>

<style>
        .chat-message{
            margin: 20px 0;
        }
</style>