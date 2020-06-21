<template>
    <div id="accessories-slide" class="grid-x grid-padding-x" ref="slider">
        <div v-for="(item, index) in items" :key="index" class=" medium-4 small-6 cell" ref="tileWidth">
            <div class="-tile"> 
                <div class="-tile-image" :style="{ backgroundImage: `url(${item.productImg})` } ">
                    <div class="-qty-option">
                        <div class="product-cta add-to-cart">
                            <!-- @php echo file_get_contents('images/icons/cart.svg') @endphp -->
                            Cart
                        </div>
                        <input :name="`accessory[${item.productId}]`">
                        <!-- <input name="accessory[{{ $productId }}]"> -->

                        <a href="#" class="product-cta add-to-stock">
                            <!-- @php echo file_get_contents('images/icons/stock.svg') @endphp -->
                            Stock
                        </a>
                    </div>
                </div>
                <div class="-tile-info">
                    <div class="-tile-title flex align-justify">
                        <h3 class="h6">  {{item.productName}}  </h3>
                        <small class="-grey-text -secondary-title"> {{item.sku}} </small>
                    </div>
                    <p>{{ item.productPrice }}</p>
                    <p v-if="item.productMembersPrice" class="-blue-text">Platinum: {{ item.productMembersPrice }}</p>
                    <p v-if="item.productStock">Stock: {{ $productStock }}</p>
                </div>
            </div>
        </div>
        
        <div class="control">
            <button @click="previous" class="prev" ref='prev' :disabled="count === 1">
                PREVIOUS
            </button>
            <button @click="next" class="next" ref="next" :disabled="count === nextBtnLimit">
                NEXT
            </button> 
            <div v-show="false"> 
                <p>Count: {{ count }}</p>
                <p>Leng: {{ items.length }}</p>
                <p>Next limit {{ nextBtnLimit }}</p>
            </div> 
      </div>
 </div>

</template>
<script>
export default {
name: "AccessoriesSlider",
props: {
    accessories:{
        required: true,
    }
},
data() {
    return {
        count: 1,
        items: JSON.parse(this.accessories),
        direction: 'forward',
        frame: 3,
        tileWidth : 0,

    }
},
mounted(){
    //var slide = setInterval(()=>this.slideLoop(this.direction),2000)
     this.$refs.prev.disabled = true;
    this.tileWidth = this.$refs.tileWidth[0].clientWidth;

},
computed: {
    nextBtnLimit(){
        return this.items.length - (this.frame - 1);
     }
},

methods:{
  	previous() {
    	this.count--;
        this.scroll("previous");
	},
    next() {
    	this.count++;
        this.scroll("next");
    },
    scroll(position) {
        let el = this.$refs.slider;
        let pos = 0;
        let increment = 2;
        let id = setInterval(frame, 4);
        let num = this.items.length - this.frame;
        let width = this.tileWidth % 2 === 0 ? this.tileWidth: this.tileWidth - 1;

        function frame() {
            pos++;

            if (pos === width) {
                 console.log('REACHED CLEAR INT');
                clearInterval(id);
            } else { 
                if(position == 'next'){
                     el.scrollLeft += increment;
                    //console.log('NEXT', pos, width);
                } else {
                    el.scrollLeft -= increment;
                    //console.log('PREV', pos, width)
                }  
            }
        }
    }
  }
}

	// slideLoop(pass) {
   	// 	let steps = this.items.length - this.frame;
    // 	if(this.count >= steps & pass == "forward"){
    //         this.direction = "backward";
    //         this.previous();
    //         return
    //     }
    //     if(this.count <= steps & pass == "backward"){
    //         if(this.count <= 0){
    //             this.count = 0;
    //             this.direction = "forward";
    //             this.next();
    //             return;
    //         }
    //         this.previous();
    //         return;
    //     }
    //     if(this.count < steps & pass == "forward"){
    //         if(this.count < 0){
    //             this.resetScroll();
    //             return;
    //         } else if(this.count == 0){
    //             this.next();
    //             return;
    //         }
    //         this.next();
    //         return;
    //     }
    //   this.resetScroll();
    // },
    // resetScroll(){
    // 	this.count = 0;
    //     this.direction = "forward";
    //     this.scroll("reset");
    // },
</script>

