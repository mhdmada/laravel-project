<template>
    <div class="feed" ref="feed">
        <ul v-if="contact">
            <li v-for="message in messages" :class="`message${message.to == contact.id ? ' sent' : ' received'}`" :key="message.id">
                <div class="text">
                    <a style="color:#ffffff;" :href="message.text" target="blank">{{ message.text }}</a> 
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contact: {
                type: Object
            },
            messages: {
                type: Array,
                required: true
            }
        },
        methods: {
            scrollToBottom() {
                setTimeout(() => {
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
                }, 50);
            }
        },
        watch: {
            contact(contact) {
                this.scrollToBottom();
            },
            messages(messages) {
                this.scrollToBottom();
            }
        }
    }
</script>

<style lang="scss" scoped>
.feed {
    background: #f0f0f0;
    height: 100%;
    max-height: 470px;
    overflow: scroll;

    ul {
        list-style-type: none;
        padding: 5px;

        li {
            &.message {
                margin: 10px 0;
                width: 100%;

                .text {
                    max-width: 200px;
                    border-radius: 10px;
                    margin-left: 8px;
                    padding: 10px;
                    display: inline-block;
                }

                &.received {
                    text-align: right;

                    .text {
                        color:white;
                        background: #3498db;
                    }
                }

                &.sent {
                    text-align: left;

                    .text {
                        color:white;
                        background: #2ecc71;
                    }
                }
            }
        }
    }
}
</style>

