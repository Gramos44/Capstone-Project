<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Reactive Shopping Cart</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      /* some basic styling for the shopping cart */
      #cart {
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 10px;
        width: 300px;
        height: auto;
      }
      .cart-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div id="cart">
      <h2>Shopping Cart</h2>
      <div id="cart-items">
        <!-- the items added to the cart will go here -->
      </div>
      <p>Total: $<span id="cart-total">0</span></p>
    </div>
    
    <div id="products">
      <!-- list of products available for purchase -->
      <h2>Products</h2>
      <ul>
        <li data-name="Product 1" data-price="10">Product 1 - $10</li>
        <li data-name="Product 2" data-price="20">Product 2 - $20</li>
        <li data-name="Product 3" data-price="30">Product 3 - $30</li>
      </ul>
    </div>
    
    <script>
      // when a product is clicked, add it to the cart
      $('#products li').on('click', function() {
        const name = $(this).data('name');
        const price = Number($(this).data('price'));
        
        // create the cart item element and add it to the cart
        const cartItem = $('<div class="cart-item"><span class="item-name">' + name + '</span><span class="item-price">$' + price + '</span><button class="remove-item">x</button></div>');
        $('#cart-items').append(cartItem);
        
        // update the cart total
        const cartTotal = Number($('#cart-total').text());
        $('#cart-total').text(cartTotal + price);
      });
      
      // when a remove button is clicked, remove the item from the cart
      $('#cart-items').on('click', '.remove-item', function() {
        const price = Number($(this).siblings('.item-price').text().replace('$', ''));
        
        // remove the cart item element and update the cart total
        $(this).parent('.cart-item').remove();
        const cartTotal = Number($('#cart-total').text());
        $('#cart-total').text(cartTotal - price);
      });
    </script>
  </body>
</html>
