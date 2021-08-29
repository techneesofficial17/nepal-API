<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Data </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="box" style="display: flex;align-items: center; justify-content: center; height: 100vh; width: 100vw;">
        <div class="container" style="background: #6044CE; padding: 20px; border-radius: 9px; ">
            <h3 style="font-weight: 700; color: white; text-align: center; margin-bottom: 20px;">
                JSON API ADMIN PANEL
            </h3>
            <form action="adddata.php" method="POST">
                <div class="form-row">
                    <div class="col" style="margin: 10px;">
                        <input type="text" class="form-control" name="districtname" id="dsname"
                            placeholder="Enter district name ?">
                    </div>
                    <div class="col" style="margin: 10px;">
                        <select name="province" id="province">
                            <option selected disabled>Select your province</option>
                            <option value="1">
                                Province no. 1
                            </option>
                            <option value="2">
                                Province no. 2
                            </option>
                            <option value="3">
                                Province no. 3
                            </option>
                            <option value="4">
                                Province no. 4
                            </option>
                            <option value="5">
                                Province no. 5
                            </option>
                            <option value="6">
                                Province no. 6
                            </option>
                            <option value="7">
                                Province no. 7
                            </option>

                        </select>
                    </div>
                    <div class="col" style="margin: 10px;">
                        <input type="text" class="form-control" name="areacode" id="dsname"
                            placeholder="Enter area code?">
                    </div>
                    <div class="col" style="margin: 10px;">
                        <input type="text" class="form-control" name="population" id="population"
                            placeholder="total population ?">
                    </div>
                    <div class="col" style="margin: 10px;">
                        <input type="text" class="form-control" name="area" id="area" placeholder="Area of that place?">
                    </div>
                    <div class="col" style="margin: 10px;">
                        <input type="text" class="form-control" name="headquater" id="headquater"
                            placeholder="Headquater name ?">
                    </div>
                    <div class="col" style="margin: 10px;">
                        <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude  ?">
                    </div>
                    <div class="col" style="margin: 10px;">
                        <input type="text" class="form-control" name="longitude" id="longitude"
                            placeholder="longitude  ?">
                    </div>
                    <div class="col" style="margin: 10px;">
                        <input type="submit" value="Add Data" name="addapi" class="btn btn-block btn-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="./script/jquery.js"></script>
</body>

</html>