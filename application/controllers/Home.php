<?php

class Home extends MY_Controller
{
    public function index($page = null)
    {
        $data['title'] = 'Homepage';   //membuat tittle
        $data['content'] = $this->home->select(
            ['product.id', 'product.title AS product_title', 
            'product.description', 'product.image', 
            'product.price', 'product.is_available',
            'category.title  AS category_title', 'category.slug AS category_slug'
        ]
        )
        ->join('category')
        ->where('product.is_available', 1)
        ->paginate($page)
        ->get();
        $data['total_rows'] = $this->home->where('product.is_available', 1)->count();
        $data['pagination'] = $this->home->makePagination(
        base_url('home'), 2, $data['total_rows']
        );
        $data['page']  = 'pages/home/index';  //memanggil halaman
        

        $this->view($data); //method view yang ada di MY_Controller yang memanggil 'layouts/app'
    }
}