<script>
    export default {
        props: ["subparts"],

        data : function(){
            return {
                selectedSpares : [],
                totalPrice : 0,
            }
        },

        mounted() {
            console.log("test");
        },

        methods : {
            onAdd(spare) {
                this.totalPrice = spare.price + this.totalPrice;

                spare.qty = 1;
                this.selectedSpares.push(spare);
            },
            increase(selectedSpare){
                selectedSpare.qty++;
                this.totalPrice = this.totalPrice + selectedSpare.price;
            },
            decrease(selectedSpare){
                if(selectedSpare.qty >= 1){
                    selectedSpare.qty--;
                    this.totalPrice = this.totalPrice - selectedSpare.price;
                }
            },
            remove(index,spare){
                this.selectedSpares.splice(index, 1);
                this.totalPrice = this.totalPrice - (spare.qty * spare.price);
            },  
            showTips(){
                 $('.ui.longer.modal')
                 .modal('show');
            }
        }
    }
</script>