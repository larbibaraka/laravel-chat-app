<template>
    <div class="chat-composer">
        <input type="text" v-model="text" @keyup.enter="send">
        <button class="btn btn-success" @click="send">send</button>
    </div>
</template>

<script>
    export default {
        name : "ChatComposer",
        data (){
            return {
                text:""
            }
        },
        methods :{
            send(){
                this.$emit("send",{
                    message : this.text,
//                    user : "larbi batata"
                }
                );
                this.text=""
            }
        }
    }
</script>

<style lang="css">
    .chat-composer{
        display: flex;
    }
    .chat-composer input {
        flex : 1 auto;
    }
    .chat-composer button {
        border-radius: 0;
    }
</style>