<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends BaseController
{
    public function showProducts()
    {
        $products = $this->apidata();
    	return view('pages/product/products',[
            "products" => $products
        ]);
    }   
    public function showCart()
    {
        dd(Cart::content());
    }
    public function addToCart(Request $request)
    {
        extract($_POST);

    	$vrfy = Cart::add($product_id, $product_name, $original_quantity, $product_price);

        if($vrfy)
        {
            return response()->json(['msg'=>'Added successfully','total_items'=>Cart::content()->count()]);
        }
        else
        {
            return response()->json(['msg'=>'Some error','total_items'=>Cart::content()->count()]);
        }
    }
    public function delFromCart(Request $request)
    {
    	$rowId = '468399581342505c47f4615b81bedaa9';
    	$cartItem = Cart::remove($rowId);

    	return redirect()->route('add.to.cart');die;
    }



    public function apidata()
    {
        $products = json_decode('

                                {
                        "products": [
                            {
                                "id": 7456680411362,
                                "title": "SILICONE ACRYLIC HOOKAH BOWL MEDIUM (NM-6002)",
                                "handle": "glass-bowl-hookah",
                                "body_html": "",
                                "published_at": "2022-02-24T11:26:28-06:00",
                                "created_at": "2021-11-23T07:11:15-06:00",
                                "updated_at": "2022-02-25T23:20:50-06:00",
                                "vendor": "novomart-usa",
                                "product_type": "",
                                "tags": [],
                                "variants": [
                                    {
                                        "id": 42084979867874,
                                        "title": "Default Title",
                                        "option1": "Default Title",
                                        "option2": null,
                                        "option3": null,
                                        "sku": "10",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": null,
                                        "available": true,
                                        "price": "45.00",
                                        "grams": 0,
                                        "compare_at_price": null,
                                        "position": 1,
                                        "product_id": 7456680411362,
                                        "created_at": "2021-11-23T07:11:15-06:00",
                                        "updated_at": "2022-02-25T23:20:50-06:00"
                                    }
                                ],
                                "images": [
                                    {
                                        "id": 36185853559010,
                                        "created_at": "2021-11-23T07:11:15-06:00",
                                        "position": 1,
                                        "updated_at": "2021-11-23T07:11:17-06:00",
                                        "product_id": 7456680411362,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/6_b589517e-93b4-4325-86b4-9629ad628b8a.png?v=1637673077",
                                        "width": 699,
                                        "height": 700
                                    },
                                    {
                                        "id": 36185853722850,
                                        "created_at": "2021-11-23T07:11:15-06:00",
                                        "position": 2,
                                        "updated_at": "2021-11-23T07:11:17-06:00",
                                        "product_id": 7456680411362,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/02_65b8f481-aaf1-4562-b596-f34b4d79827f.jpg?v=1637673077",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185853591778,
                                        "created_at": "2021-11-23T07:11:15-06:00",
                                        "position": 3,
                                        "updated_at": "2021-11-23T07:11:17-06:00",
                                        "product_id": 7456680411362,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/03_ca7cb474-6fcb-48b8-99b9-2be0a7ac74d3.jpg?v=1637673077",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185853624546,
                                        "created_at": "2021-11-23T07:11:15-06:00",
                                        "position": 4,
                                        "updated_at": "2021-11-23T07:11:17-06:00",
                                        "product_id": 7456680411362,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/04_5ec7339d-0d70-4777-9c02-d9f6c18fbe16.jpg?v=1637673077",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185853657314,
                                        "created_at": "2021-11-23T07:11:15-06:00",
                                        "position": 5,
                                        "updated_at": "2021-11-23T07:11:17-06:00",
                                        "product_id": 7456680411362,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/05_0df58036-8d4c-4eee-80df-2edf15e46f6a.jpg?v=1637673077",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185853821154,
                                        "created_at": "2021-11-23T07:11:15-06:00",
                                        "position": 6,
                                        "updated_at": "2021-11-23T07:11:18-06:00",
                                        "product_id": 7456680411362,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/06_df76bdeb-ff5e-482f-8446-b496c343926b.jpg?v=1637673078",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185853755618,
                                        "created_at": "2021-11-23T07:11:15-06:00",
                                        "position": 7,
                                        "updated_at": "2021-11-23T07:11:18-06:00",
                                        "product_id": 7456680411362,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/07_04f32465-d8bb-4251-8fdb-2f9b7c12d787.jpg?v=1637673078",
                                        "width": 1920,
                                        "height": 1920
                                    }
                                ],
                                "options": [
                                    {
                                        "name": "Title",
                                        "position": 1,
                                        "values": [
                                            "Default Title"
                                        ]
                                    }
                                ]
                            },
                            {
                                "id": 7456678543586,
                                "title": "SILICONE RIDGED HOOKAH BOWL MEDIUM NM-6003",
                                "handle": "sharp-bowl-hookah",
                                "body_html": "",
                                "published_at": "2022-02-24T11:26:27-06:00",
                                "created_at": "2021-11-23T07:08:52-06:00",
                                "updated_at": "2022-02-25T23:25:21-06:00",
                                "vendor": "novomart-usa",
                                "product_type": "",
                                "tags": [],
                                "variants": [
                                    {
                                        "id": 42084972888290,
                                        "title": "Default Title",
                                        "option1": "Default Title",
                                        "option2": null,
                                        "option3": null,
                                        "sku": "10",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": null,
                                        "available": true,
                                        "price": "8.00",
                                        "grams": 0,
                                        "compare_at_price": null,
                                        "position": 1,
                                        "product_id": 7456678543586,
                                        "created_at": "2021-11-23T07:08:52-06:00",
                                        "updated_at": "2022-02-25T23:25:21-06:00"
                                    }
                                ],
                                "images": [
                                    {
                                        "id": 36185836388578,
                                        "created_at": "2021-11-23T07:08:52-06:00",
                                        "position": 1,
                                        "updated_at": "2021-11-23T07:08:53-06:00",
                                        "product_id": 7456678543586,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/4.png?v=1637672933",
                                        "width": 696,
                                        "height": 696
                                    },
                                    {
                                        "id": 36185836552418,
                                        "created_at": "2021-11-23T07:08:52-06:00",
                                        "position": 2,
                                        "updated_at": "2021-11-23T07:08:54-06:00",
                                        "product_id": 7456678543586,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/02_fc480ec0-655a-489f-b37e-ed5995f5fdf7.jpg?v=1637672934",
                                        "width": 800,
                                        "height": 800
                                    },
                                    {
                                        "id": 36185836323042,
                                        "created_at": "2021-11-23T07:08:52-06:00",
                                        "position": 3,
                                        "updated_at": "2021-11-23T07:08:53-06:00",
                                        "product_id": 7456678543586,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/03_9f4a0e95-6762-49ff-85b5-bc37476879d5.jpg?v=1637672933",
                                        "width": 800,
                                        "height": 800
                                    },
                                    {
                                        "id": 36185836355810,
                                        "created_at": "2021-11-23T07:08:52-06:00",
                                        "position": 4,
                                        "updated_at": "2021-11-23T07:08:53-06:00",
                                        "product_id": 7456678543586,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/04_0faa332d-89d4-4c01-99cc-d0fc9d82bdb1.jpg?v=1637672933",
                                        "width": 800,
                                        "height": 800
                                    },
                                    {
                                        "id": 36185836486882,
                                        "created_at": "2021-11-23T07:08:52-06:00",
                                        "position": 5,
                                        "updated_at": "2021-11-23T07:08:54-06:00",
                                        "product_id": 7456678543586,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/05_94e65711-d04a-4846-aada-2f30ce65ae0d.jpg?v=1637672934",
                                        "width": 800,
                                        "height": 800
                                    },
                                    {
                                        "id": 36185836421346,
                                        "created_at": "2021-11-23T07:08:52-06:00",
                                        "position": 6,
                                        "updated_at": "2021-11-23T07:08:53-06:00",
                                        "product_id": 7456678543586,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/06_198d0a91-f3aa-4dc0-ba89-58c643adff72.jpg?v=1637672933",
                                        "width": 800,
                                        "height": 800
                                    },
                                    {
                                        "id": 36185836454114,
                                        "created_at": "2021-11-23T07:08:52-06:00",
                                        "position": 7,
                                        "updated_at": "2021-11-23T07:08:54-06:00",
                                        "product_id": 7456678543586,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/08_879d71d2-55d6-4478-b2cb-bf3aeb3cae1c.jpg?v=1637672934",
                                        "width": 800,
                                        "height": 800
                                    }
                                ],
                                "options": [
                                    {
                                        "name": "Title",
                                        "position": 1,
                                        "values": [
                                            "Default Title"
                                        ]
                                    }
                                ]
                            },
                            {
                                "id": 7456677396706,
                                "title": "SILICONE HOOKAH BOWL PLAIN MEDIUM (NM-6004)",
                                "handle": "bowl-hookah",
                                "body_html": "",
                                "published_at": "2022-02-24T11:26:27-06:00",
                                "created_at": "2021-11-23T07:06:43-06:00",
                                "updated_at": "2022-02-25T23:23:40-06:00",
                                "vendor": "novomart-usa",
                                "product_type": "",
                                "tags": [],
                                "variants": [
                                    {
                                        "id": 42084970365154,
                                        "title": "Default Title",
                                        "option1": "Default Title",
                                        "option2": null,
                                        "option3": null,
                                        "sku": "10",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": null,
                                        "available": true,
                                        "price": "8.00",
                                        "grams": 0,
                                        "compare_at_price": null,
                                        "position": 1,
                                        "product_id": 7456677396706,
                                        "created_at": "2021-11-23T07:06:44-06:00",
                                        "updated_at": "2022-02-25T23:23:40-06:00"
                                    }
                                ],
                                "images": [
                                    {
                                        "id": 36185825378530,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 1,
                                        "updated_at": "2021-11-23T07:06:45-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/3.png?v=1637672805",
                                        "width": 747,
                                        "height": 741
                                    },
                                    {
                                        "id": 36185825706210,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 2,
                                        "updated_at": "2021-11-23T07:06:46-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/02_fe7f710b-ae66-4498-b741-43fe80882b80.jpg?v=1637672806",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185825771746,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 3,
                                        "updated_at": "2021-11-23T07:06:46-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/03_245af9ec-765e-42f4-8ec5-ed1cc3b5b75c.jpg?v=1637672806",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185825345762,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 4,
                                        "updated_at": "2021-11-23T07:06:45-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/04_35203f12-2aa9-46d2-980b-69a6156be377.jpg?v=1637672805",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185825673442,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 5,
                                        "updated_at": "2021-11-23T07:06:46-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/05_7840d7dd-34ff-43f6-b62d-6a29798c3c50.jpg?v=1637672806",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185825738978,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 6,
                                        "updated_at": "2021-11-23T07:06:46-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/06_00045264-518c-443e-abb2-cef0eba3013d.jpg?v=1637672806",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185825837282,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 7,
                                        "updated_at": "2021-11-23T07:06:46-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/07_a99a2e89-ebf8-4150-9038-aad5764fe8da.jpg?v=1637672806",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185825870050,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 8,
                                        "updated_at": "2021-11-23T07:06:47-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/08.jpg?v=1637672807",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185825640674,
                                        "created_at": "2021-11-23T07:06:43-06:00",
                                        "position": 9,
                                        "updated_at": "2021-11-23T07:06:46-06:00",
                                        "product_id": 7456677396706,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/09.jpg?v=1637672806",
                                        "width": 1920,
                                        "height": 1920
                                    }
                                ],
                                "options": [
                                    {
                                        "name": "Title",
                                        "position": 1,
                                        "values": [
                                            "Default Title"
                                        ]
                                    }
                                ]
                            },
                            {
                                "id": 7456676151522,
                                "title": "METAL & SILICONE HOOKAH BOWL MEDIUM (NM-6001)",
                                "handle": "hook-brand-bowl",
                                "body_html": "",
                                "published_at": "2022-02-24T11:26:27-06:00",
                                "created_at": "2021-11-23T07:05:12-06:00",
                                "updated_at": "2022-02-25T23:20:03-06:00",
                                "vendor": "novomart-usa",
                                "product_type": "",
                                "tags": [],
                                "variants": [
                                    {
                                        "id": 42084966957282,
                                        "title": "Default Title",
                                        "option1": "Default Title",
                                        "option2": null,
                                        "option3": null,
                                        "sku": "",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": null,
                                        "available": true,
                                        "price": "40.00",
                                        "grams": 0,
                                        "compare_at_price": null,
                                        "position": 1,
                                        "product_id": 7456676151522,
                                        "created_at": "2021-11-23T07:05:12-06:00",
                                        "updated_at": "2022-02-25T23:20:03-06:00"
                                    }
                                ],
                                "images": [
                                    {
                                        "id": 36185817940194,
                                        "created_at": "2021-11-23T07:05:12-06:00",
                                        "position": 1,
                                        "updated_at": "2021-11-23T07:05:14-06:00",
                                        "product_id": 7456676151522,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/2.png?v=1637672714",
                                        "width": 700,
                                        "height": 671
                                    },
                                    {
                                        "id": 36185818038498,
                                        "created_at": "2021-11-23T07:05:12-06:00",
                                        "position": 2,
                                        "updated_at": "2021-11-23T07:05:14-06:00",
                                        "product_id": 7456676151522,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/02_5549168f-fdcc-4d98-a901-cda386c8013c.jpg?v=1637672714",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185818005730,
                                        "created_at": "2021-11-23T07:05:12-06:00",
                                        "position": 3,
                                        "updated_at": "2021-11-23T07:05:14-06:00",
                                        "product_id": 7456676151522,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/03_2f38cc34-77e7-47ae-8146-6bcf136a3cd9.jpg?v=1637672714",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185818202338,
                                        "created_at": "2021-11-23T07:05:12-06:00",
                                        "position": 4,
                                        "updated_at": "2021-11-23T07:05:15-06:00",
                                        "product_id": 7456676151522,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/04_836d157b-e74b-4edd-955f-134b8a99d4ca.jpg?v=1637672715",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185818169570,
                                        "created_at": "2021-11-23T07:05:12-06:00",
                                        "position": 5,
                                        "updated_at": "2021-11-23T07:05:15-06:00",
                                        "product_id": 7456676151522,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/05_b1ede493-a878-4a45-ba45-69ee7df56540.jpg?v=1637672715",
                                        "width": 1920,
                                        "height": 1920
                                    },
                                    {
                                        "id": 36185817972962,
                                        "created_at": "2021-11-23T07:05:12-06:00",
                                        "position": 6,
                                        "updated_at": "2021-11-23T07:05:14-06:00",
                                        "product_id": 7456676151522,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/06_149fba98-2e80-4201-8d91-a0479a8c80d4.jpg?v=1637672714",
                                        "width": 1920,
                                        "height": 1920
                                    }
                                ],
                                "options": [
                                    {
                                        "name": "Title",
                                        "position": 1,
                                        "values": [
                                            "Default Title"
                                        ]
                                    }
                                ]
                            },
                            {
                                "id": 7432287355106,
                                "title": "Designer Ashtray",
                                "handle": "designer-ashtray",
                                "body_html": "",
                                "published_at": "2022-02-24T10:11:09-06:00",
                                "created_at": "2021-11-04T11:21:08-06:00",
                                "updated_at": "2022-02-24T10:11:09-06:00",
                                "vendor": "novomart-usa",
                                "product_type": "",
                                "tags": [],
                                "variants": [
                                    {
                                        "id": 42001206149346,
                                        "title": "Default Title",
                                        "option1": "Default Title",
                                        "option2": null,
                                        "option3": null,
                                        "sku": "",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": null,
                                        "available": true,
                                        "price": "10.00",
                                        "grams": 0,
                                        "compare_at_price": null,
                                        "position": 1,
                                        "product_id": 7432287355106,
                                        "created_at": "2021-11-04T11:21:08-06:00",
                                        "updated_at": "2022-01-04T01:53:53-06:00"
                                    }
                                ],
                                "images": [
                                    {
                                        "id": 34465858879714,
                                        "created_at": "2021-11-04T11:21:08-06:00",
                                        "position": 1,
                                        "updated_at": "2021-11-04T11:21:09-06:00",
                                        "product_id": 7432287355106,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/WhatsAppImage2021-10-27at10.06.15PM.jpg?v=1636046469",
                                        "width": 266,
                                        "height": 190
                                    }
                                ],
                                "options": [
                                    {
                                        "name": "Title",
                                        "position": 1,
                                        "values": [
                                            "Default Title"
                                        ]
                                    }
                                ]
                            },
                            {
                                "id": 7328635453666,
                                "title": "Hookahs",
                                "handle": "hookahs",
                                "body_html": "",
                                "published_at": "2022-02-24T10:11:08-06:00",
                                "created_at": "2021-10-14T04:40:57-06:00",
                                "updated_at": "2022-02-24T10:11:08-06:00",
                                "vendor": "novomart-usa",
                                "product_type": "",
                                "tags": [],
                                "variants": [
                                    {
                                        "id": 41663877513442,
                                        "title": "Default Title",
                                        "option1": "Default Title",
                                        "option2": null,
                                        "option3": null,
                                        "sku": "10",
                                        "requires_shipping": true,
                                        "taxable": true,
                                        "featured_image": null,
                                        "available": true,
                                        "price": "45.00",
                                        "grams": 0,
                                        "compare_at_price": null,
                                        "position": 1,
                                        "product_id": 7328635453666,
                                        "created_at": "2021-10-14T04:40:57-06:00",
                                        "updated_at": "2022-01-04T01:53:53-06:00"
                                    }
                                ],
                                "images": [
                                    {
                                        "id": 33237290189026,
                                        "created_at": "2021-10-27T08:28:40-06:00",
                                        "position": 1,
                                        "updated_at": "2021-10-27T08:28:42-06:00",
                                        "product_id": 7328635453666,
                                        "variant_ids": [],
                                        "src": "https://cdn.shopify.com/s/files/1/0602/1660/6946/products/amirahookahs.png?v=1635344922",
                                        "width": 768,
                                        "height": 768
                                    }
                                ],
                                "options": [
                                    {
                                        "name": "Title",
                                        "position": 1,
                                        "values": [
                                            "Default Title"
                                        ]
                                    }
                                ]
                            }
                        ]
                    }
                ')->products;
            return $products;
    }
}
