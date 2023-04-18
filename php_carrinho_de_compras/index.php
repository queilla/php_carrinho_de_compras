<?
//código em PHP para implementar um carrinho de compras simples em um site.
//inclui as funções para adicionar, remover e atualizar produtos no carrinho.
// além de exibir o carrinho e calcular o valor total.
// Você pode chamar essas funções em seu código HTML

session_start();

//Array de produto (exemplo).
$products = array(
    array(
        'id' => 1,
        'name' => 'Produto 1',
        'price' => 10.50,
        'image' => 'produto1.jpg'
    ),
    array(
        'id' => 2,
        'name' => 'Produto 2',
        'price' => 15.00,
        'image' => 'produto2.jpg'
    ),
    array(
        'id' => 3,
        'name' => 'produto 3',
        'price' => 20.00,
        'image' => 'produto3.jpg'
    )
    );


//Adiciona um produto ao carrinho
function addProductToCart($productId, $produtoQuantity){
    $_SESSION['cart'][$productId] += $produtoQuantity;
}

//Remove um produto do carrinho

function removeProductFromCart($productId){
    unset($_SESSION['cart'][$productId]);
}

//atualiza a quantidade de um produto no carrinho
function updateProductQuantity($productId, $productQuantity){
    $_SESSION['cart'][$productId] = $productQuantity;
}

//limpa todo o carrinho
function clearCart(){
    $_SESSION['cart'] = array();
}

//calcula o valor total do carrinho
function calculateCartTotal(){
    $total = 0;
    foreach($_SESSION['cart'] as $productId => $quantity){
        $product = getProductById($productId);
        $total += $product['price'] * $quantity;
    }
    return $total;
}

// Exibe o carrinho
function displayCart(){
    $output = '';
    $output .= '<table>';
    $output .= '<tr><th>Produto</th><th>Quantidade</th><th>Preço</th><th>Total</th><th>Ação</th></tr>';
    foreach($_SESSION['cart'] as $productId => $quantity){
        $product = getProductById($productId);
        $output .= '<tr>';
        $output .= '<td>'.$product['name'].'</td>';
        $output .= '<td><input type="number" value="'.$quantity.'" min="1" max="10" onchange="updateCart('.$productId.', this.value)"></td>';
        $output .= '<td>R$ '.number_format($product['price'], 2, ',', '.').'</td>';
        $output .= '<td>R$ '.number_format($product['price'] * $quantity, 2, ',', '.').'</td>';
        $output .= '<td><a href="#" onclick="removeFromCart('.$productId.')">Remover</a></td>';
        $output .= '</tr>';
    }
    $output .= '<tr><td colspan="3">Total:</td><td colspan="2">R$ '.number_format(calculateCartTotal(), 2, ',', '.').'</td></tr>';
    $output .= '</table>';
    return $output;
}

//retorna um produto pelo Id

function getProductById($productId){
    global $products;
    foreach($products as $product){
        if($product['id'] == $productId){
            return $product;
        }
    }
    return null;
}
?>