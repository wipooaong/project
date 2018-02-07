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


                this.selectedSpares.push(spare);
            }
        }
    }
</script>