<template>
    <div 
        class="column" 
        v-on:scroll="handleScroll"
        ref="column"
    >
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
    </div>
</template>
<script>
export default {
    name: 'Scrollable',

    methods: {
        handleScroll(evt){

            let column = this.$refs.column,
            columnHeight = column.offsetHeight,
            scrollTop = column.scrollTop;

            console.log({
                 scrollTop: scrollTop,
                columnHeight: columnHeight
            });
            if(scrollTop > columnHeight){
                alert('Reached the bottom');
            }
        }
    }
}
</script>
<style scoped>
    .column {
        border: 1px solid grey;
        height: 400px;
        overflow-y: scroll;
        width: 100px;
    }

    .item {
        height: 150px;
        width: 100%;
        background: red;
        margin-bottom: 1rem;
    }
</style>