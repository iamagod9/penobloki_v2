<?
    session_start();
    include 'connect.php';

    $penoblockName = $_POST['penoblock-name'];
    $penoblockPrice = $_POST['penoblock-price'];
    $penoblockCount = $_POST['penoblock-count'];

    if (!empty($penoblockName) && !empty($penoblockPrice) && !empty($penoblockCount)) {
    	$cart = is_null($_SESSION['cart']) ? [] : $_SESSION['cart'];
    	$key = array_search($penoblockName, array_column($cart, 'penoblock-name'));
    	if ($key !== false) {
    		$cart[$key]['penoblock-count'] += $penoblockCount;
    	} else {
    		array_push($cart, array('penoblock-name' => $penoblockName, 'penoblock-price' => $penoblockPrice, 'penoblock-count' => $penoblockCount));
    	}

    	$_SESSION['cart'] = $cart;
    }

    header('Location: katalog.php');
?>