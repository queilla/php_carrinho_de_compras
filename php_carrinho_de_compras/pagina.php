
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
   <title>Minha Loja</title>
    <?
    include ('index.php');
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header{
            background-color: #333;
            color:#fff;
            padding: 10px;
        }
        h1 {
            margin: 0;
        }
        .container{
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
        }
        .product {
            flex-basis: 30%;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            text-align: center;
            box-shadow: 2px 2px 5px #ddd;      
          }
          .product img{
            max-width: 100%;
          }
          .product h2{
            margin-top: 0;
            font-size: 1.4em;
          }
          .product p {
            margin: 10px 0;
            font-size: 1.2em;
          }
          .product button {
            background-color: #4d2460;
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 1.2em;
            cursor: pointer;
          }
          .cart {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
          }
          .cart h2 {
            margin-top: 0;
            font-size: 1.4em;
            margin-bottom: 20px;
          }
          .cart ul {
            list-style: none;
            padding: 0;
            margin: 0;
          }
          .cart li{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
          }
          .cart li:last-child{
            border-bottom: none;
          }
          .cart .total{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            font-size: 1.4em;
          }
    </style>


</head>
<body>
    <header>
        <div class="container">
            <h1>Minha Loja</h1>
          
        </div>
    </header>
    
    <div class="container">
        <div class="cart">
            <h2>Carrinho de compras</h2>
            <ul id="cart-list"></ul>
            <div class="total">
                <span>Total:</span>
                <span id="cart-total"></span>

            </div>
        </div>
        <div id="product-list"></div>
    </div>

        <script src="cart.js"></script>
        <script src="product.js"></script>

        


</body>
</html>