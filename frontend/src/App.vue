<script setup lang="ts">
  import { ProductService } from './services/product.service';
  import { onMounted } from 'vue';

  onMounted(async()=>{
    const products = await ProductService.getProducts();
    console.log(products, "salam");
  });
</script>


<template>
<div>

</div>
</template>
