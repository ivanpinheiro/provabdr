<?php
/**
 * [redirect função para redirecionamento]
 * redireciona a aplicação para a url do google
 * Foi retirado a função exit() pois a mesma não é uma execução aceitável, pois a aplicação será encerrada logo após o 
 * redirecionamento da url do google. Foi utilizado como referência um tópico de discussão no site stackoverflow, comentando sobre * o uso da função exit() após a função header, segue o link para conhecimento:
 * http://stackoverflow.com/questions/3553698/php-should-i-call-exit-after-calling-location-header
 */


class Navigation
{
	public function redirect()
	{
	    header("Location: http://www.google.com");
	}
}

$nav = new Navigation;
print_r($nav->redirect());die;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $nav->redirect();
} elseif (sset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    $nav->redirect();
}
?>

