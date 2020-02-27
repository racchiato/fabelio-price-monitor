
## About This Project

This project was made for the fullfillment of back-end engineer test provided by [Fabelio](https://www.fabelio.com). The demo of this project can be found [HERE](http://salty-mesa-33948.herokuapp.com/). The main controller file can be found in 'app\Http\Controllers\ProductApiController.php'. The routes of this web app can also be found in 'routes\web.php'

## DB Structure

	- products
		- id (primary)
		- url
		- title
		- description
		- timestamps (created_at, updated_at)
	- Images
		- id (primary)
		- url
		- product_id (foreign_key referenceto product.id)
		- timestamps (created_at, updated_at)
	- Prices
		- id (primary)
		- url
		- product_id (foreign_key reference to product.id)
		- price
		- timestamps (created_at, updated_at)

## Controller Methods
 
###### (GET)getAllProducts

URL:
'/products'

Get all the products record with latest price and show it in a table.

###### (POST)searchProduct

Parameter:
'url' => 'String'

URL:
'/product'

Get product instance based on the given URL and show the detail using the '(GET)getProductDetail' 

###### (GET)getProductDetail

Parameter:
'id' => 'Integer'

'/product/{id}'

Get the details of the products including images, descriptions, and prices history

###### (POST)addProduct

Parameter:

'url' => 'String',
'title' => 'String',
'description' => 'Text',
'price' => 'Integer/String',
'imageUrl' => 'String'

URL:
'/add_product'

Create a new product instance (title, url, description) with their first image and starting price.

###### (POST)updatePrice

Parameter:

'id' => 'Integer',
'price' => 'String/Integer'

URL:
'/update_price/{id}'

Update the price for the product instance with the given 'id'.

###### (POST)addImage

Parameter:

'id' => 'Integer',
'imageUrl' => 'String'

URL:
'/add_image/{id}'

Add an image url for the product instance with the given 'id'.













