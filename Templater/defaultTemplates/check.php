<? session_start();

print_r($_SESSION['bonus']);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
{
"rows": [{
        "text": {
            "columns": [{
                "format": "Заказ: %@",
                "args": [{
                    "meta": "tableOrderIdentifierForClient"
                }]
            }]
        }
    }<? if($_SESSION['bonus'] == "on" ){
        echo ", {
        \"text\": {
            \"columns\": [{
                \"extendedFormat\": {
                    \"formatArray\": [
                        \"%@\",
                        \"%@\",
                        \"%@\"
                    ],
                    \"margin\": {}
                },
                \"args\": [{
                    \"meta\": \"customerLastName\"
                }, {
                    \"meta\": \"customerFirstName\"
                }, {
                    \"meta\": \"customerMiddleName\"
                }]
            }]
        },
        \"condition\": {
            \"args\": [{
                \"meta\": \"deliveryAddress\"
            }]
        }
    }";
    }
    if($_SESSION['adress'] == "on"){
        echo "{
        \"text\": ,{
            \"columns\": [{
                \"format\": \"Адрес: %@\",
                \"args\": [{
                    \"meta\": \"deliveryAddress\"
                }]
            }]
        },
        \"condition\": {
            \"args\": [{
                \"meta\": \"deliveryAddress\"
            }]
        }
    }";
    }
    if($_SESSION['tips'] == "on"){
        echo " ,{
        \"text\": {
            \"isBold\": true,
            \"isDoubleHeight\": true,
            \"isDoubleWidth\": true,
            \"columns\": [{
                \"hAlignment\": \"center\",
                \"format\": \"Безналичные чаевые\",
                \"multiline\": {}
            }]
        }
    },{
        \"text\": { 
            \"columns\": [{
                \"hAlignment\": \"center\",
                \"format\": \"Отсканируйте QR-код, чтобы оставить чаевые\",
                \"multiline\": {}
            }]
        }
    },{
        \"type\": \"image\",
        \"image\": {
            \"imageName\": \"tips.png\",
            \"horizontalOffset\": 100
        }
    } ";
    }

        ?>
,{
        "type": "fiscal"
    }]
}

    </pre>
</body>
</html>
