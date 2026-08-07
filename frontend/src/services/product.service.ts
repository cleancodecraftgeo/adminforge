import {api} from "./api";

export const ProductService =
{
  async getProducts()
  {
    const response = await api.get("/products");

    return response.data;
  }
}
