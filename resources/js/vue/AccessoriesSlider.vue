<template>
    <div id="accessories-slide" class="grid-x grid-padding-x" ref="slider">
        <div v-for="(item, index) in items" :key="index" class=" medium-4 small-6 cell">
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
            <p @click="previous" class="prev">
                PREVIOUS
            </p>
            <p @click="next" class="next">
                NEXT
            </p>    
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
            count: 0,
            items: JSON.parse(this.accessories),
            direction: 'forward',
            frame: 3
        }
      
    },
// created(){
//   	var slide = setInterval(()=>this.slideLoop(this.direction),2000)
//   },
  methods:{
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
        let increment = 4;
        let id = setInterval(frame, 2);
        let num = this.items.length - this.frame;
        let width = 316;
        //let resize = num * width;
       // let check = position == "reset" ? resize : width;
          function frame() {
            if (pos == width) {
              clearInterval(id);
            } else {
              pos += increment; 
              if(position == 'next'){
                  el.scrollLeft += increment;
              }else{
                  el.scrollLeft -= increment;
              }  
           }
        }
    }
  }
}
</script>