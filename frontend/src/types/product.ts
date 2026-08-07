// types/product.ts
export interface Product {
  id: string        // ULID olduğu üçün string
  name: string
  price: string     // API-dən string gəlir "1199.00"
}

export interface PaginationLink {
  url: string | null
  label: string
  page: number | null
  active: boolean
}

export interface PaginationMeta {
  current_page: number
  from: number
  last_page: number
  links: PaginationLink[]
  path: string
  per_page: number
  to: number
  total: number
}

export interface ProductResponse {
  data: Product[]
  links: {
    first: string
    last: string
    prev: string | null
    next: string | null
  }
  meta: PaginationMeta
}
