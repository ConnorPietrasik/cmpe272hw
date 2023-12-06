<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?> - StuffCo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <script>
        window.addEventListener('message', function(event) {
            if (event?.data?.type === 'login') {
                localStorage.setItem("userId", event?.data.user_id)
            }
            if (event?.data?.type === 'logout') {
                localStorage.removeItem("userId", event?.data.user_id);
            }
        });
        if (localStorage.getItem('userId')) {
            document.cookie = "userid=${localStorage.getItem('userId')};path=/;SameSite=None;Secure;expires=Fri, 31 Dec 9999 23:59:59 GMT"
        }
        if (!localStorage.getItem('userId')) {
            document.cookie = "userid=gi;path=/;SameSite=None;Secure;expires=Fri, 31 Dec 1999 23:59:59 GMT"
        }
    </script>
</head>

<body>
    <table style="width:100%">
        <tr colspan="5" style="align-items: center;">
            <h1 class="title">StuffCo</p>
        </tr>
        <tr class="nav-row">
            <td><a href="/index.php">Home</a></td>
            <td><a href="/about.php">About</a></td>
            <td><a href="/products.php">Products</a></td>
            <td><a href="/news.php">News</a></td>
            <td><a href="/contacts.php">Contacts</a></td>
            <td><a href="/secure.php">Secure</a></td>
            <td><a href="/user_search.php">User</a></td>
        </tr>
    </table>