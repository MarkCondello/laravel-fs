<!-- Vue component -->
<template>
  <div>
    <multiselect 
    v-model="value" 
     track-by="id"
    :label="this.labelledBy"
    :options="options"
    :searchable="true"
    :show-labels="true"
    :allow-empty="false"
    deselect-label="An option must be selected"
    placeholder="Choose your product"
    @search-change="asyncFind"
    >
        <template slot="singleLabel" slot-scope="{ option }"><strong>{{ option.productName }}</strong> is worth <strong>${{ option.price }}</strong></template>
    </multiselect>
  </div>
</template>

<script>
  import Multiselect from 'vue-multiselect'
 
  export default {

     props: {
        selectOptions : {
            required : true,
         },
         labelledBy : {
            type: String
         }
    },
    components: { Multiselect },
    data () {
      return {
        value: null,
        options: JSON.parse(this.selectOptions),
        isLoading : false,
        }
    },
    methods: {
        asyncFind(query){
            console.log("QRY: ", query)
            this.isLoading = true;
            //do async search
            setTimeout(()=>{
                this.isLoading = false;
            }, 2000)
        }
    }
  }
</script>

<!-- New step!
     Add Multiselect CSS. Can be added as a static asset or inside a component. -->
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style>
 </style>