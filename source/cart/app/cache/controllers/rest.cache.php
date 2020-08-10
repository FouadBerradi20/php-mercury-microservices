<?php
return array("controllers\\RestCartController"=>array("resource"=>"models\\Cart","authorizations"=>array("get","getCartByDate","save","remove","updateOne","getItemsByCart","getTotal","clearCart","addItemToCart","getCartBy","getItemsBy","update","add","delete"),"route"=>"/rest/carts"),"controllers\\RestCostumerController"=>array("resource"=>"models\\Customer","authorizations"=>array("update","add","delete"),"route"=>"/rest/customers"),"controllers\\RestFavoritesController"=>array("resource"=>"models\\Favorites","authorizations"=>array("getFavoriteProductsByCustomer","addProductToFavorites","removeProductFromFavorites","update","add","delete"),"route"=>"/rest/favorites"),"controllers\\RestItemController"=>array("resource"=>"models\\Item","authorizations"=>array("update","add","delete"),"route"=>"/rest/items"));