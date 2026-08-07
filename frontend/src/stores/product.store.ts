import { ProductService } from "@/services/product.service";
import type { Product } from "@/types/product";
import { defineStore } from "pinia";






export const useProductStore = defineStore("products",{


  state: ()=> ({
      products: [] as Product[] ,
      meta: null,
      links: null,
      loading:false

  }),

  actions: {
        async fetchProducts()
        {

          const response  = await ProductService.getProducts();
          this.products = response.data
          this.meta = response.meta
          this.loading= true
        }
  }
});
