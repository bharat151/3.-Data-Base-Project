var cartItemsName = [];
var cartItemsPrice = [];

function submitBtn(){
  console.log('storing data');
  localStorage.setItem("itemsName",cartItemsName);
   localStorage.setItem("itemsPrice",cartItemsPrice);
   location.href='checkout.php';
}

function addItem(name, price){
  cartItemsName.push(name);
  cartItemsPrice.push(price);
  alert('You have added ' + name+ ' in your cart of price '+ price);
  console.log(cartItemsName);
  console.log(cartItemsPrice);
}
