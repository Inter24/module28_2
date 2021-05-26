<?

class Items {

    public $idtoshop = [];
    public function addToCart(int $itemid, int $sklad) {
        if ($sklad >= 0) {
            $idtoshop = array_push($itemid);
        } else {
            print "Товар отсутствует на складе";
        }
    }

}

class Cart {

    //создаем страницу заказа
    public function __construct(int $cartpage)
    {
        $this->cartpage = $cartpage;
    }    

    //получаем данные о товарах в корзине
    public $cartitems = [];
    public function itemsInCart($idtoshop)
    {
        foreach ($this->idtoshop as $item){            
            //запрос в БД - получаем свойства товаров по id
            $cartitems = array_push($item['id'], $item['price'], $item['count'], $item['weight'], $item['discount']);
        }
    }     
    
    public $userdata = [];
    private function getUserData()
    {
        //получаем данные о пользователе (если атворизован)
        return $userdata;
    }    
}

class Order implements Cart {

    public $totalprice;
    public $totaldeliveryprice;

    public function calculateTotalSum($cartitems) {
        //считаем итого
        return $totalprice;
    } 
    public function deleteItem($itemid) {
        //удаление товара из корзины
        return $cartitems;
    }
    public function changeItem($itemid) {
        //изменение кол-ва товара в корзине
        return $cartitems;
    }
    public function countDelivery($idtoshop) {
        //подсчет стоимости и сроков доставки
        return $totaldeliveryprice;
    }

}

class Checkout implements Cart {

    public $orderID;
    public $useremail;
    public $discountType;
    public $discount;

    public function makeDiscount($discountType) {
        //подсчет скидки
        return $discount;
    }

    public function addOrder($orderID)){

        //Добавляем заказ в БД
        /* ................. */

        //добавляем в БД нового пользователя, если его нет
        if (in_array($useremail, $userdata, false)) {                    
            public function addNewUser($username, $useradress, $userphone, $useremail ){
                 
            }
        } 
    }

}


?>