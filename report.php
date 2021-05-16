<!DOCTYPE html>
<html lang="en">
<head>
<style>
    div {

        margin: auto;
    }

    table {
        margin: auto;
        width: 70%;
        height: 70%;
    }

    .butt {
        width: 100%;
        height: 100%;
    }

    .ss {
        text-align: left;
        padding: 8px;
        width: 300px;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        height: 50px;
        border: 1px solid;
    }
    .sf {
        text-align: left;
        padding: 8px;
        width: 300px;
    }


    tr:nth-child(even) {
        background-color: white;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>report</title>
</head>
<body>
ิ<br>

<div class=" containner">
<table style="padding-top:10px">
            <thead>
                <tr>
                    <th>รหัส</th>
                    <th>รหัสสินค้า</th>
                    <th>จำนวน</th>
                    <th>รหัสรอบนับ</th>
                    <th>รหัสรอบหลัก</th>
                </tr>
                </thesd>
            <tbody id="result"></tbody>
        </table>
</div>
    
</body>


<script>

$(document).ready(function() {

load_data();

function load_data(query = "") {

    //ประกาศตัวแปร object 
    var data = {};
    data["query"] = query;
    //ประกาศตัวแปรjson ช
    var query = JSON.stringify(data);

    $.ajax({
        url: "load_report.php",
        method: "POST",
        async: false,
        data: {
            "query": query
        },
        dataType: "json",
        success: function(res) {

            var result = res.result;

            var html = "";
            result.forEach(ele => {

                html += "<tr>" +
                    "<td>" + ele.pd_id + "</td>" +
                    "<td>" + ele.pd_c + "</td>" +
                    "<td>" + ele.quantity + "</td>" +
                    "<td>" + ele.sub_id + "</td>" +
                    "<td>" + ele.inv_id + "</td>" +
                    
                    "<tr>";
            });

            $("#result").html(html);
            // load button

        }

    });

}

});

</script>
</html>