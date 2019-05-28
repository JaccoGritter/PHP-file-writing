<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File handling PHP</title>
</head>

<body>

    <p>Voer een naam in en bevestig met "enter".</p>

    <input id="invoer" type="text" placeholder="voer woord in"></input>


    <script>
        let woordArray = [];

        document.getElementById("invoer").addEventListener('keypress', function(e) {
            if (e.key === 'Enter')
                voegWoordToe();
        });

        function voegWoordToe() {
            woordArray.push(document.getElementById("invoer").value);
            addNameToFile(document.getElementById("invoer").value);
            document.getElementById("invoer").value = "";
            //console.log(woordArray);
        }

        function addNameToFile(woord) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let response = this.responseText;
                    console.log(response);
                }
            };
            xmlhttp.open("GET", "readwrite.php?woord=" + woord, true);
            xmlhttp.send();
        }
    </script>

</body>

</html>