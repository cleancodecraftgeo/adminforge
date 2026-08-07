import { ProductService } from "@/services/product.service";
import { defineStore } from "pinia";
import type { Product, PaginationMeta } from "@/types/product"





export const useProductStore = defineStore("products",{


  state: ()=> ({
      products: [] as Product[] ,
      meta: null,
      links: null,
      loading:false
      // meta: null as PaginationMeta| null,
      // loading: false,
  }),

  actions: {
        async fetchProducts()
        {

          const response  = await ProductService.getProducts();
          this.products = response.data
          this.meta = response.meta
          this.loading= true
          return console.log(response,"productStore-dan gelen datalar");
        }
  }
});
