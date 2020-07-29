<template>
    <div class="delete-button">
        <form :action="action"
              method="post">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="delete">
        </form>
        <button type="button" @click="click">
            <i :class="icon"></i>
            <span>Delete</span>
        </button>
    </div>
</template>

<script>
    import Modal from './Modal';
    import Vue from 'vue';

    export default {
        name: "DeleteButton",
        components: {
            'modal': Modal,
        },
        props: {
            action: {
                type: String,
                required: true,
            },
            icon: String,
        },
        methods: {
            click() {
                this.eventBus.$emit('modalOpen', {
                    title: null,
                    message: 'Are you sure you want to delete this item?',
                    actionText: 'Yes, delete',
                    actionClass: 'danger',
                    actionCallback: this.doDelete,
                });
            },
            doDelete() {
                $(this.$el).find('form').submit();
            },
        },
    }
</script>