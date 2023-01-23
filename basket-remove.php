<?
    session_start();
    include 'connect.php';

    $key = $_GET['key'];

    if (isset($key)) {
    	$cart = $_SESSION['cart'];
        unset($cart[$key]);

    	$_SESSION['cart'] = $cart;
    }

    header('Location: basket.php');
?>