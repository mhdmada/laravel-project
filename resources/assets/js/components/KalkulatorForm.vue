<template>
    <div class="container">
        <form>
            <h1 class="text-center">Kalkulator Vue App</h1>
            <input type="number" v-model.number="nomor1" > 
            +
            <input type="number" v-model.number="angka_2" name="">
            
        </form>
        <h2 class="text-center">{{ nomor1 + angka_2 }}</h2>
        
    </div>
</template>

<script type="text/javascript">

    export default{

        props:[
        'nomor1'
        ],
         
        data: function () {
            return {
                angka_1: 0,
                angka_2: 0
            }
        }
    }

</script>