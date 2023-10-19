<!DOCTYPE html>
<html>

<body>

    <div id="result"></div>

    <script>
        // Check browser support
        if (typeof(Storage) != "undefined") {
            // Store
            localStorage.setItem("lastname", "Smith");

            // Add code below 
            $name = localStorage.getItem("lastname");
            echo "name is $name";







        } else {
            document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
        }
    </script>

</body>

</html>